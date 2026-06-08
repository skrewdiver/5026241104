@extends('template')
@section('title', 'Data Modem')
@section('konten')

	<a href="/modem/tambah" class="btn btn-primary"> + Tambah Modem Baru</a>

	<br/>
	<br/>
	<p>Cari Data Modem :</p>
	<form action="/modem/cari" method="GET" class="form-inline">
        <div class="form-group">
		<input type="text" name="cari" placeholder="Cari Modem .."  class="form-control">
		<input type="submit" value="CARI" class="btn btn-dark mt-2">
        </div>
	</form>
	<br/>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode</th>
			<th>Merek Modem</th>
			<th>Stock</th>
			<th>Tersedia</th>
			<th>Opsi</th>
		</tr>
		@foreach($modem as $m)
		<tr>
			<td>{{ $m->kodemodem }}</td>
			<td>{{ $m->merkmodem }}</td>
			<td>{{ $m->stockmodem }}</td>
			<td>{{ $m->tersedia }}</td>
			<td>
				<a href="/modem/edit/{{ $m->kodemodem }}" class="btn btn-warning btn-sm">Edit</a>

				<a href="/modem/hapus/{{ $m->kodemodem }}" class="btn btn-danger btn-sm">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $modem->links() }} <!-- untuk menampilkan pagination -->
@endsection
