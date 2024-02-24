<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Supplier::create([
            'name' => 'PT Multiverse Anugerah Chemindo',
            'address' => 'Jl. Hasyim Ashari No.118,Golden City Business Park Blok A9 Cipondoh-Tangerang, Tangerang, Banten, Indonesia',
            'city' => 'Tangerang Selatan',
            'contact_person' => '',
            'telp' => ''
        ]);
        
        Supplier::create([
            'name' => 'PT Jaya Utama Santikah',
            'address' => 'SMART MARKET DAAN MOGOT BLOK B NO 8 Jl. Daan Mogot KM 19 Kebun Besar Batu Ceper Tangerang 15122, Kota Tangerang, Banten, Indonesia',
            'city' => 'Tangerang',
            'contact_person' => '',
            'telp' => ''
        ]);
        
        Supplier::create([
            'name' => 'PT. Podo Mekar Jaya Sentosa',
            'address' => 'Jl. Kalisari III/14, Surabaya, Jawa Timur, Indonesia',
            'city' => 'Surabaya',
            'contact_person' => '',
            'telp' => ''
        ]);
    }
}
