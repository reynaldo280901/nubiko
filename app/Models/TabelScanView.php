<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelScanView extends Model
{
    protected $table = 'data_nubiko';
    protected $fillable = ['tanggal', 'id_expedisi', 'nama_marketplace', 'id_produk', 'nama_produk', 'durasi', 'bukti_foto', 'ttd', 'no_resi'];
}