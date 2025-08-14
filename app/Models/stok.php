<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class stok extends Model
{
    protected $table = 'stoks';
    protected $fillable = ['nama', 'jumlah', 'gudang'];

    public function barangKeluars()
{
    return $this->hasMany(barangKeluar::class, 'id_barang');
}
}
