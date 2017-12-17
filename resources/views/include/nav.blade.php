{{-- will contain the navigation --}}
<div class="blog-masthead">
  <div class="container">
    <nav class="blog-nav">
      <a class="blog-nav-item active" href="/">Home</a>
      <a class="blog-nav-item" href="/posts/create">Create Post</a>
      <a class="blog-nav-item" href="#">New features</a>

      @if (Auth::guest())
        <a class="blog-nav-item" href="{{ route('login') }}">Login</a>
        <a class="blog-nav-item" href="{{ route('register') }}">Register</a>
      @else
        <li class="dropdown pull-right" style="list-style-type:none;">
          <a href="#" class="dropdown-toggle blog-nav-item" data-toggle="dropdown" role="button" aria-expanded="false">
              {{ Auth::user()->name }} <span class="caret"></span>
          </a>

          <ul class="dropdown-menu" role="menu">
            <li>
              <a class="blog-nav-item" href="{{ route('home')}}">Dashboard</a>
              <a class="blog-nav-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                  Logout
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
            </li>
          </ul>
        </li>
      @endif




    </nav>
  </div>
</div>
