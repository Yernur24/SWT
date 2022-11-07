@extends('layouts.app')
@section('title','INDEX PAGE')
@section('content')
<a href="{{ route('products.index') }}">index page</a>
<form action="{{ route('products.store') }}" method="post">
    @csrf
    <div>
        Img: <input type="text" name="image"><br>
        name: <input type="text" name="name"><br>
        author: <input type="text" name="author"><br>
        content: <input type="text" name="content"><br>
        <button type="submit">Save</button>
    </div>
</form>
@endsection
