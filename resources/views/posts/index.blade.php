@extends('layouts.blog')

@section('content')

        @foreach($posts->all() as $post)

          <div class="blog-post">

            <h2 class="blog-post-title">
              <a href="{{ url('') }}/posts/{{ $post->id }}">
                {{ $post->title }}
              </a>
            </h2>

            <p class="blog-post-meta">
              {{ $post->created_at->toFormattedDateString() }}
              by
              {{ $post->user->name }}
            </p>

            <p>{!! $post->body !!}</p>

          </div><!-- /.blog-post -->

        @endforeach

        <nav>
          <ul class="pager">
            <li><a href="#">Previous</a></li>
            <li><a href="#">Next</a></li>
          </ul>
        </nav>

@endsection
