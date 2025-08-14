<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('penjualans')->insert([
            [
                'jumlah' => 10,
                'jenis_barang' => 'kaos',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jumlah' => 5,
                'jenis_barang' => 'jaket',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}