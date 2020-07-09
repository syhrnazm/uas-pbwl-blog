@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="color: #000;">DASHBOARD</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <img src="image/das.png" class="img">
                    <br><br>
                    <div style="color: #000;">Anda Telah Masuk 
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
