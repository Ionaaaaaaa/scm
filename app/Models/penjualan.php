<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    protected $table = 'penjualans';
    protected $fillable = ['jumlah', 'jenis_barang'];

}
