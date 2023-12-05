<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TandaTerima;
use Illuminate\Support\Facades\DB;
use PDF;

class PrintController extends Controller
{
    public function printPDF(Request $request)
{
    $expedisiOptions = TandaTerima::distinct()->pluck('nama_expedisi');

    $request->validate([
        'selectedData' => 'required|array',
        'selectedData.*' => 'required|array',
        'selectedData.*.*' => 'exists:tanda_terima,nama_produk', // Add other validation rules as needed
    ]);

    $selectedData = collect($request->input('selectedData'))
        ->flatMap(function ($produkData, $tanggal) {
            return TandaTerima::whereIn('nama_produk', $produkData)
                ->where('tanggal', $tanggal)
                ->select('nama_produk', 'tanggal', DB::raw('AVG(durasi) as durasi'), DB::raw('COUNT(no_resi) as total_resi'), 'nama_expedisi')
                ->groupBy('nama_produk', 'tanggal', 'nama_expedisi')
                ->distinct()
                ->get();
        });

    return view('nubiko.print_pdf', compact('selectedData'));
}


    public function cetakPDF(Request $request)
    {
        try {

            $expedisiOptions = TandaTerima::distinct()->pluck('nama_expedisi');

            $request->validate([
                'selectedData' => 'required|array',
                'selectedData.*' => 'required|array',
                'selectedData.*.*' => 'exists:tanda_terima,nama_produk', // Add other validation rules as needed
            ]);
        
            $selectedData = collect($request->input('selectedData'))
                ->flatMap(function ($produkData, $tanggal) {
                    return TandaTerima::whereIn('nama_produk', $produkData)
                        ->where('tanggal', $tanggal)
                        ->select('nama_produk', 'tanggal', DB::raw('AVG(durasi) as durasi'), DB::raw('COUNT(no_resi) as total_resi'), 'nama_expedisi')
                        ->groupBy('nama_produk', 'tanggal', 'nama_expedisi')
                        ->distinct()
                        ->get();
                });

        $pdf = PDF::loadView('nubiko.cetak_pdf', compact('selectedData'));
        $pdf->setPaper('A4', 'portrait');

        return $pdf->download('tanda-terima.pdf');
    } catch (\Exception $e) {
        return $e->getMessage();
    }
    }
}
