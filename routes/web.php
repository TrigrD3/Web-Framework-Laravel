<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BooksController;
use Illuminate\Support\Facades\{Route,Auth};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes(['verify' => true]);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/index', function(){
    return view('index');
});

Route::get('/Perpustakaan', function(){
    return view('Perpustakaan/Perpustakaan');
});

Route::get('/Buku', [BooksController::class, 'index'])-> name('Perpustakaan.Buku');

Route::get('Buku/{id}', [BooksController::class, 'show'])->name('Perpustakaan.show');
Route::put('Buku/{id}/edit', [BooksController::class, 'edit'])->name('Perpustakaan.edit');
Route::delete('Buku/{id}/delete', [BooksController::class, 'destroy'])->name('Perpustakaan.destroy');
Route::put('Buku/{id}/update', [BooksController::class, 'update'])->name('Perpustakaan.update');
