@extends('layouts.app')

@section('content')
<div class="container">

    @if(isset($product))
        <form action="{{ route('product.update', $product->id) }}" method="POST" accept-charset='UTF-8'>
        <input type="hidden" name="id" value="{{$product->id}}">
    @else
        <form action="{{ route('product.store') }}" method="POST" >
    @endif
        @csrf
        <div class="row">
            
            @if($errors->all())
            <ul class="text-danger">
                @foreach ($errors->all() as $err)
                <li>
                    {{ $err }}
                </li>
                @endforeach
            </ul>
            @endif
            <div class="col-md-9">
                <div class="form-group">
                    <label for="name">Name</label> <span class="text-danger"> *</span>
                    <input type="text" class="form-control" name="name" value="{{ isset($product) ? $product->name : old('name')}} " required>
                    @error('name')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" cols="30" rows="10">
                        {{ isset($product) ? $product->description : old('description')}}
                    </textarea>
                    @error('description')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="price">Price</label> <span class="text-danger">*</span>
                    <input type="number" class="form-control" name="price" value="{{ isset($product) ? $product->price : old('price') }}" required>
                    @error('price')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6 text-left">
                <div class="button-group float-left">
                    <button type="submit" class="btn btn-success"> Save</button>
                </div>
            </div>
        </div>
    </form>    
</div>
@endsection
