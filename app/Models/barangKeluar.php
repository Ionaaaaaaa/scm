<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class barangKeluar extends Model
{
    protected $table = 'barang_keluars';
    protected $fillable = ['id_barang', 'jumlah'];

    public function stok()
    {
        return $this->belongsTo(stok::class, 'id_barang');
    }
}