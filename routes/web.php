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


//Top画面
Route::get('/', 'App\Http\Controllers\MoviesController@index');

//作品詳細 
Route::get('/movie/{id}','App\Http\Controllers\MoviesController@show')->name('movies.show');

//上映作品追加
Route::get('/movies/create', 'App\Http\Controllers\MoviesController@create')->name('movies.create');
Route::post('/movies/store', 'App\Http\Controllers\MoviesController@store')->name('movies.store');
// ハマった現象
///indexのmovie/{movieId}　と　createの/movies/create　のアドレスのmovieの部分が被るとルーティングができなくなる（movieとmoviesに分けて対応）

//作品情報編集
Route::get('/movies/editablelist', 'App\Http\Controllers\MoviesController@editablelist')->name('movies.editablelist');
Route::get('/movies/edit/{id}', 'App\Http\Controllers\MoviesController@edit')->name('movies.edit');
Route::patch('/movie/{id}', 'App\Http\Controllers\MoviesController@update')->name('movies.update');


// // get送信の場合は新規登録
// Route::get('/posts/{post}', 'App\Http\Controllers\PostsController@show')->where('post','[0-9]+');//createがidの中身として認識されてしまうのを防ぐ
// // patch送信の場合は更新
// Route::patch('/posts/{post}', 'App\Http\Controllers\PostsController@update');//createがidの中身として認識されてしまうのを防ぐ

// Route::get('/posts/create', 'App\Http\Controllers\PostsController@create'); //postsControllerの中のcreate()へ
// Route::post('/posts', 'App\Http\Controllers\PostsController@store');
// Route::get('/posts/{post}/edit', 'App\Http\Controllers\PostsController@edit');//createがidの中身として認識されてしまうのを防ぐ
// Route::delete('/posts/{post}', 'App\Http\Controllers\PostsController@destroy');

// Route::post('/posts/{post}/comments', 'App\Http\Controllers\CommentsController@store');
// Route::delete('/posts/{post}/comments/{comment}', 'App\Http\Controllers\CommentsController@destroy')->name('comments.destroy');
// //パラメータに引数に使うために送ったものを入れないとデータが次の画面まで送れない