<!DOCTYPE html>
@extends('master2')
@section('title', 'karyawan')

@section('konten')

<h2>Data karyawan</h2>

<p style="margin-top: 3px;">Cari Nama karyawan:</p>
<!-- row supaya satu baris -->
<form action="/karyawan/cari" method="GET">
	<div class="row">
		<div class="col-sm-3">
			<input class="form-control" type="text" name="cari" placeholder="Cari Nama karyawan .."
				value="{{ old('cari') }}">
		</div>
		<div class="col-sm-1">
			<input class="btn btn-primary" type="submit" value="CARI">
		</div>
	</div>
</form>

<table>
	<table class="table table striped table-hover">
		<tr>
			<th>Kode karyawan</th>
			<th>Nama Lengkap</th>
			<th>Divisi</th>
			<th>Departemen</th>
			<th>Hapus</th>
		</tr>
		@foreach($karyawan as $p)
		<tr>
			<td>{{ $p->kodepegawai }}</td>
			<td>{{ strtoupper($p->namalengkap)  }}</td>
			<td>{{ $p->divisi }}</td>
			<td>{{ strtolower($p->departemen) }}</td>
			<td>
				<a href="/karyawan/hapus/{{ $p->kodepegawai }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
	<a href="/karyawan/tambah" class="btn btn-secondary"> + Tambah karyawan Baru</a>

	{{$karyawan->links()}}


	@endsection