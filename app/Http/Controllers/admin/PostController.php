<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showPosts(){
        $posts = Post::orderBy('updated_at', 'asc')->paginate(10);
        return view("pre-login.news.news", ['posts' => $posts]);
    }
    public function readMore($id){
        $post = Post::find($id);
        return view('pre-login.news.news_article', ['post'=>$post]);
    }
    public function showMorePosts(){
        $posts = Post::orderBy('updated_at', 'asc')->paginate(3);
        return view("pre-login.news.news", ['posts' => $posts]);
    }
}
