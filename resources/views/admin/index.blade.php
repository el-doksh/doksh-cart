@extends('layouts.app')

@section('content')
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <h1 class="mt-4">Welcome to {{ $user->name }}</h1>
            
            <div class="row mt-3">
                <div class="col-md-6 col-sm-12">
                    <a class="text-decoration-none bg-gradient text-dark" href="#">
                    <div class="card card-stats  bg-gradient-warning">
                        <div class="card-header card-header-warning card-header-icon bg-gradient-warning">
                            <p class="card-category">@lang('Products count')</p>
                            <h2 class="card-title">
                                {{ $products }}
                            </h2>
                        </div>
                        <div class="card-footer text-dark">
                            <div class="stats">
                                <a href="{{route('product.index')}}"> @lang('More ...')</a>
                                
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection