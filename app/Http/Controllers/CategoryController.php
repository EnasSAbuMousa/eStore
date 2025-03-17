<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index1(){
        $categories = Category::all();
        return view('admin.category.index',compact('categories'));
    }

    public function create1(){
        return view('admin.category.create');
    }

    public function store1 (Request $request){
        $categories = new Category();
        $categories-> name = $request -> name;

        $categories->save();
        return redirect() -> back();
    }



    public function destroy1 ($id){
        Category::where ('id',$id)->delete();
        return redirect() -> back();
    }

    public function edit1 ($id){
        $category = Category::find($id);
        return view('admin.category.edit',compact('category'));
    }

    public function update1 (Request $request , $id){
        $category = Category::find($id);

        $category-> name = $request -> name;


        $category->save();
        return redirect('categories');
    }

}
