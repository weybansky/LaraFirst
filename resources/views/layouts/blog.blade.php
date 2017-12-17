@include('include.header')

@include('include.nav')

<div class="container">

  <div class="row">

  <div class="blog-header">
    <h1 class="blog-title">The Bootstrap Blog</h1>
    <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
  </div>


  <div class="col-sm-8 blog-main">

    @yield('content')
    
  </div><!-- /.blog-main -->


  @include('include.sidebar')

  </div><!-- /.row -->
</div><!-- /.container -->

@include('include.footer')
