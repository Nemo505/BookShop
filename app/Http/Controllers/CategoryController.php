<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Category;

class CategoryController extends Controller
{

    
    public function index()
    {
        $categories = Category::all();
        
        return view('backend.category.list',compact('categories'));
    }

    
    public function create()
    {
        return view('backend.category.new');
    }

    
    public function store(Request $request)
    {
        $validator = $request->validate([
            'name' => ['required', 'min:3', 'max:100', 'unique:categories']
        ]);
        $category = new Category();
        $category->name = $request->name;
        $category->save();

        return redirect()->route('category.index')->with('successMsg', 'New Category is ADDED in your data.');
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $category = Category::find($id);
        return view('backend.category.edit', compact('category'));
    }

    
    public function update(Request $request, $id)
    {
        $name = $request->name;
        $data = [
            'name' => $name
        ];

        Category::where('id',$id)->update($data);
        return redirect()->route('category.index')->with('successMsg', 'Existing Category is UPDATEDED in your data.');
    }

    
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect()->route('category.index')->with('successMsg','Existing Category is DELETED in your data');
    }
}
