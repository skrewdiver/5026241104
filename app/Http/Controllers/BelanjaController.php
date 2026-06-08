<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class BelanjaController extends Controller
{
    public function index()
    {
        $belanja = DB::table('keranjangbelanja')->orderBy('ID')->get();
        return view('keranjangbelanja.index', compact('belanja'));
    }

    // method untuk menambah data belanja ke tabel
    public function store(Request $request)
    {
        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->input('KodeBarang'),
            'Jumlah'     => $request->input('Jumlah'),
            'Harga'      => $request->input('Harga')
        ]);
        return redirect('/keranjang');
    }

    // method untuk menampilkan view form beli
    public function beli()
    {
        return view('keranjangbelanja.beli');
    }

    // method untuk hapus data belanja
    public function batal($id)
    {
        DB::table('keranjangbelanja')->where('ID', $id)->delete();
        return redirect('/keranjang');
    }
}
