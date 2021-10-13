@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="row text-center">
                    <div class="col-md-12">
                        <div class="img-container mt-2">
                            <img src="{{ asset('img/logo.png') }}" alt="Logo">
                        </div>
                        <h2 class="text-center mt-3">
                            Welcome to doksh cart
                        </h2>

                    </div>
                    <div class="col-md-12 text-center mt-2 mb-4" >
                        <a href="{{ route('login') }}" class="btn btn-lg btn-success">Login</a>
                        <a href="{{ route('register') }}" class="btn btn-lg btn-info">Sign up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection