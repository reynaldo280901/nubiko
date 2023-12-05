<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataNubikoController;
use App\Http\Controllers\DateController;
use App\Http\Controllers\ExpedisiController;
use App\Http\Controllers\MarketplaceController;
use App\Http\Controllers\TabelScanController;
use App\Http\Controllers\TandaTerimaController;
use App\Http\Controllers\CetakPDFController;


Route::get('/', function () {
    return view('nubiko.index');
});
Route::get('/tanda-terima', function () {
    return view('nubiko.tanda_terima');
})->name('tanda_terima');
Route::get('/scan-paket-outbound', function () {
    return view('nubiko.scan-paket-outbound');
})->name('scan-paket-outbound');

Route::get('/tanggal-paket-outbound', [DateController::class, 'showDatePage'])->name('tanggal-paket-outbound');
Route::post('/cek-expedisi', [DateController::class, 'getData'])->name('cek-expedisi');

Route::get('/choose-expedisi/{datefilter}', [ExpedisiController::class, 'showExpedisiForm'])->name('choose-expedisi');
Route::post('/choose-expedisi', [ExpedisiController::class, 'chooseExpedisi'])->name('process-expedisi');

Route::get('/choose-marketplace/{expedisi}/{datefilter}', [MarketplaceController::class, 'showMarketplaceForm'])->name('choose-marketplace');
Route::post('/cek-marketplace', [MarketplaceController::class, 'chooseMarketplace'])->name('process-marketplace');
Route::get('/marketplace', function () {
    return view('nubiko.marketplace');
})->name('marketplace');

Route::get('/data-nubiko', [DataNubikoController::class, 'showData'])->name('data_nubiko');
Route::get('/nubiko/tabel_scan_view', [TabelScanController::class, 'start'])->name('scan.start');
Route::get('/delete/{id}', [TabelScanController::class, 'delete'])->name('delete');
Route::get('/tabel-scan-view', [TabelScanController::class, 'start'])->name('tabel_scan_view');
Route::post('/scan/simpan', [TabelScanController::class, 'simpan'])->name('scan.simpan');
Route::get('/scan/simpan', [TabelScanController::class, 'simpan'])->name('scan.simpan');
Route::get('/halaman-tanda-terima', [TandaTerimaController::class, 'index'])->name('tanda_terima');

use App\Http\Controllers\PrintController;

Route::match(['get', 'post'], '/print-pdf', [PrintController::class, 'printPDF'])->name('print.pdf');
Route::post('/cetak-pdf', [PrintController::class, 'cetakPDF'])->name('cetak.pdf');