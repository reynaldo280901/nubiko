<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScanController extends Controller
{
    public function start(Request $request)
    {
        $selectedIds = $request->input('selected_ids');

        \Log::info('Produk yang dicentang: ' . implode(', ', $selectedIds));

        return view('nubiko.tabel_scan_view');
    }
}