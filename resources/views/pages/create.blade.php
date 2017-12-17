@extends('layouts.page')

@section('content')

<div class="container" style="margin-top: 50px;">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<form action="">
				<div class="form-group">
					<h1>Create a new Page</h1>
				</div>

				<div class="form-group">
					<label for="title">Page Title</label>
					<input type="text" class="form-control">
				</div>

				<div class="form-group">
					<label for="slug">Slug / Url</label>
					<input type="text" class="form-control">
				</div>

				<div class="form-group">
					<label for="body">Page Body</label>
					<textarea name="body" cols="30" rows="10"></textarea>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary"></button>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection