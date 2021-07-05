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
Route::resource('/category', CategoryController::class);
Route::resource('/article', ArticleController::class);

Route::get('/',[FrontendController::class, 'index'])->name('frontend.home');
<<<<<<< HEAD
//Route::get('politics',[FrontendController::class, 'politics'])->name('frontend.politics');
Route::get('politics',[FrontendController::class, 'politics'])->name('frontend.politics');
Route::get('world',[FrontendController::class, 'world'])->name('frontend.world');
=======
Route::get('source/{id}',[FrontendController::class, 'detail'])->name('frontend.detail');


Route::get('login',[AuthController::class, 'loginForm'])->name('login');
Route::post('login',[AuthController::class, 'login']);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');


>>>>>>> 98c761fa9e8c93db17d5a5c40bc4f1ec522499d8

