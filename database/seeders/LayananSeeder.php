<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('layanans')->insert([
            ['nama' => 'Servis Mesin', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Ganti Oli', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Pengecekan Rem', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Servis AC', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Balancing dan Spooring', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
