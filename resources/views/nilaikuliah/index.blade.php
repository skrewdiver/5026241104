@extends('template')
@section('title', 'Nilai Kuliah')
@section('konten')

    <h2>Nilai Kuliah</h2>

    <a href="/nilai/tambah" class="btn btn-primary mb-3">
        + Tambah Data
    </a>


    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>

        @foreach ($nilai as $n)
            <tr>
                <td>{{ $n->ID }}</td>
                <td>{{ $n->NRP }}</td>
                <td>{{ $n->NilaiAngka }}</td>
                <td>{{ $n->SKS }}</td>
                <td>
                    @if ($n->NilaiAngka <= 40)
                        D
                    @elseif($n->NilaiAngka <= 60)
                        C
                    @elseif($n->NilaiAngka <= 80)
                        B
                    @else
                        A
                    @endif
                </td>
                <td>{{ $n->NilaiAngka * $n->SKS }}</td>
            </tr>
        @endforeach
    </table>
@endsection
