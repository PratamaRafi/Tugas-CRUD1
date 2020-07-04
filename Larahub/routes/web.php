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

use App\Http\Controllers\PertanyaanController;

Route::get('/', function(){
    return view('welcome');
});


Route::get('/pertanyaan', 'PertanyaanController@index'); //menampilkan data pertanyaan
Route::get('/pertanyaan/create', 'PertanyaanController@create'); //halaman untuk mengajukan pertanyaan
Route::get('/pertanyaan/{id}', 'PertanyaanController@show'); //halaman untuk menampilkan pertanyaan tertentu dan menjawab
Route::get('/pertanyaan/{id}', 'PertanyaanController@edit');//form untuk edit
Route::get('/jawaban/{pertanyaan_id}', 'JawabanController@index');

Route::post('/pertanyaan', 'PertanyaanController@store');//mengirimkan pertanyaan baru masuk ke database
Route::post('/jawaban/{pertanyaan_id}', 'JawabanController@store');

Route::put('/pertanyaan/{id}', 'PertanyaanController@update');
Route::delete('pertanyaan/{id}', 'PertanyaanController@destroy'); //hapus pertanyaan id tertentu 