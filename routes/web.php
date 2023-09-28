<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
//    return view('welcome');
    return "<h1>hey there I'm Menace!</h1>";
});

Route::get('/about', function () {
//    return view('welcome');
//    return "<h1>I'm a troublemaker yoo</h1>";
});

Route::get('/contact', function () {
//    return view('welcome');
//    return "<h1>drop a call here 042258121</h1>";
});

Route::get('/post/{id}/{name}', function ($id, $name) {
//    return "welcome to our community ". $id. " ". $name;
});

Route::get('admin/posts/example', array('as'=>'admin.home', function () {
    $url = \route('admin.home');

//    return "this url is ". $url;
}));

//Route::get('/post/{id}', 'App\Http\Controllers\PostsController@index');

//Route::resource('posts', 'App\Http\Controllers\PostsController');

Route::get('/contact', 'App\Http\Controllers\PostsController@contact');

Route::get('post/{id}/{name}/{password}', 'App\Http\Controllers\PostsController@showpost');
