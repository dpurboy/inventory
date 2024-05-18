<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $fillable = ['id_kategori_barang', 'nama_barang', 'merk'];

    public function kategori()
    {
        return $this->belongsTo(Kategori_barang::class, 'id_kategori_barang');
    }

    public function detail_barang()
    {
        return $this->hasMany(DetailBarang::class, 'id_barang');
    }
}
