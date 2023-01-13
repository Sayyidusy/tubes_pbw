<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Sayyidusy',
                'email' => 'sayyidys1@gmail.com',
                'jenisKelamin' => '1',
                'nohp' => '081234567890',
                'alamat' => 'Jl. Kebon Jeruk No. 1 RT 01 RW 01 Kec. Kebon Jeruk Kel. Kebon Jeruk Kota Jakarta Barat Provinsi DKI Jakarta',
                'kodepos' => '12345',
                'password' => '$2y$10$lkbPD6BrmeMMlPF/WL1tcO0gvgRfPxXn2RvbRKSZlzRn9N48A7uAG',
            ],
            [
                'name' => 'Faiz',
                'email' => 'faiz1@gmail.com',
                'jenisKelamin' => '1',
                'nohp' => '081234567890',
                'alamat' => 'Jl. Kebon Jeruk No. 1 RT 01 RW 01 Kec. Kebon Jeruk Kel. Kebon Jeruk Kota Jakarta Barat Provinsi DKI Jakarta',
                'kodepos' => '12345',
                'password' => '$2y$10$lkbPD6BrmeMMlPF/WL1tcO0gvgRfPxXn2RvbRKSZlzRn9N48A7uAG',
            ],
            [
                'name' => 'Mey',
                'email' => 'mey1@gmail.com',
                'jenisKelamin' => '2',
                'nohp' => '081234567890',
                'alamat' => 'Jl. Kebon Jeruk No. 1 RT 01 RW 01 Kec. Kebon Jeruk Kel. Kebon Jeruk Kota Jakarta Barat Provinsi DKI Jakarta',
                'kodepos' => '12345',
                'password' => '$2y$10$lkbPD6BrmeMMlPF/WL1tcO0gvgRfPxXn2RvbRKSZlzRn9N48A7uAG',
            ],

        ];
        User::insert($user);
    }
}
