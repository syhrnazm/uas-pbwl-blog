@extends('layouts.app')
@section('content')

<div class="container">
<center><h2>Edit Data Kategori</h2></center>
	<form action="{{ url('/category/' . $row->cat_id)}}" method="post">
	<input name="_method" type="hidden" value="patch">
	@csrf
	<table class="table">
		<tr>
			<th>Nama</th>
			<td><input type="text" name="cat_name" value="{{ $row->cat_name}}" class="form-control"></td>
		</tr>
		
		<tr>
			<th>Keterangan</th>
			<td><input type="text" name="cat_text" value="{{ $row->cat_text}}" class="form-control"></td>
		</tr>

		<tr>
			<th></th>
			<td><button type="submit" class="btn btn-danger">UPDATE</button></td>
		</tr>
	</table>
	</form>
</div>
@endsection