<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\PostDec;

class PostController extends Controller
{
    public function showPosts(){
        $posts = Post::orderBy('updated_at', 'asc')->paginate(10);
        return view("post-login.news.news", ['posts' => $posts]);
    }
    public function readMore($id){
        $post = Post::find($id);
        $comments = Comment::where('post_id','like','post_id');
        $posts = Post::orderBy('updated_at', 'asc')->paginate(3);
        return view('post-login.news.news_article', ['post'=>$post, 'posts'=>$posts, 'comments'=>$comments]);

    }
    public function create(){
        return view('post-login.news.writePost');
    }
    public function store(Request $request){
        $dataOk = $request->validate([
            'title'=> 'required|min:2',
            'description'=>'required|min:2',
            'photo'=>'max:10250',
        ]);

        $dataOk['author_id']= Auth::user()->id;
        $post = $dataOk;
        if($request->file('photo')){
            $file = $request->file('photo');
            $fileName = "user-".time().".".$file->getClientOriginalExtension();
            $path = $file->storeAs('images/users', $fileName, 'public');
            $post['photo'] = $path;
        }
        $createPost = Post::create($post);
        if($createPost){
            $post['created_at']=now();
            return redirect()->route('show.news')->with(["status"=> "$createPost->title : has been successfully published!"]);
        } else{
            return back()->with("error", "Failed to create the User")->withInput();
        }

    }
    public function searchPost(){
        if(!($query = null)){
            $query = request()->input('query');
            $posts = Post::where('title', 'like',"%$query%")
            ->orWhere('description','like',"%$query%")
            ->paginate(10);
            if(count($posts) > 0){
                return view('post-login.news.news', ['posts'=>$posts]);
            } else {
                return back()->with("error", "Oops! No article found")->withInput();
            }
        } else {
            return back();
        }
    }

    public function postsList(){
        $posts = Post::orderBy('updated_at', 'asc')->paginate(10);
        return view("post-login.news.news", ['posts' => $posts]);
    }

}
