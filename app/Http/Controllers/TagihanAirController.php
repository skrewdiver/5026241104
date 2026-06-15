<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class TagihanAirController extends Controller
{
    // Tampilkan semua data tagihan air
    public function index()
    {
        $tagihanAir = DB::table('tagihan_air')->orderBy('id')->get();
        return view('tagihanair.index', compact('tagihanAir'));
    }

    public function tambah()
    {
        return view('tagihanair.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'meterawal' => 'required|integer',
            'meterakhir' => 'required|integer|accepted_if:meterakhir,>,meterawal+20'
        ]);

        DB::table('tagihan_air')->insert([
            'nometeran' => $request->nometeran,
            'meterawal' => $request->meterawal,
            'meterakhir' => $request->meterakhir,
        ]);

        return redirect()->route('tagihanair.index')->with('success', 'Data tagihan air berhasil ditambahkan.');
    }

    public function messages()
    {
    return [
        'meterawal.required' => 'Meter awal wajib berupa angka!',
        'meterakhir.required' => 'Meter akhir wajib berupa angka!'
        ];
    }
}
