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

Route::get('/', 'PostController@index');
Route::get('/posts/{post}', 'PostController@show');
/*RESTful思想に則り、ブログ投稿詳細のURLは［/posts/(対象データのID)］とします。*/
/*ex) IDが1のpostsテーブルデータを表示する場合、URLは［https://〜〜〜/posts/1］にします。*/