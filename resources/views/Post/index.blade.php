@extends('layouts.app')
@section('content')

<div class="container">
<form action="{{ url('/post') }}">
@csrf
<center><h2>DATA POST</h2></center>
	<table class="table">
		<tr>
			<th scope="col">ID</th>
			<th scope="col">KATEGORI</th>
			<th scope="col">TANGGAL</th>
			<th scope="col">SLUG</th>
			<th scope="col">JUDUL</th>
			<th scope="col">KETERANGAN</th>
			<th scope="col">EDIT</th>
			<th scope="col">DELETE</th>
		</tr>

		@foreach($rows as $row)
		<tr>
			<td>{{ $row->id }}</td>
			<td>{{ $row->category->cat_name }}</td>
			<td>{{ $row->post_date }}</td>
			<td>{{ $row->post_slug }}</td>
			<td>{{ $row->post_tittle }}</td>
			<td>{{ $row->post_text }}</td>
			<td><a href="{{ url('post/' . $row->id . '/edit')}}" class="btn btn-secondary">EDIT</a></td>
			<td><form action="{{ url('post/' . $row->id)}}" method="post" class="d-inline">
					<input name="_method" type="hidden" value="delete">
					@csrf
					<button class="btn btn-success">DELETE</button>
				</form></td>
			</td>
		</tr>
		@endforeach
	</table>
	<a href="{{ url('post/create') }}" class="btn btn-info">TAMBAH DATA</a>
</div>

</body>
</html>

@endsection