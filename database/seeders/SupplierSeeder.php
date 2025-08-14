<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('suppliers')->insert([
            [
                'nama' => 'Supplier A',
                'alamat' => 'Jl. Mawar No. 1',
                'telepon' => '08123456789',
                'email' => 'suppliera@email.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Supplier B',
                'alamat' => 'Jl. Melati No. 2',
                'telepon' => '08129876543',
                'email' => 'supplierb@email.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}