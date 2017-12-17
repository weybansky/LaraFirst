<?php

namespace App;

class Comment extends Model
{
    //$comment->post;
    // a comment belongs to a post
    public function post(){
      return $this->belongsTo(Post::class);
    }

    // $comment->user
    // $comment->user->name  for the name of the user
    // a comment bekong to a user
    public function user(){
      return $this->belongsTo(User::class);
    }
}
