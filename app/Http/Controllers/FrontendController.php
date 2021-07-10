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

    	$topthreearticles = Article::take(3)->get();
        $languages = Language::all();
        $categories = Category::all();
        
        $newarticles = Article::where('category_id', 3)->latest()->limit(3)->get();
        $randomarticles = Article::where('category_id', 3)->inRandomOrder()->take(3)->get();

        $poarticles = Article::where('category_id', 3)->take(4)->get();
        $toparticles = Article::where('category_id', 3)->take(4)->get();

        $interarticles = Article::where('language_id', 2)->take(3)->get();
        $inrandomarticles = Article::where('language_id', 2)->inRandomOrder()->take(4)->get();

    	return view('frontend.home',compact('toparticles', 'newarticles', 'languages','categories','randomarticles', 'poarticles', 'interarticles', 'inrandomarticles', 'topthreearticles'));
    }

    public function world(){
        $languages = Language::all();
        $categories = Category::all();
        $worldarticles = Article::where('language_id', 2)->take(8)->get();
        return view('frontend.world',compact('worldarticles', 'categories','languages'));
    }
    public function politics(){
        $languages = Language::all();
        $categories = Category::all();
        $poarticles = Article::where('category_id', 3)->take(8)->get();
        return view('frontend.politics',compact('poarticles', 'categories','languages'));
    }
    public function ent(){
        $languages = Language::all();
        $categories = Category::all();
        $entarticles = Article::where('category_id', 1)->take(8)->get();
        return view('frontend.ent',compact('entarticles', 'categories','languages'));
    }
    public function health(){
        $languages = Language::all();
        $categories = Category::all();
        $healtharticles = Article::where('category_id', 4)->take(8)->get();
        return view('frontend.health',compact('healtharticles', 'categories','languages'));
    }
   
    public function tech(){
        $languages = Language::all();
        $categories = Category::all();
        $techarticles = Article::where('category_id', 6)->take(8)->get();
        return view('frontend.tech',compact('techarticles', 'categories','languages'));
    }
    public function sports(){
        $languages = Language::all();
        $categories = Category::all();
        $sportsarticles = Article::where('category_id', 7)->take(8)->get();
        return view('frontend.sports',compact('sportsarticles', 'categories','languages'));
    }
     public function literature(){
        $languages = Language::all();
        $categories = Category::all();
        $litarticles = Article::where('category_id', 2)->take(8)->get();
        return view('frontend.literature',compact('litarticles', 'categories','languages'));
    }

    public function detail($id){
        $article = Article::find($id);     
        $languages = Language::all();
        $categories = Category::all();
        return view('frontend.detail',compact('article','categories','languages'));

        
    }

    public function privacy(){

        return view('frontend.privacy');
    }

    public function rule(){

        return view('frontend.rule');
    }
}