<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    
    public function store(Request $request, Post $post)
    {
        $validText = $request->validate([
            'message' => 'required',
        ]);
        $comment = $validText;
        
        $comment['published'] = $request['published']?false:true;
        $comment['author_comm_id'] = Auth::user()->id;
        $comment['post_id'] = $request['post_id'];
        if ($comment['published']) {
            $comment['created_at'] = now();
        }
        $comment = Comment::create($comment);
        return back();
        
    }
    public function destroy($id)
    { 
        $comment = Comment::find($id);
        if($comment->delete()){
        return back()->with('status', 'comment by '.$comment->user->name.' deleted successfully');
        } else {
            return back()->with('status', "Oops: failed to delete $comment->message ");
        }
    }



}
