<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
        /**
     * Post一覧を表示する
     * 
     * @param Post Postモデル
     * @return array Postモデルリスト
     */
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
    }
    
    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }
    
    public function create()
    {
        return view('posts/create');
    }

    /*ブログ投稿作成処理用*/
    public function store(PostRequest $request, Post $post)
    {
        $input = $request['post'];/*postをキーにもつリクエストパラメータを取得する*/
        $post->fill($input)->save();/*先ほどまで空だったPostインスタンスのプロパティを、受け取ったキーごとに上書き*/
        return redirect('/posts/' . $post->id);/*リダイレクト*/
    }
}
?>