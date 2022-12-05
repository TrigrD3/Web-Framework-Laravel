<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    use HasFactory;

    function getAllMatkul(){
        return Matkul::all();
        // return $this -> hasMany('App\Models\Mahasiswa');
        // return $this -> hasMany('App\Models\MataKuliah');

    }

    // function mataKuliah(){
    //     return $this -> belongsToMany('App\Models\MataKuliah', "id_mk");
    // }

    // function mahasiswa(){
    //     return $this -> belongsToMany('App\Models\Mahasiswa',"id_mhs");
    // }
}
