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

//画面テスト用
// Route::get('/', function () {
//     return view('sample');
// });


//Top画面
Route::get('/', 'App\Http\Controllers\MoviesController@index');

//作品詳細 
Route::get('/movie/{movie}','App\Http\Controllers\MoviesController@show')->name('movies.show');

//上映作品追加
Route::get('/movies/create', 'App\Http\Controllers\MoviesController@create')->name('movies.create');
Route::post('/movies/store', 'App\Http\Controllers\MoviesController@store')->name('movies.store');
// Route::resource('/movies/store', 'App\Http\Controllers\MoviesController@store')->name('movies.store');
// ハマった現象
///indexのmovie/{movieId}　と　createの/movies/create　のアドレスのmovieの部分が被るとルーティングができなくなる（movieとmoviesに分けて対応）

//作品情報編集
Route::get('/movies/editablelist', 'App\Http\Controllers\MoviesController@editablelist')->name('movies.editablelist');
Route::get('/movies/edit/{movie}', 'App\Http\Controllers\MoviesController@edit')->name('movies.edit');
Route::patch('/movies/{movie}/update', 'App\Http\Controllers\MoviesController@update')->name('movies.update');
//更新でハマった部分
//get送信の変数部分をidにしていたが、movieと書き直したところ、正常に動作。
//いままでの部分はidを引けていなかったのかもしれない。

//公開停止・削除
Route::get('/movies/stop/{movie}','App\Http\Controllers\MoviesController@stop')->name('movies.stop');
Route::get('/movies/stoplist','App\Http\Controllers\MoviesController@stoplist')->name('movies.stoplist');
Route::get('/movies/resume/{movie}','App\Http\Controllers\MoviesController@resume')->name('movies.resume');
// Route::delete('movies/stop/{movie}/', 'App\Http\Controllers\MoviesController@delete')->name();

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