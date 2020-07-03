<?php

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
Route::get('/a', function(){
    return view('welcome1');
});

Route::get('/home', 'HomeController@home');

Route::get('/register', 'AuthController@register');

// Route::get('/welcome', 'AuthController@welcome');
Route::post('/welcome', 'AuthController@welcome_post');

Route::get('/master', function(){
    return view('adminlte/master');
});

Route::get('/', function(){
    return view('items.table');
});

Route::get('/data-table', function(){
    return view('items.data-table');
});