<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('nubiko.index');
});

Route::get('/scan-paket-outbound', function () {
    return view('nubiko.scan-paket-outbound');
})->name('scan-paket-outbound');

Route::get('/tanggal-paket-outbound-view', function () {
    return view('nubiko.tanggal-paket-outbound');
})->name('tanggal-paket-outbound');


use App\Http\Controllers\DataNubikoController;

// Rute untuk menampilkan data_nubiko, menggunakan metode showData di DataNubikoController
Route::get('/data_nubiko/{expedisi}/{marketplace}', [DataNubikoController::class, 'showData'])->name('data_nubiko.show');

// Rute untuk memproses form scan
Route::post('/nubiko/tabel_scan_view', [ScanController::class, 'start'])->name('scan.start');

use App\Http\Controllers\DateController;

Route::get('/tanggal-paket-outbound-view', [DateController::class, 'showDatePage'])->name('tanggal-paket-outbound');
Route::post('/getData', [DateController::class, 'getData'])->name('getData');

// ...

use App\Http\Controllers\ExpedisiController;
use App\Http\Controllers\MarketplaceController;

Route::get('/cek-expedisi', function () {
    return view('nubiko.cek-expedisi');
})->name('cek-expedisi');

Route::post('/cek-expedisi', [ExpedisiController::class, 'chooseExpedisi'])->name('choose.expedisi');

Route::get('/marketplace/{expedisi}', [MarketplaceController::class, 'showMarketplaceForm'])->name('marketplace.form');
Route::post('/marketplace/{expedisi}/cek', [MarketplaceController::class, 'cekMarketplace'])->name('marketplace.cek');

// web.php
use App\Http\Controllers\ScanController;

Route::post('/nubiko/tabel_scan_view', [ScanController::class, 'start'])->name('scan.start');
