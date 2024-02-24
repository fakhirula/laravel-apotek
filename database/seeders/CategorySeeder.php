<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Analgesik',
            'description' => ' Obat penghilang rasa sakit seperti parasetamol atau ibuprofen'
        ]);
        
        Category::create([
            'name' => 'Antibiotik',
            'description' => 'Obat yang digunakan untuk mengatasi infeksi bakteri',
        ]);
        
        Category::create([
            'name' => 'Antihistamin',
            'description' => 'Obat yang digunakan untuk mengatasi reaksi alergi',
        ]);
        
        Category::create([
            'name' => 'Antidepresan',
            'description' => 'Obat yang digunakan untuk mengobati depresi dan gangguan kecemasan',
        ]);
        
        Category::create([
            'name' => 'Antasid',
            'description' => 'Obat yang digunakan untuk mengurangi keasaman lambung',
        ]);
    }
}
