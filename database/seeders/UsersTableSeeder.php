<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('users')->insert([
            [
                'name' => 'User One',
                'email' => 'user1@example.com',
                'password' => Hash::make('password'),
                'alamat' => 'Alamat 1',
                'no_telp' => '081234567890',
                'pekerjaan' => 'Pekerjaan 1',
                'tanggal_lahir' => '1990-01-01',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'User Two',
                'email' => 'user2@example.com',
                'password' => Hash::make('password'),
                'alamat' => 'Alamat 2',
                'no_telp' => '081234567891',
                'pekerjaan' => 'Pekerjaan 2',
                'tanggal_lahir' => '1991-02-02',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'User Three',
                'email' => 'user3@example.com',
                'password' => Hash::make('password'),
                'alamat' => 'Alamat 3',
                'no_telp' => '081234567892',
                'pekerjaan' => 'Pekerjaan 3',
                'tanggal_lahir' => '1992-03-03',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'User Four',
                'email' => 'user4@example.com',
                'password' => Hash::make('password'),
                'alamat' => 'Alamat 4',
                'no_telp' => '081234567893',
                'pekerjaan' => 'Pekerjaan 4',
                'tanggal_lahir' => '1993-04-04',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'User Five',
                'email' => 'user5@example.com',
                'password' => Hash::make('password'),
                'alamat' => 'Alamat 5',
                'no_telp' => '081234567894',
                'pekerjaan' => 'Pekerjaan 5',
                'tanggal_lahir' => '1994-05-05',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
