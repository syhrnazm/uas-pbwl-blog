@extends('layouts.app')
@section('content')

<div class="container">
<form action="{{ url('/category') }}">
@csrf
<center><h2>DATA KATEGORI</h2></center>
	<table class="table">
		<tr>
			<th scope="col">ID</th>
			<th scope="col">NAMA</th>
			<th scope="col">KETERANGAN</th>
			<th scope="col">OPSI</th>
		</tr>

		@foreach($rows as $row)
		<tr>
			<td>{{ $row->cat_id }}</td>
			<td>{{ $row->cat_name }}</td>
			<td>{{ $row->cat_text }}</td>
			<td><a href="{{ url('category/' . $row->cat_id . '/edit')}}" class="btn btn-secondary">EDIT</a>
			<form action="{{ url('category/' . $row->cat_id)}}" method="post" class="d-inline">
					<input name="_method" type="hidden" value="delete">
					@csrf
					<button class="btn btn-success">DELETE</button>
				</form></td>
			
		</tr>
		@endforeach
	</table>
	<a href="{{ url('category/create') }}" class="btn btn-info">TAMBAH DATA</a>
</div>
@endsection