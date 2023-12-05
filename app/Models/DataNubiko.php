<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataNubiko extends Model
{
    protected $table = 'data_nubiko';
    protected $fillable = ['tanggal', 'nama_expedisi', 'nama_marketplace', 'id_produk', 'nama_produk', 'no_resi'];
}