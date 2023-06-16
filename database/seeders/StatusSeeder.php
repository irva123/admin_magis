<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = [
            ['status_mobil' => 'Tersedia',],
            ['status_mobil' => 'Tidak Tersedia',],
            ];
            DB::table('status')->insert($status);
    }
}
