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

Route::get('/Buku', [BooksController::class, 'index']);