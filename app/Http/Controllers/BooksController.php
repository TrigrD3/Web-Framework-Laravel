<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BooksController extends Controller
{

    public function show($id)
    {
        $books = new Books();
        $books = Books::find($id);
        if ($books === null) {
            abort(404, "No book has been found.");
        }

        return view('Perpustakaan.show', compact('books'));
    }

    public function edit($id)
    {
        $books = new Books();
        $books = Books::find($id);
        if ($books === null) {
            abort(404, "No book has been found.");
        }

        return view('Perpustakaan.edit', compact('books'));
    }

    public function destroy($id)
    {
        $books = new Books();
        $books = Books::find($id);
        if ($books === null) {
            abort(404, "No book has been found.");
        }

        $books->delete();
        return redirect()->route('Perpustakaan.Buku');
    }

    public function index()
    {
        $books = new Books();
        $data['books'] = $books->getAllBooks();
        return view('Perpustakaan.Buku', $data);
    }


}
