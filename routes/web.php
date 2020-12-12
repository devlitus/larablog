<?php

use App\Http\Controllers\dashboard\CategoryController;
use App\Http\Controllers\dashboard\PostController;
use App\Http\Controllers\dashboard\UserController;
use App\Http\Controllers\web\WebController;
use Illuminate\Support\Facades\Route;

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

 /*
// route with params
Route::get('/test/{name}', function ($name ) {
    return "welcome $name";
});
// Route with option params
Route::get('/hola/{name?}', function ($name = null) {
    return "welcome $name conocenos: <a href='" . route('yours')."'>nosotros</a>";
});
// Route with name
Route::get('/about-yours', function () {
    return "<h1>Todo sobre nosotros</h1>";
})->name('yours');

Route::get('home/{name?}/{firtname?}', function ($name = null, $firstname = null) {
    return view('home', ['name' => $name, 'firstname' => $firstname]);
})->name('home');

Route::get('posts', function () {
    $posts = ['Post 1', 'Post 2', 'Post 3', 'Post 4',];
    // $posts = [];
    return view('posts')->with('posts', $posts);
})->name('posts'); */

Route::resource('dashboard/posts', PostController::class);
Route::post('dashboard/post/{post}/image', [PostController::class, 'image'])->name('post.image');
Route::resource('dashboard/category', CategoryController::class);
Route::resource('dashboard/user', UserController::class);
Route::get('/', [WebController::class, 'index'])->name('index');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
