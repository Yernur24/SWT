@extends('layouts.app')
@section('title','INDEX PAGE')
@section('content')
    <section class="product-tab-slide product-v1">
        <div class="title-top">
            <h3>our products</h3>
            <a class="btn btn-danger" href="{{ route('products.create') }}">Create post</a>
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
        </div>
{{--        <div class="container">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-md-10">--}}

{{--                    <div class="col " style="align-items: end">--}}
{{--                        <div class="row row-cols-1 row-cols-md-4 g-1">--}}
{{--                            @foreach($products as $product)--}}
{{--                                <div class="col " style="margin-bottom: 20px;">--}}
{{--                                    <div class="card text-white  h-100 "--}}
{{--                                         style="width: 240px;background: linear-gradient(110.07deg, rgba(255, 255, 255, 0.2) 15.92%, rgba(164, 226, 185, 0) 101.14%), #4FA480;; ">--}}
{{--                                        <a href="{{route('products.show',$product->id)}}">--}}
{{--                                            <img src="{{$product->image}}" class="card-img-top" alt="...">--}}
{{--                                        </a>--}}
{{--                                        <div class="card-body">--}}
{{--                                            <h5 class="card-title">{{$product->name}}</h5>--}}
{{--                                            <hr>--}}
{{--                                            <p class="card-text">content: {{$product->content}}</p>--}}
{{--                                            <p class="card-text">Country: {{$product->author}}</p>--}}

{{--                                            --}}{{--                                        <p><small>author:{{$club->user->name}}</small></p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}

{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach($products as $product)-
            <div class="col">
                <div class="card">
                    <a href="{{route('products.show',$product->id)}}">
                    <img src="{{$product->image}}" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <p class="card-text">{{$product->content}}</p>
                        <p class="card-text"><small class="text-muted">{{$product->author}}</small></p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
