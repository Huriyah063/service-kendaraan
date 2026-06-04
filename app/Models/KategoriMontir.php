<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class KategoriMontir extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
    ];
    public function montirs()
    {
        return $this->hasMany(Montir::class, 'kategori_montir_id');
    }
}
