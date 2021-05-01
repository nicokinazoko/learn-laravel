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

// route mahasiswa
Route::get('mahasiswa', function () {
    return view('universitas.mahasiswa');
});

// send data to view as argument
Route::get('mahasiswa', function () {
    $arrMahasiswa = [
        "Risa Lestari",
        "Rudi Hermawan",
        "Bambang Kusumo",
        "Lisa Permata"
    ];
    return view('universitas.mahasiswa', ['mahasiswa' => $arrMahasiswa]);
});

// send data to view using with
Route::get('mahasiswa', function () {
    $arrMahasiswa = [
        "Risa Lestari",
        "Rudi Hermawan",
        "Bambang Kusumo",
        "Lisa Permata"
    ];
    return view('universitas.mahasiswa')->with('mahasiswa', $arrMahasiswa);
});

// send data using compact
// Route::get('mahasiswa', function () {
//     $mahasiswa01 = "Risa Lestari";
//     $mahasiswa02 = "Rudi Hermawan";
//     $mahasiswa03 = "Bambang Kusumo";
//     $mahasiswa04 = "Lisa Permata";
//     return view('universitas.mahasiswa')->with($mahasiswa01, $mahasiswa02, $mahasiswa03,$mahasiswa04);
// });

// // exercise
// Route::prefix('mahasiswa')->group(function(){
// Route::get(
//     'mahasiswa/{nama}/{umur}/{daerah}',
//     function ($nama, $umur, $daerah) {
//         // $namaMahasiswa = $nama;
//         // $umurMahasiswa = $umur;
//         // $daerahMahasiswa = $daerah;
//         return view('universitas.mahasiswa')->with(compact('nama','umur','daerah'));
//         // return view('universitas.mahasiswa')
//         //     ->with('nama', $nama)
//         //     ->with('umur', $umur)
//         //     ->with('daerah', $daerah);
//     }
// );
// });
