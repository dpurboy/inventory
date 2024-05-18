<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailBarang extends Model
{
    use HasFactory;

    protected $fillable = ['id_barang', 'kode_barang', 'status_barang'];

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang');
    }
}
