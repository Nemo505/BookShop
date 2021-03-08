<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

use App\Models\Article;
use App\Models\Category;

class AppServiceProvider extends ServiceProvider
{
    
    public function register()
    {
        
    }

    
    public function boot()
    {
        Schema::defaultStringLength(191);
        $newarticles = Article::latest()->limit(5)->get();

        $categories = Category::all();

        View::share('data', [$newarticles, $categories]);
    }
}
