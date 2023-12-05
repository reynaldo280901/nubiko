<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataNubiko;
use Illuminate\Support\Facades\DB; // Pastikan menggunakan namespace yang benar
use App\Models\TandaTerima; // Make sure to import your TandaTerima model


class TabelScanController extends Controller
{
    public function start(Request $request)
    {
        $request->validate([
            'datefilter' => 'required',
            'expedisi' => 'required',
            'marketplace' => 'required',
            'id_produk' => 'required|array',
        ]);

        $expedisi = $request->input('expedisi');
        $datefilter = $request->input('datefilter');
        $marketplace = $request->input('marketplace');
        $id_produk = $request->input('id_produk');

        session(['id_produk' => $id_produk]);

        // Ambil semua data yang sesuai dengan kriteria
        $allData = DataNubiko::where('tanggal', $datefilter)
        ->where('nama_expedisi', $expedisi)
        ->where('nama_marketplace', $marketplace)
        ->get();

    // Inisialisasi array untuk menandai nomor resi yang duplikat
    $duplicateResi = [];

    // Loop melalui semua data dan tandai nomor resi yang duplikat
    foreach ($allData as $data) {
        $isDuplicate = DataNubiko::where('no_resi', $data->no_resi)
            ->where('id', '!=', $data->id) // Excluding the current row
            ->where('tanggal', $data->tanggal) // Tambahkan pengecekan tanggal
            ->where('nama_expedisi', $data->nama_expedisi) // Tambahkan pengecekan expedisi
            ->where('nama_marketplace', $data->nama_marketplace) // Tambahkan pengecekan marketplace
            ->whereIn('id_produk', $id_produk) // Tambahkan pengecekan id_produk
            ->exists();

        if ($isDuplicate) {
            $duplicateResi[] = $data->no_resi;
        }
    }

    // Ambil data sesuai dengan id_produk dan tandai nomor resi yang duplikat
    $filteredData = DataNubiko::whereIn('id_produk', $id_produk)
        ->where('tanggal', $datefilter)
        ->where('nama_expedisi', $expedisi)
        ->where('nama_marketplace', $marketplace)
        ->get();
// Tambahkan kolom 'nama_produk' pada $filteredData
foreach ($filteredData as $data) {
    $data->nama_produk = DataNubiko::where('id_produk', $data->id_produk)
        ->where('tanggal', $datefilter)
        ->where('nama_expedisi', $expedisi)
        ->where('nama_marketplace', $marketplace)
        ->pluck('nama_produk')
        ->implode(', ');
}
    // Tandai nomor resi yang duplikat dalam data yang difilter
    foreach ($filteredData as $data) {
        $data->is_duplicate = in_array($data->no_resi, $duplicateResi);
    }

    return view('nubiko.tabel_scan_view', compact('filteredData', 'datefilter', 'expedisi', 'marketplace', 'id_produk'));
}
    public function delete(Request $request, $id)
{
    // Find the data by ID
    $data = DataNubiko::find($id);

    // Check if data exists
    if ($data) {
        // Delete the data
        $data->delete();

        // Redirect back with success message or perform other actions
        return redirect()->back()->with('success', 'Data deleted successfully.');
    } else {
        // Redirect back with error message or perform other actions
        return redirect()->back()->with('error', 'Data not found or already deleted.');
    }
}
public function simpan(Request $request)
{
    // Validasi input sesuai kebutuhan
    $request->validate([
        'expedisi' => 'required',
        'datefilter' => 'required',
        'marketplace' => 'required',
        'id_produk' => 'required|array',
        'nama_produk' => 'required|array',
        'no_resi' => 'required|array',
    ]);

    // Find the maximum id_primer in the database and increment it by 1
    $nextIdPrimer = TandaTerima::max('id_primer') + 1;

    // Dapatkan input dari form
    $expedisi = $request->expedisi;
    $datefilter = $request->datefilter;
    $marketplace = $request->marketplace;
    $id_produk_array = $request->input('id_produk');
    $nama_produk_array = $request->input('nama_produk'); // Use a single value for nama_produk
    $no_resi_array = $request->input('no_resi');

    // Loop melalui setiap elemen id_produk
    foreach ($id_produk_array as $index => $id_produk) {
        // Ambil nama_produk dari data yang sesuai
        $nama_produk = DataNubiko::where('id_produk', $id_produk)
            ->where('no_resi', $no_resi_array[$index])
            ->where('tanggal', $datefilter)
            ->where('nama_expedisi', $expedisi)
            ->where('nama_marketplace', $marketplace)
            ->value('nama_produk');

        // Buat objek TandaTerima untuk setiap pasangan id_produk, nama_produk, no_resi
        $tandaTerima = new TandaTerima();
        $tandaTerima->id_primer = $nextIdPrimer; // Set the generated id_primer
        $tandaTerima->id_tanda_terima = now()->format('siHdmY');
        $tandaTerima->nama_expedisi = $expedisi;
        $tandaTerima->tanggal = $datefilter;
        $tandaTerima->nama_marketplace = $marketplace;
        $tandaTerima->nama_produk = $nama_produk; // Use the fetched value for nama_produk
        $tandaTerima->no_resi = $no_resi_array[$index];
        $tandaTerima->id_produk = $id_produk;

        // Simpan entitas ke database
        $tandaTerima->save();

        // Increment the id_primer for the next iteration
        $nextIdPrimer++;
    }

    return redirect()->route('tanda_terima')->with('success', 'Data berhasil disimpan');
}



}