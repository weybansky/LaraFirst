{{-- will contain the header --}}
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="LaraFirst App - My first laravel project">
    <meta name="author" content="Abdulwahab Nasir">
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <title>Blog Template for Bootstrap</title>

    {{-- Styles --}}
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet">

    {{-- TinyMCE --}}
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
    
  </head>

  <body>
