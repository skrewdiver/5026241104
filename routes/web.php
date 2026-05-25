<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController ;
use App\Http\Controllers\PegawaiDBController ;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
    return "<h1>Halo, Selamat datang </h1>di tutorial laravel www.malasngoding.com";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('pertemuan1', function () {
	return view('pertemuan1');
});

Route::get('pertemuan2', function () {
	return view('pertemuan2');
});

Route::get('pertemuan3', function () {
	return view('pertemuan3');
});

Route::get('bootstrap', function () {
	return view('bootstrap');
});

Route::get('pertemuan4', function () {
	return view('pertemuan4');
});

Route::get('pertemuan5', function () {
	return view('pertemuan5');
});

Route::get('menu', function () {
	return view('menu');
});

Route::get('linktree', function () {
	return view('linktree');
});


Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);
Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);
