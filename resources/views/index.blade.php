<!DOCTYPE html>
@extends('master2')
@section('title', 'Database Pegawai')

@section('konten')

	<h2>Data Pegawai</h2>

	<a href="/pegawai/tambah" class="btn btn-secondary"> + Tambah Pegawai Baru</a>
	<p style="margin-top: 3px;">Cari Data Pegawai :</p>
   <!-- row supaya satu baris -->
	<form action="/pegawai/cari" method="GET">
		<div class="row">
			<div class="col-sm-11">
        	<input class="form-control" type="text" name="cari" placeholder="Cari Pegawai berdasarkan nama .." value="{{ old('cari') }}">
	</div>
		<div class="col-sm-1">
        <input class="btn btn-primary" type="submit" value="CARI">
</div>
</div>
    </form>

	<table>
		<table class = "table table striped table-hover">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td
			@if($p->pegawai_umur <= 20)
				class="bg-success text-white"
			@elseif($p->pegawai_umur >= 20 && $p->pegawai_umur <= 30)
				class="bg-warning text-danger"
			@elseif($p->pegawai_umur >= 31)
				class="bg-primary text-white"
			@endif
			>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a href="/pegawai/lihat/{{ $p->pegawai_id }}" class="btn btn-success">View</a>
				|
				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
	{{$pegawai->links()}}
 
 
@endsection


