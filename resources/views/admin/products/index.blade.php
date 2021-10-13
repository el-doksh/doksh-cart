@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row mb-3">
        <div class="col-md-6 text-left">
            <div class="button-group float-left">
                <a href="{{route('product.create')}}" class="btn btn-primary" >
                    <i class="la la-plus-circle"></i> &nbsp; @lang('Create Product')
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Created By</th>
                    <th scope="col">Created On</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                
                @forelse ($products as $product)
                
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->creator ? $product->creator->name : "None" }}</td>
                        <td>{{ $product->created_at }}</td>
                        <td>
                            <a href="{{ route('product.edit', $product->id) }}" class="btn btn-info">
                                Edit
                            </a>
                        </td>
                    </tr>
                        
                    {{ $products->appends(request()->input())->links() }}
                @empty
                    <tr class="text-center">
                        <th scope="3">@lang('No Products')</th>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>
@endsection
