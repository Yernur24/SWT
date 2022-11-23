
    <a class="btn btn-primary" href="{{ route('products.index') }}">index page</a>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-15">


                <div class="col-sm-15">
                    <div class="card" >


                        <div class="card-body">
                            <h5  align="center">{{$product->name}}</h5>
                            <hr>
                            <p align="center">Content: {{$product->content}}</p>
                            <p align="center">Author: {{$product->author}}</p>
{{--                            <p><small>author:{{$product->user->name}}</small></p>--}}
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
    </div>
    </div>
    <a class="btn btn-primary" href="{{route('products.edit',$product->id)}}"
    >Edit </a>
    <form action="{{route('products.destroy',$product->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">delete</button>
    </form>
    <br><br><br>

