@extends('template')
@section('title', 'Edit Data Modem')
@section('konten')

    <a href="/modem" class="btn btn-secondary mb-4">Kembali</a>

    @foreach($modem as $m)

    <div class="card mb-5">
        <div class="card-header">
            Form Edit Data Modem
        </div>

        <div class="card-body">
            <form action="/modem/update" method="post">
                {{ csrf_field() }}

                <input type="hidden" name="id" value="{{ $m->kodemodem }}">

                <div class="row mb-3">
                    <label for="merkmodem" class="col-sm-2 col-form-label">Merk Modem</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            name="merkmodem"
                            id="merkmodem"
                            class="form-control"
                            required
                            value="{{ $m->merkmodem }}"
                        >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="stockmodem" class="col-sm-2 col-form-label">Stock</label>
                    <div class="col-sm-10">
                        <input
                            type="number"
                            name="stockmodem"
                            id="stockmodem"
                            class="form-control"
                            required
                            value="{{ $m->stockmodem }}"
                        >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                    <div class="col-sm-10">
                        <select name="tersedia" id="tersedia" class="form-control" required>
                            <option value="Y" {{ $m->tersedia == 'Y' ? 'selected' : '' }}>Y</option>
                            <option value="N" {{ $m->tersedia == 'N' ? 'selected' : '' }}>N</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>

    @endforeach
@endsection
