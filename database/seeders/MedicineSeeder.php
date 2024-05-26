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
            'id_category' => 1,
            'price' => 3000,
            'stock' => 5,
            'image' => 'img-dummy.png',
            'description' => 'Paracetamol adalah obat yang digunakan untuk meredakan demam dan nyeri ringan hingga sedang seperti sakit kepala, nyeri otot, dan nyeri gigi. Obat ini bekerja dengan mengubah respons tubuh terhadap nyeri dan panas. Penting untuk menggunakan paracetamol sesuai dengan petunjuk dokter dan mengikuti dosis yang direkomendasikan.',
            'id_supplier' => 1,
        ]);

        Medicine::create([
            'name' => 'Cetirizine',
            'id_category' => 3,
            'price' => 2500,
            'stock' => 7,
            'image' => 'img-dummy.png',
            'description' => 'Cetirizine adalah obat antihistamin yang digunakan untuk mengatasi reaksi alergi seperti bersin, gatal-gatal, ruam, dan mata berair. Obat ini bekerja dengan menghambat aksi histamin, zat yang dilepaskan tubuh saat terjadi reaksi alergi. Cetirizine biasanya digunakan sekali sehari dan harus digunakan sesuai dengan petunjuk dokter.',
            'id_supplier' => 3,
        ]);

        Medicine::create([
            'name' => 'Ibuprofen',
            'id_category' => 1,
            'price' => 4000,
            'stock' => 3,
            'image' => 'img-dummy.png',
            'description' => 'Ibuprofen adalah obat antiinflamasi nonsteroid (OAINS) yang digunakan untuk meredakan nyeri, peradangan, dan demam. Obat ini bekerja dengan mengurangi produksi prostaglandin, yaitu zat yang bertanggung jawab atas sensasi nyeri dan peradangan. Penting untuk menggunakan ibuprofen sesuai petunjuk dokter dan mengikuti dosis yang tepat.            ',
            'id_supplier' => 2,
        ]);

        Medicine::create([
            'name' => 'Amoxicillin',
            'id_category' => 2,
            'price' => 5000,
            'stock' => 10,
            'image' => 'img-dummy.png',
            'description' => 'Amoxicillin adalah antibiotik yang digunakan untuk mengatasi infeksi bakteri pada berbagai bagian tubuh, termasuk saluran pernapasan, kulit, dan sistem kemih. Obat ini bekerja dengan menghentikan pertumbuhan bakteri atau membunuhnya. Amoxicillin harus digunakan sesuai dengan petunjuk dokter dan perhatikan dosis yang direkomendasikan.',
            'id_supplier' => 1,
        ]);

        Medicine::create([
            'name' => 'Loratadine',
            'id_category' => 3,
            'price' => 3500,
            'stock' => 8,
            'image' => 'img-dummy.png',
            'description' => 'Loratadine adalah obat antihistamin yang digunakan untuk mengatasi gejala alergi seperti bersin, gatal-gatal, pilek, dan mata berair. Obat ini bekerja dengan menghambat aksi histamin, zat yang dilepaskan tubuh saat terjadi reaksi alergi. Penting untuk menggunakan loratadine sesuai dengan petunjuk dokter dan mengikuti dosis yang dianjurkan.',
            'id_supplier' => 2,
        ]);

        Medicine::create([
            'name' => 'Omeprazole',
            'id_category' => 5,
            'price' => 6000,
            'stock' => 6,
            'image' => 'img-dummy.png',
            'description' => 'Omeprazole adalah obat yang mengurangi produksi asam lambung dalam tubuh. Obat ini digunakan untuk mengatasi masalah pencernaan seperti sakit maag, tukak lambung, dan penyakit refluks asam. Omeprazole membantu mengurangi gejala seperti nyeri ulu hati, mual, dan muntah. Penting untuk menggunakan obat ini sesuai dengan petunjuk dokter dan mengikuti dosis yang direkomendasikan.',
            'id_supplier' => 3,
        ]);

        Medicine::create([
            'name' => 'Sertraline',
            'id_category' => 4,
            'price' => 7000,
            'stock' => 4,
            'image' => 'img-dummy.png',
            'description' => 'Sertraline adalah obat antidepresan yang digunakan untuk mengobati depresi, gangguan kecemasan, dan gangguan suasana hati lainnya. Obat ini bekerja dengan meningkatkan kadar neurotransmitter di otak yang mempengaruhi suasana hati dan perasaan seseorang. Penting untuk menggunakan sertraline sesuai dengan petunjuk dokter, dan penggunaannya biasanya memerlukan waktu tertentu untuk efek maksimal.',
            'id_supplier' => 1,
        ]);

        Medicine::create([
            'name' => 'Loperamide',
            'id_category' => 1,
            'price' => 4500,
            'stock' => 9,
            'image' => 'img-dummy.png',
            'description' => 'Loperamide adalah obat antidiare yang bekerja dengan memperlambat gerakan usus untuk mengurangi frekuensi dan keparahan diare. Obat ini membantu mengontrol diare akut atau kronis yang tidak disebabkan oleh infeksi bakteri. Loperamide harus digunakan sesuai dengan petunjuk dokter dan perhatikan instruksi dosis yang tepat.',
            'id_supplier' => 2,
        ]);

        Medicine::create([
            'name' => 'Dexamethasone',
            'id_category' => 5,
            'price' => 5500,
            'stock' => 7,
            'image' => 'img-dummy.png',
            'description' => 'Dexamethasone adalah obat kortikosteroid yang digunakan untuk mengatasi peradangan dan alergi. Obat ini bekerja dengan mengurangi respons sistem kekebalan tubuh yang menyebabkan peradangan. Dexamethasone digunakan dalam berbagai kondisi seperti asma, reaksi alergi, arthritis, dan kondisi kulit tertentu. Penting untuk menggunakan obat ini sesuai dengan petunjuk dokter dan mengikuti dosis yang direkomendasikan.',
            'id_supplier' => 3,
        ]);

        Medicine::create([
            'name' => 'Simvastatin',
            'id_category' => 3,
            'price' => 8000,
            'stock' => 5,
            'image' => 'img-dummy.png',
            'description' => 'Simvastatin adalah obat yang termasuk dalam kategori "Statins" atau "Lipid-lowering Agents". Obat ini digunakan untuk mengurangi kadar kolesterol dalam darah dan mengurangi risiko penyakit jantung. Simvastatin bekerja dengan menghambat enzim HMG-CoA reduktase, yang bertanggung jawab dalam produksi kolesterol di dalam tubuh.',
            'id_supplier' => 1,
        ]);
    }
}
