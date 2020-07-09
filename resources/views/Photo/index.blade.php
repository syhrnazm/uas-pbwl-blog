@extends('layouts.app')
@section('content')

<div class="container">
<form action="{{ url('/photo') }}">
@csrf
<center><h2>DATA PHOTO</h2></center>
	<table class="table">
		<tr>
			<th scope="col">ID</th>
			<th scope="col">GAMBAR</th>
			<th scope="col">POST</th>
			<th scope="col">TANGGAL</th>
			<th scope="col">JUDUL</th>
			<th scope="col">KETERANGAN</th>
			<th scope="col">EDIT</th>
			<th scope="col">DELETE</th>
		</tr>

		@foreach($rows as $row)
		<tr>
			<td>{{ $row->id }}</td>
			<td><center><img width="90px" class="img-thumbnail" src="{{ url('upload/'. $row->gambar) }}"></center></td>
			<td>{{ $row->post->post_tittle }}</td>
			<td>{{ $row->pho_date }}</td>
			<td>{{ $row->pho_tittle }}</td>
			<td>{{ $row->pho_text }}</td>
			<td><a href="{{ url('photo/' . $row->id . '/edit')}}" class="btn btn-secondary">EDIT</a></td>
			<td><form action="{{ url('photo/' . $row->id)}}" method="post" class="d-inline">
					<input name="_method" type="hidden" value="delete">
					@csrf
					<button class="btn btn-success">DELETE</button>
				</form></td>
			</td>
		</tr>
		@endforeach
	</table>
	<a href="{{ url('photo/create') }}" class="btn btn-info">TAMBAH DATA</a>
</div>

@endsection