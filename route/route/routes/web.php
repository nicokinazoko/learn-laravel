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

// example routes output
Route::get('/hello', function () {
    return 'Hello World';
});


// another example routes output
Route::get('/belajar', function () {
    echo '<h1>Hello World</h1>';
    echo '<p>Sedang Belajar Laravel</p>';
});


// route with more segment
Route::get('/mahasiswa/fasilkom/nico', function () {
    echo '<h2 style="text-align: center"><u>Welcome Nico</u></h2>';
});

// route parameter
Route::get('/mahasiswa/{nama}', function ($nama) {
    return "Tampilan data mahasiswa bernama $nama";
});

// route with two parameters
Route::get('/stok_barang/{jenis}/{merk}', function ($jenis, $merk) {
    return "Cek sisa stok untuk $jenis $merk";
});


// route with optional parameters
Route::get(
    '/stok_barang/{jenis?}/{merk?}',
    function ($a = 'smartphone', $b = 'samsung') {
        return "Cek sisa stok untuk $a $b";
    }
);


// route redirect
Route::get('/hubungi-kami', function () {
    return 'Hubungi Kami';
});

Route::redirect('/contact-us', '/hubungi-kami');

// route group
// before
// Route::get('/admin/mahasiswa', function () {
//     return "<h1>Daftar Mahasiswa</h1>";
// });

// Route::get('/admin/dosen', function () {
//     return "<h1>Daftar dosen</h1>";
// });

// Route::get('/admin/karyawan', function () {
//     return "<h1>Daftar Karyawan</h1>";
// });


// after route grouping
Route::prefix('/admin')->group(function () {
    Route::get('/mahasiswa', function () {
        return "<h1>Daftar Mahasiswa</h1>";
    });

    Route::get('/dosen', function () {
        return "<h1>Daftar Dosen</h1>";
    });

    Route::get('/karyawan', function () {
        return "<h1>Daftar Karyawan</h1>";
    });
});

Route::fallback(function() {
    return "Maaf, alamat tidak ditemukan";
});
