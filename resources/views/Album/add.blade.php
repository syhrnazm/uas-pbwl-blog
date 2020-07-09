@extends('layouts.app')
@section('content')

<div class="container">
<center><h2>Input Data Album</h2></center>
	<form method="post" action="{{url('/album')}}">
	@csrf
		<table class="table">
			<tr>
				<th>Photo</th>
				<td><select name="album_pho_id" class="form-control">
					@foreach($pho as $row)
					<option value="{{$row->id}}">{{$row->pho_tittle}}</option>
					@endforeach
				</select></td>
			</tr>
			
			<tr>
				<th>Nama</th>
				<td><input type="text" name="album_name" class="form-control"></td>
			</tr>

			<tr>
				<th>Keterangan</th>
				<td><input type="text" name="album_text" class="form-control"></td>
			</tr>
		
		<tr>
					<th></th>
						<td><button type="submit" class="btn btn-danger">SAVE</button></td>
					</tr>
				</table>
			</form>
</div>
@endsection