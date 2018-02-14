@extends('layouts.blog')

@section('content')

  <h3>Create a New Post</h3>

  {{-- Post Create Form --}}
  <form method="POST" action="{{ url('') }}/posts">
    {{-- Ensures that user is submitting the form from the same site --}}
    {{ csrf_field() }}

    <div class="form-group">
      <label for="title">Title</label>
      <input id="title" name="title" type="text" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="slug">Slug</label>
      <input id="slug" name="slug" type="text" class="form-control">
    </div>

    <div class="form-group">
      <label for="body">Body</label>
      <textarea id="body" name="body" class="form-control" rows="6" cols="80"></textarea>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>

    @include('include.form-error')
  </form>

@endsection
