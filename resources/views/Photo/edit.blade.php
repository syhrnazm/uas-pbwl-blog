@extends('layouts.app')
@section('content')

<div class="container">
	<center><h2>Edit Data Photo</h2></center>
	<form action="{{ url('/photo/' . $rows->id)}}" method="post">
	<input name="_method" type="hidden" value="patch">
	@csrf

	<table class="table">
		<tr>
			<th>Post</th>
			<td><select name="pho_post_id" class="form-control">
				@foreach($post as $row)
				<option value="{{$row->id}}"
					@if($row->id ==$rows->pho_post_id)
					selected
					@endif
					>{{$row->post_tittle}}</option>
					@endforeach
			</select></td>
		</tr>

		<tr>
			<th>File Foto</th>
			<td><input type="file" name="gambar" class="form-control"></td>
		</tr>

		<tr>
			<th>Tanggal</th>
			<td><input type="date" name="pho_date" value="{{ $rows->pho_date}}" class="form-control"></td>
		</tr>

		<tr>
			<th>Judul</th>
			<td><input type="text" name="pho_tittle" value="{{ $rows->pho_tittle}}" class="form-control"></td>
		</tr>

		<tr>
			<th>Keterangan</th>
			<td><input type="text" name="pho_text" value="{{ $rows->pho_text}}" class="form-control"></td>
		</tr>

	<tr>
			<th></th>
			<td><button type="submit" class="btn btn-danger">UPDATE</button></td>
		</tr>
	</table>
	</form>
</div>
@endsection