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
});


// dosen Route
Route::get('dosen', function () {
    $arrDosen =  ["Maya Fitrianti, M.M.", "Prof. Silvia Nst, M.Farm.", "Dr. Umar Agustinus", "Dr. Syahrial, M.Kom."];
    return view('dosen')->with('dosen', $arrDosen);
});

// galeri Route
Route::get('gallery', function () {
    return view('galeri');
});


Route::get('admin', function () {
    return view('admin');
});
