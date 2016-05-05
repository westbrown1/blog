<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="">Brand Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="{{ Request::is('/') ? 'active' : '' }} "><a href="/">Home</a></li>        
        <li class="{{Request::is('about') ? 'active' : ''}}"><a href="/about">About Us</a></li>
        <li class="{{Request::is('contact') ? 'active' : ''}}"><a href="/contact">Contact Us</a></li>
        <li class="{{Request::is('blog') ? 'active' : ''}}"><a href="/blog">Blog</a></li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" haspopup+"true" aria-expanded="false">My Account <span class="caret"></span></a>
          <ul class="dropdown-menu drp-dwn">
            <li><a href="{{route('posts.index')}} ">Posts</a></li>
            <li><a href="{{route('categories.index')}} ">Categories</a></li>
            <li><a href="{{ route('logout') }} ">Logout</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      @if (Auth::check())
        @else          
          <li class="{{Request::is('auth/login') ? 'active' : ''}}"><a href="/auth/login"><span class="glyphicon glyphicon-user"></span> log In</a></li>
          <li class="{{Request::is('auth/register') ? 'active' : ''}}"><a href="/auth/register"><span class="glyphicon glyphicon-log-in"></span> Sign Up</a></li>
        @endif
      </ul>
    </div>
  </div>
</nav>