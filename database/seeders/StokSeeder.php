<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('stoks')->insert([
            [
                'nama' => 'zipper',
                'jumlah' => 100,
                'gudang' => 'Gudang A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'benang',
                'jumlah' => 50,
                'gudang' => 'Gudang B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}