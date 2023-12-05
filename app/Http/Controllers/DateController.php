<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataNubiko;
use Illuminate\Support\Facades\DB; // Add this line

class DateController extends Controller
{
    public function showDatePage()
    {
        $dates = DB::table('data_nubiko')->get(); // Update to use DB facade
        return view('nubiko.tanggal-paket-outbound');
    }

    public function getData(Request $request)
    {
        $dateFilter = $request->input('datefilter');

        // Validasi format tanggal sesuai dengan daterangepicker
        if (!preg_match('/^\d{4}\/\d{2}\/\d{2}$/', $dateFilter)) {
            return redirect()->back()->with('error', 'Invalid date format.');
        }

        $data = DB::table('data_nubiko')
            ->where('tanggal', $dateFilter)
            ->get();

        $expedisiOptions = DataNubiko::select('nama_expedisi')
        ->where('tanggal', $dateFilter)
        ->distinct()
        ->pluck('nama_expedisi');

        if ($data->isEmpty()) {
        return redirect()->back()->with('error', 'No data found for the selected date range.');
    }

    return view('nubiko.cek-expedisi', ['datefilter' => $dateFilter, 'data' => $data, 'expedisiOptions' => $expedisiOptions]);
}
}
