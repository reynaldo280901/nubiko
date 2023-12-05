<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataNubiko;

class DataNubikoController extends Controller
{
    public function showData(Request $request)
    {
        $request->validate([
            'datefilter' => 'required',
            'expedisi' => 'required',
            'marketplace' => 'required',
        ]);

        $dateFilter = $request->input('datefilter');
        $expedisi = $request->input('expedisi');
        $marketplace = $request->input('marketplace');

        // Validate date format to prevent SQL injection
        if (!preg_match('/^\d{4}\/\d{2}\/\d{2}$/', $dateFilter)) {
            return redirect()->back()->with('error', 'Invalid date format.');
        }


        // Retrieve distinct data based on selected columns
        $filteredData = DataNubiko::select('id_produk', 'nama_produk') // Add the columns you want to select
            ->where('tanggal', $dateFilter)
            ->where('nama_expedisi', $expedisi)
            ->where('nama_marketplace', $marketplace)
            ->distinct()
            ->get();

        return view('nubiko.data_nubiko', compact('filteredData'));
    }
}
