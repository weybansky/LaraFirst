<?php

namespace App;

use Carbon\Carbon;


class Post extends Model
{
  //posts has many comments
  public function comments(){
    return $this->hasMany(Comment::class);
  }

  // $user->post
  // A post belogs to a user
  public function user(){
    return $this->belongsTo(User::class);
  }

  public function addComment($body){
    Comment::create([
      'user_id' => auth()->id() || NULL,
      'name' => request('name'),
      'email' => request('email'),
      'post_id' => $this->id,
      'body' => request('body')
    ]);

    // OR
    // $this->comments()->create(compact('body'));
  }

  public function scopeFilter($query, $filters){

      if ($month = $filters['month']){
        $query->whereMonth('created_at', Carbon::parse($month)->month);
      }

      if ($year = $filters['year']){
        $query->whereYear('created_at', $year);
      }
  }

  public static function archives(){
    return static::selectRaw('year(created_at) as year, 
          monthname(created_at) as month,
          count(*) as published')
          ->groupBy('month', 'year')
          ->orderByRaw('min(created_at) desc')
          ->get()
          ->toArray();

  }

}
