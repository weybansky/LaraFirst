@extends('layouts.blog')

@section('content')

  <h3>Edit Post</h3>

  {{-- Post Create Form --}}
  <form method="POST" action="/posts/{{ $post->id }}">
    {{-- Ensures that user is submitting the form from the same site --}}
    {{ csrf_field() }}

    {{ method_field('PATCH') }}

    <div class="form-group">
      <label for="title">Title</label>
      <input id="title" name="title" type="text" class="form-control" required value="{{ $post->title }}">
    </div>

    <div class="form-group">
      <label for="body">Body</label>
      <textarea id="body" name="body" class="form-control" required>{{ $post->body }}</textarea>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>

    @include('include.form-error')
  </form>

@endsection
