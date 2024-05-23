<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $kategoriIDs = \DB::table('kategori_barangs')->pluck('id')->toArray();

        foreach ($kategoriIDs as $kategoriID) {
            $numberOfBarangs = rand(1, 3);
            for ($i = 0; $i < $numberOfBarangs; $i++) {
                \DB::table('barangs')->insert([
                    'id_kategori_barang' => $kategoriID,
                    'nama_barang' => $faker->name,
                    'merk' => $faker->company,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
