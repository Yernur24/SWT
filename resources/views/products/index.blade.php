@extends('layouts.app')
@section('title','INDEX PAGE')
@section('content')
    <a class="btn btn-danger" href="{{ route('products.create') }}">Create post</a>
    <div class="card-group">
        <div class="row row-cols-1 row-cols-md-4 g-1">

        @foreach($products as $product)
        <div class="card" style="width: 20rem; margin-bottom: 65px;margin-left:45px ">
            <a href="{{route('products.show',$product->id)}}">
            <img class="card-img-top" src="{{$product->image}}" alt="Card image cap">
            </a>
            <div class="card-body">
                <h5 class="card-title">{{$product->name}}</h5>
                <hr>
                <p>{{$product->content}}</p>
                <p class="card-text"><small class="text-muted">{{$product->author}}</small></p>

            </div>
        </div>
        @endforeach
        </div>
    </div>
@endsection
