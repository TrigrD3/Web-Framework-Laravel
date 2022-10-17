<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // check if table mata_kuliahs is empty
        if(DB::table('mata_kuliahs')->count() == 0){

            DB::table('mata_kuliahs')->insert([

                [
                    'nama_mk' => 'Pengantar Teknologi Informasi',
                    'kode_mk' => 'g121',
                    'semester' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],

                [
                    'nama_mk' => 'Pemrograman Web',
                    'kode_mk' => 'g122',
                    'semester' => '2',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],

                [
                    'nama_mk' => 'konsep pemrograman',
                    'kode_mk' => 'g123',
                    'semester' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],


            ]);
            
        } else { echo "\e[31mTable is not empty, therefore NOT "; }
    }
}
