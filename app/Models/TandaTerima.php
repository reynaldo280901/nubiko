<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TandaTerima extends Model
{
    use HasFactory;

    protected $table = 'tanda_terima';

    protected $fillable = [
        'id_primer',
        'id_tanda_terima',
        'expedisi',
        'datefilter',
        'marketplace',
        'id_produk',
        'nama_produk',
        'no_resi',
    ];
    public function no_resi()
    {
        return $this->hasMany(NoResi::class, 'id_tanda_terima', 'id_tanda_terima');
    }
}
