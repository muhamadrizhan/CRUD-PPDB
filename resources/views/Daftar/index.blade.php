@extends('layouts')

@section('content')
	<div class="row">
		<div class="col-lg-12 margin-tb">
			<div class="pull-left">
				<h2>Pendaftaran</h2>
			</div>
		</div>
	</div>
	<div class="row" align="left">
		<div class="pull-left">
			<a class="btn-btn-success" href="{{ route('Daftar.create') }}">Daftar</a>
		</div>
	</div>

	@if ($message = Session::get('success'))
		<div class="alert alert-succes">
			<p> {{ $message }} </p>			
		</div>
	@endif

	<table class="table table-striped">
		<tr>
			<td>NIS</td>
			<td>Nama</td>
			<td>Jenis Kelamin</td>
			<td>Tempat Lahir</td>
			<td>Tanggal Lahir</td>
			<td>Alamat</td>
			<td>Asal Sekolah</td>
			<td>Kelas</td>
			<td>Jurusan</td>
			<td width="280px">Action</td>
		</tr>

		@foreach ($daftars as $daftar)
			<tr>
				<td>{{ $daftar->nis }}</td>
				<td>{{ $daftar->nama }}</td>
				<td>{{ $daftar->jk }}</td>
				<td>{{ $daftar->temp_lahir }}</td>
				<td>{{ $daftar->tgl_lahir }}</td>
				<td>{{ $daftar->alamat }}</td>
				<td>{{ $daftar->asal_sekolah }}</td>
				<td>{{ $daftar->kelas }}</td>
				<td>{{ $daftar->jurusan }}</td>
			</tr>
		@endforeach
	</table>
@endsection