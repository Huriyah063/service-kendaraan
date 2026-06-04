<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Montir extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomor',
        'nama',
        'jenis_kelamin',
        'tgl_lahir',
        'tmp_lahir',
        'kategori_montir_id',
    ];
    public function kategoriMontir()
    {
        return $this->belongsTo(KategoriMontir::class, 'kategori_montir_id');
    }
}
