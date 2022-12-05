<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;

    function getAllMataKuliah(){
        return MataKuliah::all();
    }

    function mahasiswa(){
        return $this -> hasManyThrough('App\Models\Matkul', 'App\Models\Mahasiswa', "id", "id_mk");
    }



}
