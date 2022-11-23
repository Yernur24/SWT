<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $allProducts= Product::all();
        $categories = Category::all();
        return view('products.index', ['products' => $allProducts , 'categories' => $categories]);
    }

    public function create()
    {
        return view('products.create', ['categories' => Category::all()]);
    }

    public function store(Request $request)
    {
        $validated=$request->validate([
            'image'=>'required',
            'name'=>'required',
            'author'=>'required',
            'content'=>'required',
        ]);
        Product::create($validated);
        return redirect()->route('products.index ');
    }
    public function show(Product $product)
    {
        return view('products.show', ['product' => $product ]);
    }
    public function edit(Product $product)
    {
        return view('products.edit',['product' => $product , 'categories' => Category::all()]);
    }

    public function update(Request $request, Product $product)
    {

        $product->update([
            'image'=>'required',
            'name'=>'required',
            'author'=>'required',
            'content'=>'required',
        ]);
        return redirect()->route('products.index');
    }
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
    public function productByCat(Category $category)
    {
        $clubs=$category->clubs;
        $allCategories = Category::all();
        return view('clubs.index', ['clubs' => $clubs, 'categories' => $allCategories]);
    }


}

