<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/mahasiswa', function () {
    $nama = 'Tya Kirana Putri';
    $nilai = 75;
    return view('mahasiswa', compact('nama', 'nilai'));
});

// foreach
Route::get('/mahasiswa', function () {
    $nama = 'Tya Kirana Putri';
    $nilai = [80, 64, 30, 76, 95];
    return view('mahasiswa', compact('nama', 'nilai'));
});

// design layout
// mahasiswa Route
Route::get('mahasiswa', function () {
    $arrMahasiswa = [
        "Risa Lestari", "Rudi Hermawan", "Bambang Kusumo", "Lisa Permata"
    ];
    return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
})->name('mahasiswa');


// dosen Route
Route::get('dosen', function () {
    $arrDosen =  ["Maya Fitrianti, M.M.", "Prof. Silvia Nst, M.Farm.", "Dr. Umar Agustinus", "Dr. Syahrial, M.Kom."];
    return view('dosen')->with('dosen', $arrDosen);
})->name('dosen');

// galeri Route
Route::get('gallery', function () {
    return view('galeri');
})->name('galeri');


// named route
Route::get('universitas/fmipa/matematika/gallery', function () {
    return view('admin');
})->name('gambar');

// named route with parameter
Route::get('informasi/{fakultas}/{jurusan}', function ($fakultas,$jurusan) {
    $data = [$fakultas,$jurusan];
    return view('informasi')->with('data',$data);
})->name('informasi');
