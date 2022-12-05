<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // check if table mahasiswas is empty
        if(DB::table('mahasiswas')->count() == 0){

            DB::table('mahasiswas')->insert([

                [
                    'nama' => 'Arya',
                    'nim' => '111',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],

                [
                    'nama' => 'Razaq',
                    'nim' => '112',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                ]);
            }
    }
    
}
