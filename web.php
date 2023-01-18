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

Route::get('/home', function () {
    return ('Halaman Home');
});

Route::get('/about', function () {
    return ('Halaman About');
});

Route::get('/blog', function () {
    return ('Halaman Blog');
});

Route::get('/source', function () {
    return ('Halaman Source');
});

route::get('/profil', function () {
    return ('Halaman Profil');
});

route ::get('/belajar', function () {
    echo '<h1>Hello World</h1>';
    echo '<p>Sedang Belajar Larevel</p>';
});

route::get('/siswa/smkbpi/rpl', function () {
    echo '<h2 style="text-align: center"><u>Welcome to 11 RPL</u></h2>';
});

route::get('/siswa/{phryel}', function ($phryel) {
    return "Tampilan data siswa bernama $phryel";
});

route::get('/stok_barang/{jenis}/{merek}', function($jenis,$merek) {
    return "Cek sisa stok untuk $jenis $merek";
});

route::get('/profile', function() {
    return view('profile');
});

route::get('/profile2', function() {
    return view('profile2');
});