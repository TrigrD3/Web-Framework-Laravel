<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // check if table jadwals is empty   
        if(DB::table('jadwals')->count() == 0){

            DB::table('jadwals')->insert([

                [
                    'id_dosen' => '1',
                    'id_mk' => '1',
                    'hari' => 'Senin',
                    'jam' => '10.30',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],

                [
                    'id_dosen' => '2',
                    'id_mk' => '2',
                    'hari' => 'Selasa',
                    'jam' => '08.00',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                
                [
                    'id_dosen' => '3',
                    'id_mk' => '3',
                    'hari' => 'Rabu',
                    'jam' => '13.30',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]




            ]);
            
        } else { echo "\e[31mTable is not empty, therefore NOT "; }
    }
}
