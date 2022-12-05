<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Mahasiswa extends Model
{
    use HasFactory;

    function getAllMahasiswa(){
        return Mahasiswa::all();

        
    }

    // function mataKuliah(){
    //     return $this -> hasMany('App\Models\Matkul', "id_mhs");
    // }

    // function matkul(){
    //     return $this -> belongsTo('App\Models\MataKuliah', "id_mk");
    // }

    function mataKuliah(){
        return $this -> belongsToMany('App\Models\MataKuliah', "matkuls", "id_mhs", "id_mk");
    }
    
    // function mataKuliah(){
    //     return $this -> belongsToMany('App\Models\Matkul', "mahasiswas", "id", "id");
    // }

    // function mataKuliah(){
    //     return $this -> belongsToMany('App\Models\Matkul', "mata_kuliahs", "id", "id");
    // }

    function Club(){
        return $this -> hasOne('App\Models\Club', "id_mhs");
    }
    







}
