<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahController extends Controller
{
    public function index()
    {
        $nilai = DB::table('nilaikuliah')->orderBy('ID')->get();
        return view('nilaikuliah.index', compact('nilai'));
    }

    // method untuk menampilkan view form tambah nilai kuliah
    public function tambah()
    {
        return view('nilaikuliah.tambah');
    }

    // insert data ke database nilaikuliah
    public function store(Request $request)
    {
        DB::table('nilaikuliah')->insert([
            'NRP' => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS' => $request->SKS,
        ]);
        // Kembali ke halaman utama nilai kuliah setelah menyimpan data
        return redirect('/nilai');
    }

}
