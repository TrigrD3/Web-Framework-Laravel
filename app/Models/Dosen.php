<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    function getAllDosen(){
        return Dosen::all();
    }

    function jadwal(){
        return $this -> hasMany('App\Models\Jadwal', "id_dosen");
    }

    // function jadwal(){
    //     return $this -> belongsToMany('App\Models\Jadwal', "jadwals", "id_dosen", "id_mk");
    // }

    function dosen(){
        return $this -> belongsTo('App\Models\Dosen', "id_dosen");
    }

    function mataKuliah(){
        return $this -> belongsTo('App\Models\MataKuliah', "id_mk");
    }
}
