<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // check if table dosens is empty
         if(DB::table('dosens')->count() == 0){

            DB::table('dosens')->insert([

                [
                    'nama_dosen' => 'Andreyan',
                    'nip' => '1283747391',
                    'alamat' => 'Jl. Brigjen H. Hasan Basri Jl. Kayu Tangi, Pangeran, Kec. Banjarmasin Utara, Kota Banjarmasin, Kalimantan Selatan 70123',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],

                [
                    'nama_dosen' => 'Alkaff',
                    'nip' => '1250039904',
                    'alamat' => 'Jl. Brigjen H. Hasan Basri Jl. Kayu Tangi, Pangeran, Kec. Banjarmasin Utara, Kota Banjarmasin, Kalimantan Selatan 70123',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],

                [
                    'nama_dosen' => 'Eka',
                    'nip' => '1239994891',
                    'alamat' => 'Jl. Brigjen H. Hasan Basri Jl. Kayu Tangi, Pangeran, Kec. Banjarmasin Utara, Kota Banjarmasin, Kalimantan Selatan 70123',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],


            ]);
            
        } else { echo "\e[31mTable is not empty, therefore NOT "; }
    }
}
