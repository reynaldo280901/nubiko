<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TandaTerima;

class TandaTerimaController extends Controller
{
    public function index(Request $request)
    {
        // Ambil data expedisi untuk pilihan filter
        $expedisiOptions = TandaTerima::distinct()->pluck('nama_expedisi');

        // Filter berdasarkan request
        $tandaTerima = TandaTerima::when($request->has('nama_expedisi'), function ($query) use ($request) {
            return $query->where('nama_expedisi', $request->nama_expedisi);
        })
        ->when($request->has('id_tanda_terima'), function ($query) use ($request) {
            return $query->where('id_tanda_terima', $request->id_tanda_terima);
        })
        ->select('nama_produk', 'tanggal', DB::raw('AVG(durasi) as durasi'), DB::raw('COUNT(no_resi) as total_resi'))
        ->groupBy('nama_produk', 'tanggal')
        ->get();

        return view('nubiko.tanda_terima', compact('tandaTerima', 'expedisiOptions'));
    }
}
