<?php

namespace Database\Seeders;

use App\Models\Medicine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Medicine::create([
            'name' => 'Paracetamol',
            'id_category' => '1',
            'price' => '3000',
            'stock' => '5',
            'id_supplier' => '1',
        ]);

        Medicine::create([
            'name' => 'Cetirizine',
            'id_category' => '3',
            'price' => '2500',
            'stock' => '7',
            'id_supplier' => '3',
        ]);
    }
}
