@extends('layouts.app')
@section('content')

<div class="container">
	<center><h2>Edit Data Album </h2></center>
	<form action="{{ url('/album/' . $rows->id)}}" method="post">
	<input name="_method" type="hidden" value="patch">
	@csrf

	<table class="table">
		<tr>
			<th>Photo</th>
			<td><select name="album_pho_id" class="form-control">
					@foreach($pho as $row)
					<option value="{{$row->id}}"

						@if($row->id ==$rows->album_pho_id)
						selected
						@endif
						>{{$row->pho_tittle}}</option>
					@endforeach
				</select></td>
		</tr>

		<tr>
			<th>Nama</th>
			<td><input type="text" name="album_name" value="{{ $rows->album_name}}" class="form-control"></td>
		</tr>

		<tr>
			<th>Keterangan</th>
			<td><input type="text" name="album_text" value="{{ $rows->album_text}}" class="form-control"></td>
		</tr>

	<tr>
			<th></th>
			<td><button type="submit" class="btn btn-danger">UPDATE</button></td> 
		</tr>
	</table>
	</form>
</div>
@endsection