<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BooksController extends Controller
{
    public function __construct()
    {
        $this->BooksModel = new Books();
    }
        

    public function index(){
        $data['books'] =$this->BooksModel->getAllBooks();
        return view('Perpustakaan/Buku', $data);
        
    }
}
