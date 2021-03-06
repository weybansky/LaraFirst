{{-- Sidebar --}}
<div class="col-sm-3 col-sm-offset-1 blog-sidebar">

  <div class="sidebar-module sidebar-module-inset">
    <h4>About</h4>
    <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
  </div>

  <div class="sidebar-module">
    <h4>Archives</h4>
    <ol class="list-unstyled">
      {{-- @if(isset($archives)) --}}
        @foreach ($archives as $archive)
        <li>
          <a href="{{ url('') }}/?month={{ $archive['month'] }}&year={{ $archive['year'] }}">
            {{ $archive['month'] }} {{ $archive['year'] }}
          </a>
          ({{ $archive['published'] }})
        </li>
      @endforeach
      {{-- @endif --}}
    </ol>
  </div>

  <div class="sidebar-module">
    <h4>Elsewhere</h4>
    <ol class="list-unstyled">
      <li><a href="https://github.com/weybansky">GitHub</a></li>
      <li><a href="https://twitter.com/weybansky">Twitter</a></li>
      <li><a href="#">Facebook</a></li>
    </ol>
  </div>

</div><!-- /.blog-sidebar -->
