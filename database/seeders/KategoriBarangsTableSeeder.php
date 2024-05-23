<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriBarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('kategori_barangs')->insert([
            ['kategori' => 'Elektronik', 'created_at' => now(), 'updated_at' => now()],
            ['kategori' => 'Furnitur', 'created_at' => now(), 'updated_at' => now()],
            ['kategori' => 'Pakaian', 'created_at' => now(), 'updated_at' => now()],
            ['kategori' => 'Otomotif', 'created_at' => now(), 'updated_at' => now()],
            ['kategori' => 'Makanan', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
