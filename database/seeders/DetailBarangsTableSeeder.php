<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DetailBarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $barangs = \DB::table('barangs')->selectRaw('barangs.id as id_barang, kategori_barangs.id as id_kategori, barangs.merk, barangs.nama_barang, kategori_barangs.kategori as kategori')->join('kategori_barangs','barangs.id_kategori_barang','=','kategori_barangs.id')->get();

        // print_r($barangs);
        // echo $barangs->count();
        foreach ($barangs as $barang) {
            $numberOfDetails = rand(1, 5);
            echo $barang->id_barang.'(';
            echo "-->  ".$numberOfDetails;

            for ($i = 0; $i < $numberOfDetails; $i++) {
                
                $kode_barang = "{$barang->kategori}/{$barang->merk}/{$barang->nama_barang}/" . now()->timestamp . $i;
                \DB::table('detail_barangs')->insert([
                    'id_barang' => $barang->id_barang,
                    'kode_barang' => $kode_barang,
                    'status_barang' => $faker->randomElement(['B', 'R', 'P', 'D']),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
            
            echo ')   ';
            
            $numberOfDetails = 0;
        }
    }
}
