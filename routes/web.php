<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AuthController;

use Inertia\Inertia;



// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });



Route::resource('/language', LanguageController::class);
Route::resource('/category', CategoryController::class)->middleware('auth');
Route::resource('/article', ArticleController::class);

Route::get('/',[FrontendController::class, 'index'])->name('frontend.home');

//Route::get('politics',[FrontendController::class, 'politics'])->name('frontend.politics');
Route::get('world',[FrontendController::class, 'world'])->name('frontend.world');
Route::get('politics',[FrontendController::class, 'politics'])->name('frontend.politics');
Route::get('ent',[FrontendController::class, 'ent'])->name('frontend.ent');
Route::get('sports',[FrontendController::class, 'sports'])->name('frontend.sports');
Route::get('tech',[FrontendController::class, 'tech'])->name('frontend.tech');
Route::get('health',[FrontendController::class, 'health'])->name('frontend.health');
Route::get('lit',[FrontendController::class, 'literature'])->name('frontend.literature');
Route::get('privacy',[FrontendController::class, 'privacy'])->name('frontend.privacy');
Route::get('rule',[FrontendController::class,'rule'])->name('frontend.rule');

Route::get('source/{id}',[FrontendController::class, 'detail'])->name('frontend.detail');
Route::get('aboutus',[FrontendController::class, 'aboutus'])->name('frontend.aboutus');
Route::get('contact',[FrontendController::class, 'contact'])->name('frontend.contact');


Route::get('login',[AuthController::class, 'loginForm'])->name('login');
Route::post('login',[AuthController::class, 'login']);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');




