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
        // use compact() to pass the variable to the view
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

    public function update($id)
    {
        $books = new Books();
        $books = Books::find($id);
        if ($books === null) {
            abort(404, "No book has been found.");
        }

        $books->title = request('title');
        $books->author = request('author');
        $books->publisher = request('publisher');
        $books->year = request('year');
        $books->isbn = request('isbn');
        $books->category = request('category');
        $books->language = request('language');
        $books->edition = request('edition');
        $books->pages = request('pages');
        $books->cover = request('cover');
        $books->description = request('description');
        $books->status = request('status');

        $books->save();

        return redirect('/Buku');
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
