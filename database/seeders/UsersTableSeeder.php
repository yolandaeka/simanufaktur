<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Yolanda Ekaputri',
                'username' => 'superadmin',
                'email' => 'superadmin@example.com',
                'password' => Hash::make('password123'),
                'address' => 'Jl. Merdeka No. 1',
                'role' => 'SUPERADMIN',
                
            ],
            [
                'name' => 'Rizky',
                'username' => 'ppicuser',
                'email' => 'ppic@example.com',
                'password' => Hash::make('password123'),
                'address' => 'Jl. Industri No. 2',
                'role' => 'PPIC',
                
            ],
            [
                'name' => 'Alma',
                'username' => 'produser',
                'email' => 'prod@example.com',
                'password' => Hash::make('password123'),
                'address' => 'Jl. Produksi No. 3',
                'role' => 'PROD',
                
            ],
            [
                'name' => 'Ilyas',
                'username' => 'gudanguser',
                'email' => 'gudang@example.com',
                'password' => Hash::make('password123'),
                'address' => 'Jl. Gudang No. 4',
                'role' => 'GUD',
                
            ],
            [
                'name' => 'Rafif',
                'username' => 'adminppic',
                'email' => 'adminppic@example.com',
                'password' => Hash::make('password123'),
                'address' => 'Jl. PPIC No. 5',
                'role' => 'PPIC',
            ],
        ];

        DB::table('users')->insert($users);
    }
}
