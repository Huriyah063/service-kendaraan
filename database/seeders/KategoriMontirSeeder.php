<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriMontirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategori_montirs')->insert([
            ['nama' => 'Montir Umum', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Montir Elektrik', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Montir Mesin', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Montir Body', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Montir Spesialis Ban', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
