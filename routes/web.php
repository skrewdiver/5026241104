<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\BelanjaController;
use App\Http\Controllers\ModemDBController;
use App\Http\Controllers\NilaiKuliahController;

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

//route CRUD pegawai
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

//route CRUD modem
Route::get('/modem', [ModemDBController::class, 'index'])->name('modem.index');
Route::get('/modem/tambah', [ModemDBController::class, 'tambah'])->name('modem.tambah');
Route::post('/modem/store', [ModemDBController::class, 'store'])->name('modem.store');
Route::get('/modem/edit/{id}', [ModemDBController::class, 'edit'])->name('modem.edit');
Route::post('/modem/update', [ModemDBController::class, 'update'])->name('modem.update');
Route::get('/modem/hapus/{id}', [ModemDBController::class, 'hapus'])->name('modem.hapus');
Route::get('/modem/cari', [ModemDBController::class, 'cari'])->name('modem.cari');

//route CRUD siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

//route CRUD keranjangbelanja
Route::get('/keranjang', [BelanjaController::class, 'index'])->name('keranjangbelanja.index');
Route::get('/keranjang/beli', [BelanjaController::class, 'beli'])->name('keranjangbelanja.beli');
Route::post('/keranjang/store', [BelanjaController::class, 'store'])->name('keranjangbelanja.store');
Route::get('/keranjang/batal/{id}', [BelanjaController::class, 'batal']);

//route CRUD nilai kuliah
route::get('/nilai', [NilaiKuliahController::class, 'index'])->name('nilaikuliah.index');
route::get('/nilai/tambah', [NilaiKuliahController::class, 'tambah'])->name('nilaikuliah.tambah');
route::post('/nilai/store', [NilaiKuliahController::class, 'store'])->name('nilaikuliah.store');

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);
Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
