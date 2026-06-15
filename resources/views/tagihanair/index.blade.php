@extends('template')
@section('title', 'Kode Soal tagihan_air')
@section('konten')

    <h2>Kode Soal tagihan_air</h2>

    <a href="/eas/tambah" class="btn btn-primary mb-3">
        + Input Tagihan Baru
    </a>


    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>No Meteran</th>
            <th>Penggunaan (m3)</th>
            <th>Total Tagihan</th>
        </tr>

        @foreach ($tagihanAir as $n)
            <tr>
                <td>{{ $n->id }}</td>
                <td>{{ $n->nometeran }}</td>
                <td>{{ $n->meterakhir - $n->meterawal }}</td>
                <td>{{ number_format(($n->meterakhir - $n->meterawal) * 5000, 0, ',', '.') }}</td>
            </tr>
        @endforeach
    </table>
@endsection
