<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    public function __construct(){
      $this->middleware('auth')->except(['store']);
    }

    // store comments
    public function store(Post $post){
      $this->validate(request(), [
        'name' => 'required',
        'email' => 'required',
        'body' => 'required|min:2'
      ]);

      $post->addComment(request('body'));

      return back();
    }

    public function destroy($post, $comment){
      $comment = Comment::find($comment);

      // delete comment
      $comment->delete();
      
      // redirect to dashboard
      // return $comment->name;
      return redirect()->back();
    }
}
