<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('adm.categories.index', [ 'categories' => $categories]);
    }

    public function create()
    {

        return view('adm.categories.create' , ['categories' => Category::all()]);
    }

    public function store(Request $request)
    {

        $validated=$request->validate([
            'name'=>'required',
            'code'=>'required',
        ]);

        Category::create($validated);
        return redirect()->route('adm.category.index',['categories' => Category::all()])->with('habar','durys emes');
    }


    public function delete(Category $category)
    {
        $category->delete();
        return redirect()->route('adm.category.index');
    }
}
