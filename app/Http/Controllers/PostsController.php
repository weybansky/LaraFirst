<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

use App\Comment;

class PostsController extends Controller
{
    public function __construct(){
      $this->middleware('auth')->except(['index', 'show']);
    }

    public function index(){
      $posts = Post::latest()->filter(request(['month', 'year']))->get();

      // $archives = Post::archives();
      
      return view('posts.index', compact('posts'));
    }

    public function show(Post $post){
      // $post = Post::find($id);
      return view('posts.show',compact('post'));
    }

    public function create(){
      return view('posts.create');
    }

    public function store(){
      $this->validate(request(), [
        'title' => 'required|min:5',

        'body' => 'required'
      ]);

      // Another Method of doing this is
      Post::create([
        'title' => request('title'),
        'body' => request('body'),
        'user_id' => auth()->id()
      ]);

      // $post = new Post;
      // $post->title = $request->title;
      // // $post->body =
      // auth()->user()->posts()->save($post);

      // Another method is this
      // Post::create(request()->all());

      // redirecting to another url
      return redirect('/');

    }

    public function edit($id){
      $post = Post::find($id);
      return view('posts.edit', compact('post'));
    }

    public function update($id){
      // save updated post
      // redirect to dashboard
      $this->validate(request(), [
        'title' => 'required',

        'body' => 'required'
      ]);

      $post = Post::find($id);

      $post->title = request('title');
      $post->body = request('body');
      $post->save();

      return redirect('/posts/' . $id);
    }

    public function destroy($id){
      $post = Post::find($id);

      $comments = Comment::where('post_id', $id)->get();
      
      // delete comments
      // $comments->delete();

      foreach ($comments as $comment) {
        $comment->delete();
      }

      // delete post
      $post->delete();

      
      // redirect to dashboard
      return redirect()->home();

      // return $comments;
    }

}
