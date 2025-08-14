<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangKeluarSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('barang_keluars')->insert([
            [
                'id_barang' => 1, // pastikan id ini ada di tabel stoks
                'jumlah' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 2,
                'jumlah' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}