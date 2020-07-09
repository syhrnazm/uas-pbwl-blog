@extends('layouts.app')
@section('content')

<div class="container">
	<center><h2>Input Data Photo</h2></center>
	<form method="post" action="{{url('/photo')}}" enctype="multipart/form-data">
	@csrf
		<table class="table">
			<tr>
				<th>Judul Post</th>	
					<td><select name="pho_post_id" class="form-control">
					@foreach($post as $row)
					<option value="{{$row->id}}">{{$row->post_tittle}}</option>
					@endforeach
				</select></td>	
			</tr>

			<tr>			
				<th>File Foto</th>
				<td><input type="file" name="gambar" class="form-control"></td>
			</tr>

			<tr>
				<th>Tanggal</th>
				<td><input type="date" name="pho_date" class="form-control"></td>
			</tr>

			<tr>
				<th>Judul</th>
				<td><input type="text" name="pho_tittle" class="form-control"></td>
			</tr>

			<tr>
				<th>Keterangan</th>
				<td><input type="text" name="pho_text" class="form-control"></td>
			</tr>

		<tr>
					<th></th>
						<td><button type="submit" class="btn btn-danger">SAVE</button></td>
					</tr>
				</table>
			</form>
</div>
@endsection