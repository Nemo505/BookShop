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
        $languages = Language::all();
        $categories = Category::all();
        return view('backend.article.post',compact('languages','categories'));
    }

    
    public function store(Request $request)
    {
        $posttitle= $request->posttitle;
        $postcategory= $request->postcategory;
        $postauthor= $request->postauthor;
        $postsubcontent= $request->postsubcontent;
        $postcaption= $request->postcaption;
        $postdate= $request->postdate;

        $postcontent= $request->postcontent;
        $poststatus= $request->poststatus;
        $postlanguage= $request->postlanguage;
        // $file= $request->pdf_filepath;
        //$status = 0;      
        $postimage = $request->postimage;

        $imageName = time().'.'.$postimage->extension();
        $postimage->move(public_path('storage/image'),$imageName);
        $photo_filepath = '/storage/image/'.$imageName;


        $article = new Article();

        $article->title = $posttitle;
        $article->category_id = $postcategory;
        $article->author = $postauthor;
        $article->subcontent = $postsubcontent;
        $article->image = $photo_filepath;
        $article->caption = $postcaption;
        $article->publishdate = $postdate;
        $article->content = $postcontent;
        $article->status = $poststatus;
        $article->language_id = $postlanguage;
        $article->save();
        return redirect()->route('article.index')->with('successMsg', 'New Article is ADDED in your data.');
    }

    
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        $languages = Language::all();
        $categories = Category::all();
        $article = Article::find($id);
        return view('backend.article.edit', compact('categories','article','languages'));
    }

    
    public function update(Request $request, $id)
    {
        $posttitle= $request->posttitle;
        $postcategory= $request->postcategory;
        $postauthor= $request->postauthor;
        $postsubcontent= $request->postsubcontent;
        $postcaption= $request->postcaption;
        $postdate= $request->postdate;

        $postcontent= $request->postcontent;
        $poststatus= $request->poststatus;
        $postlanguage= $request->postlanguage;
        // $file= $request->pdf_filepath;
        //$status = 0;      
        $newphoto = $request->postimage;
        $oldphoto = $request->oldphoto;     

        if ($request->hasfile('postimage')) {
            if(\File::exists(public_path($oldphoto))){
                \File::delete(public_path($oldphoto));
            }           
// Photo File Upload
            $imageName = time().'.'.$newphoto->extension();
            $newphoto->move(public_path('storage/image/'),$imageName);
            $photo_filepath = '/storage/image/'.$imageName;
        }else{
            $photo_filepath = $oldphoto;
        }

        $article = Article::find($id);

        $article->title = $posttitle;
        $article->category_id = $postcategory;
        $article->author = $postauthor;
        $article->subcontent = $postsubcontent;
        $article->image = $photo_filepath;
        $article->caption = $postcaption;
        $article->publishdate = $postdate;
        $article->content = $postcontent;
        $article->status = $poststatus;
        $article->language_id = $postlanguage;
        $article->save();
        return redirect()->route('article.index')->with('successMsg', 'New Article is ADDED in your data.');
    
    }

   
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();

        return redirect()->route('article.index')->with('successMsg','Existing Article is DELETED in your data');
    }
}
