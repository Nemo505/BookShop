<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;
use App\Models\Language;

use Carbon\Carbon;
use Auth;

class FrontendController extends Controller
{
    public function index(){

    	//$toparticles = Article::take(3)->get();
        $languages = Language::all();
        $categories = Category::all();
        
        $newarticles = Article::where('category_id', 3)->latest()->limit(3)->get();
        $randomarticles = Article::where('category_id', 3)->inRandomOrder()->take(3)->get();

        $poarticles = Article::where('category_id', 3)->take(4)->get();
        $toparticles = Article::where('category_id', 3)->take(4)->get();

    	return view('frontend.home',compact('toparticles', 'newarticles', 'languages','categories','randomarticles', 'poarticles'));
    }

    public function detail($id){

        return view('frontend.detail');
    }
}
