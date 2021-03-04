<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Article;
use  App\Models\Language;
use  App\Models\Category;

class ArticleController extends Controller
{
    
    public function index()
    {
        $articles = Article::all();
        $languages = Language::all();
        $categories = Category::all();
        return view('backend.article.list',compact('articles','languages','categories'));
    }

    
    public function create()
    {
        return view('backend.article.post');
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
