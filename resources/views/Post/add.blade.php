@extends('layouts.app')
@section('content')

<div class="container">
	<center><h2>Input Data Post</h2></center>
	<form method="post" action="{{url('/post')}}">
	@csrf
		<table class="table">
			<tr>
				<th>Kategori ID</th>
				<td><select name="post_cat_id" class="form-control">
					@foreach($cat as $row)
					<option value="{{$row->cat_id}}">{{$row->cat_name}}</option>
					@endforeach
				</select></td>	
			</tr>
			
			<tr>
				<th>Tanggal</th>
				<td><input type="date" name="post_date" class="form-control"></td>
			</tr>

			<tr>
				<th>Slug</th>
				<td><input type="text" name="post_slug" class="form-control"></td>
			</tr>

			<tr>
				<th>Judul</th>
				<td><input type="text" name="post_tittle" class="form-control"></td>
			</tr>

			<tr>
				<th>Keterangan</th>
				<td><input type="text" name="post_text" class="form-control"></td>
			</tr>

			<tr>
			<th></th>
			<td><button type="submit" class="btn btn-danger">SAVE</button>
			</tr>
		</table>
	</form>
</div>
@endsection