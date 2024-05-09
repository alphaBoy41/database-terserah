<?php

use App\Models\Pegawai;
use App\Models\Gurumapel;
use App\Models\Siswa;
use App\Models\User;
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

Route::get('/staf', function () {
    $pegawai = Pegawai::get();

    // return $data;

    return view('staf', compact('pegawai'));
});

Route::get('/guru', function () {
    $gurumapels = Gurumapel::get();

    // return $gurumapels;

    return view('dataguru', compact('gurumapels'));
});

Route::get('/siswa', function () {
    $siswas = Siswa::first();

    // return $data;

    return view('siswa', compact('siswas'));
});