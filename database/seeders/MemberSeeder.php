<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('member')->insert([
            'id_member' => 'M101',
            'nama_member' => 'Salsabila Akiva',
            'alamat' => 'Jl.Kedungsari',
            'no_telepon' => '085678912311',
            'tgl_lahir' => '1999-07-17'
        ]);
    }
}
