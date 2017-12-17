@extends('layouts.blog')

@section('content')

  <h1 class="blog-post-title">{{ $post->title }}</h1>

  <p class="blog-post-meta">
    {{ $post->created_at->toFormattedDateString() }}
    by
    {{ $post->user->name }}
  </p>

  <p>{!! $post->body !!}</p>

  <hr>

  <div class="comments">
    <ul class="list-group">
      <l1 class="list-group-item">Comments</li>
      @foreach ($post->comments as $comment)
        <li class="list-group-item">
          <h5>
            {{ $comment->name }}
            <small>
              <em>{{ $comment->created_at->diffForHumans() }}</em>
            </small>
            <li class="dropdown pull-right" style="list-style-type:none;">
              <a href="#" class="dropdown-toggle blog-nav-item active" data-toggle="dropdown" role="button" aria-expanded="false" style="border:1px #000 solid;color: #000;margin-top: -15px;">
                <span class="caret"></span>
              </a>

              <ul class="dropdown-menu" role="menu">
                <li>
                  <a class="blog-nav-item" href="/posts/{{ $post->id }}/comments/{{ $comment->id }}">Delete</a>
                </li>
              </ul>

            </li>
          </h5>
          <p>{!! $comment->body !!}</p>
        </li>
      @endforeach
    </ul>
  </div>

  {{-- Add a comment form section --}}
  <hr>
  <div class="panel panel-default">
    <div class="panel-heading">
      Add your Comment
    </div>
    <div class="panel-body">
      <form method="POST" action="/posts/{{ $post->id }}/comments">
        {{ csrf_field() }}

          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" value="{{ auth()->check()? auth()->user()->name : "" }}" {{ auth()->check()? "readonly": "" }} required>
          </div>

          <div class="form-group">
            <label for="name">Email:</label>
            <input type="email" name="email" class="form-control" value="{{ auth()->check()? auth()->user()->email : "" }}" {{ auth()->check()? "readonly": "" }} required>
          </div>

        <div class="form-group">
          <label for="body">Comment</label>
          <textarea name="body" placeholder="Your comment here..." class="form-control" required></textarea>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary pull-right">Add Comment</button>
        </div>

        @include('include.form-error')
      </form>
    </div>
  </div>


@endsection
