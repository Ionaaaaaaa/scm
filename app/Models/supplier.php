<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    protected $table = 'suppliers'; // Specify the table name if it differs from the model name
    protected $fillable = ['nama', 'alamat', 'email', 'telepon']; // Define fillable attributes for mass assignment

    // public function stoks()
    // {
    //     return $this->hasMany(stok::class); // Assuming a supplier can have many products
    // }
}
