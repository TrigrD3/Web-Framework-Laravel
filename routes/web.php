<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;
use App\Models\MataKuliah;
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
    return view('Perpustakaan/index');
});


Route::get('/Dosen', [DosenController::class, 'index'])-> name('Dosen.index');

Route::get('/Jadwal', [JadwalController::class, 'index'])-> name('Jadwal.index');
Route::get('/MataKuliah', [MataKuliahController::class, 'index'])-> name('MataKuliah.index');
Route::get('/Mahasiswa', [MahasiswaController::class, 'index'])-> name('Mahasiswa.index');

Route::get('Mahasiswa/{nama}', function ($nama) {
        $mahasiswa = App\Models\Mahasiswa::where('nama', $nama)->firstOrFail();
        return view('Mahasiswa.mahasiswa', ['mahasiswa' => $mahasiswa]);
});

Route::get('Jadwal/{nama}', function ($nama) {
    $dosen = App\Models\Dosen::where('nama_dosen', $nama)->firstOrFail();
    return view('Jadwal.dosen', ['JadwalDosen' => $dosen]);
});

Route::get('MataKuliah/{nama_mk}', function ($nama_mk) {
    $mk = App\Models\MataKuliah::where('nama_mk', $nama_mk)->firstOrFail();
    return view('MataKuliah.matkul', ['matakuliah' => $mk]);
});

// Route::get('/MataKuliah/{slug}', [MataKuliahController::class, 'show'])-> name('MatakuLiah.matkul');






Route::get('/Buku', [BooksController::class, 'index'])-> name('Perpustakaan.Buku');

Route::get('Buku/{id}', [BooksController::class, 'show'])->name('Perpustakaan.show');
Route::put('Buku/{id}/edit', [BooksController::class, 'edit'])->name('Perpustakaan.edit');
Route::delete('Buku/{id}/delete', [BooksController::class, 'destroy'])->name('Perpustakaan.destroy');
Route::put('Buku/{id}/update', [BooksController::class, 'update'])->name('Perpustakaan.update');
