<?php

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


Route::get('test', function () {
  /*http://127.0.0.1:8000/test?name=sarah -> this returns the name which is entered in the url*/
  return view('test', [
    'name' => request('name')
  ]);
});

Route::get('/posts/{post}', function($post){
  /* This would return http://127.0.0.1:8000/posts/jk9ifd90jm for example back to post view. It does not matter what is after posts.
  This is a wildcard option.
  What we do below is use the slug to reference a php array.
  */
  $posts = [
    'my-first-post' => 'Hello ',
    'my-second-post' => 'Now I am getting the hang of this blogging thing'
  ];

  if (!array_key_exists($post, $posts)) {
    //Use Laravels abort function to abort a page if the slug that is tried does not exist.
    abort(404);
  };

  return view('post',[
    'post' => $posts[$post]
  ]);
});

Route::get('/', function () {
  return view('welcome');
});
