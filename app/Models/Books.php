<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    function getAllBooks(){
        $data['books'] = $this->db->table('books')->select('*')->get()->getResult();
        return $data['books'];
    }
}
