<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    function getAllJadwal(){
        
        // get data from another tables
        return Jadwal::all();
    }
    
    function dosen(){
        return $this -> belongsTo('App\Models\Dosen', "id_dosen");
    }

    function mataKuliah(){
        return $this -> belongsTo('App\Models\MataKuliah', "id_mk");
    }

}
