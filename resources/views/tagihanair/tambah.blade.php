@extends('template')

@section('title', 'Kode Soal tagihan_air')

@section('konten')

    <a href="/eas" class="btn btn-secondary mb-4">
        Kembali
    </a>
    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <div class="card">
        <div class="card-header">
            Form Tambah Data Tagihan Air
        </div>
        <div class="card-body">
            <form id="tagihanAirForm" action="/eas/store" method="post" onsubmit="return validasiForm()">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">No Meteran</label>
                    <div class="col-sm-10">
                        <input type="text" name="nometeran" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Meter Awal</label>
                    <div class="col-sm-10">
                        <input type="text" name="meterawal" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Meter Akhir</label>
                    <div class="col-sm-10">
                        <input type="text" name="meterakhir" class="form-control" required>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Tambah Data" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>
    <script src="https://jsdelivr.net"></script>
    <script src="https://jquery.com"></script>
    <script>
        function validasiForm() {
            let meterawal = parseInt(document.getElementsByName('meterawal').value);
            let meterakhir = parseInt(document.getElementsByName('meterakhir').value);

            if (meterakhir <= meterawal + 20) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Meter Akhir harus lebih besar dari Meter Awal + 20 m3.',
                });
                return false; // Hentikan proses submit jika validasi gagal
            }
            return true; // Lanjutkan submit jika validasi berhasil
        }
    </script>

@endsection
