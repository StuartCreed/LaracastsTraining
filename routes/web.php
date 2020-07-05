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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('test', function () {
  /*http://127.0.0.1:8000/test?name=sarah -> this returns the name which is entered in the url*/
  return view('test', [
    'name' => request('name')
  ]);
});

Route::get('/', function () {
  return view('welcome');
});
