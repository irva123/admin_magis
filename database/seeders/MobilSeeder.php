<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mobil')->insert([
            'plat_nomor' => 'S 1234 SS',
            'jenis_mobil' => 'Honda Brio E M/T',
            'merk' => 'Brio',
            'Kapasitas' => 6,
            'tahun' => '2016',
            'Tarif' => 200000,
            'foto' => asset('assets/Brio.png'),
            'status_id' => '1'
        ]);
    }
}
