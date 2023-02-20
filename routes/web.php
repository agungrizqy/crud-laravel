<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Weblog!"
    ]);
});

Route::get('/about', [AboutController::class,'dataAbout']);

Route::get('/blog', [PostController::class, 'index']);

Route::get('/posts/{post:slug}', [PostController::class,'find']);

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('posts', [
        "title" => "Post by Category : $category->name",
        "posts" => $category->posts->load('user','category')->paginate(7)->withQueryString()
    ]);
});
Route::get('/author/{author:username}', function(User $author) 
{
    return view('posts', [
        "title" => "Post By Author : $author->name",
        "posts" => $author->post->load('category', 'user')->paginate(7)->withQueryString()
    ]);
});

Route::get('/categories' , [CategoryController::class,'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');