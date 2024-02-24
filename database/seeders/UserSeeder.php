<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin',
            'gender' => '',
            'address' => '',
            'telp' => '',
            'role' => 'admin'
        ]);
        
        User::create([
            'name' => 'karyawan',
            'email' => 'user1@gmail.com',
            'password' => 'user1',
            'gender' => 'Laki-laki',
            'address' => 'Jl. M. Karyawan',
            'telp' => '1234567890',
            'role' => 'employee'
        ]);
        
        User::create([
            'name' => 'customer',
            'email' => 'user2@gmail.com',
            'password' => 'user2',
            'gender' => 'Laki-laki',
            'address' => 'Jl. M. Customer',
            'telp' => '1234567890',
            'role' => 'customer'
        ]);
        
    }
}
