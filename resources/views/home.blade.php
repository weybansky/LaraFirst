@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <a class="btn btn-info" href="{{ url('') }}/posts/create" role="button">Create a new Post</a>

                    <h3>List of Post</h3>

                    <table class="table table-responsive table-striped">
                      <thead class="bg-primary">
                        <tr>
                          <td>S/N</td>
                          <td>Title</td>
                          <td>Categories</td>
                          <td>Date Created</td>
                          <td>Actions</td>
                        </tr>
                      </thead>

                      <tbody>
                        @if (count(Auth::user()->posts) > 0)
                          @foreach (Auth::user()->posts as $post)
                            <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>
                                <a href="{{ url('') }}/posts/{{ $post->id }}">
                                  {{ $post->title }}
                                </a>
                              </td>
                              <td>Nill</td>
                              <td>{{ $post->created_at }}</td>
                              <td>
                                <a href="{{ url('') }}/posts/{{ $post->id }}/edit" class="btn btn-primary" role="button">Edit</a>
                                <a href="{{ url('') }}/posts/{{ $post->id }}/delete" class="btn btn-danger" role="button">Delete</a>
                              </td>
                            </tr>
                          @endforeach
                        @else
                          <tr>
                            <td>No Post Found</td>
                          </tr>
                        @endif
                      </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection