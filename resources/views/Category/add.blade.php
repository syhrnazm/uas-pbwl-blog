@extends('layouts.app')
@section('content')

<div class="container">
	<center><h2>Input Data Kategori</h2></center>
			<form method="post" action="{{url('/category')}}">
			@csrf
				<table class="table">			
					<tr>
						<th>Nama</th>
						<td><input type="text" name="cat_name" class="form-control"></td> 
					</tr>

					<tr>
						<th>Keterangan</th>
						<td><input type="text" name="cat_text" class="form-control"></td>
					</tr>

					<tr>
					<th></th>
						<td><button type="submit" class="btn btn-danger">SAVE</button></td>
					</tr>
				</table>
			</form>
</div>
@endsection