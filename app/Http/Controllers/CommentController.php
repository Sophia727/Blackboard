<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $validText = $request->validate([
            'message' => 'required',
        ]);
        $comment = $validText;
        

        $comment['published'] = $request['published']?false:true;
        $comment['author_comm_id'] = Auth::user()->id;
        $comment['post_id'] = $request['comments_post_id_foreign'];
        // $comment['post_id']
        // $comment['post_id'] = $request->post('id');
        if ($comment['published']) {
            $comment['created_at'] = now();
        }
        $newComment = Comment::create($comment);
        
        if ($newComment) {      
           return  redirect()->route('news.readmore', ['post_id'=>$request['post_id'], 'comments'=>$comment])->with(["status"=>"Comment added successfully"]);
        }else{
            return back()->with("error","Adding comment: Failed")->withInput();
        }
    }
    

}
