<?php

namespace Database\Seeders;

use App\Models\Supply;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Supply::create([
            'date' => '2024-01-01',
            'id_user' => '2',
            'id_supplier' => '1',
            'id_medicine' => '1',
            'quantity' => '3',
            'price' => '2000',
            'total_payment' => '6000'
        ]);
    }
}
