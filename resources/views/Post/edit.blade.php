@extends('layouts.app')
@section('content')

<div class="container">
<center><h2>Edit Data Post</h2></center>
	<form action="{{ url('/post/' . $rows->id)}}" method="post">
	<input name="_method" type="hidden" value="patch">
	@csrf
	@method('PATCH')
	<table class="table">
		<tr>
			<th>Kategori</th>
			<td><select name="post_cat_id" class="form-control">
					@foreach($cat as $row)
					<option value="{{$row->cat_id}}"
						@if($row->cat_id ==$rows->post_cat_id)
						selected
						@endif
						>{{$row->cat_name}}</option>
					@endforeach
				</select></td>
			</tr>

			<tr>
				<th>Tanggal</th>
				<td><input type="date" name="post_date" value="{{ $rows->post_date}}" class="form-control"></td>
			</tr>

			<tr>
				<th>Slug</th>
				<td><input type="text" name="post_slug" value="{{ $rows->post_slug}}" class="form-control"></td>
			</tr>
		
			<tr>
				<th>Judul</th>
				<td><input type="text" name="post_tittle" value="{{ $rows->post_tittle}}" class="form-control"></td>
			</tr>

			<tr>
				<th>Keterangan</th>
				<td><input type="text" name="post_text" value="{{ $rows->post_text}}" class="form-control"></td>
			</tr>

	<tr>
			<th></th>
			<td><button type="submit" class="btn btn-danger">UPDATE</button>
		</tr>
	</table>
	</form>
</div>
@endsection