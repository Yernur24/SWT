
<a href="{{ route('products.index') }}">index page</a>
<form action="{{ route('products.store') }}" method="post">
    @csrf
    <div>
        Img: <input type="text" name="image"><br>
        name: <input type="text" name="name"><br>
        author: <input type="text" name="author"><br>
        content: <input type="text" name="content"><br>
        <div class="mb-2">
            <label class="form-label">
                Category
            </label>
            <div>
                <select name="category_id" required class="form-select">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">
                            <p>{{$category->name}}</p>
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <button type="submit">Save</button>
    </div>
</form>

