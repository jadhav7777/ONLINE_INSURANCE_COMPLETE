<nav class="navbar navbar-default navbar-static-top" style="background:#F9AB3B">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="welcome"class="active"style="color: #000000;"class="{{ Request::is('/welcome')? "active" :"" }}"><b>Laravel Blog</b></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="{{ Request::is('login')? "active" :"" }}"><a href="/home" style="color: #000000;">Home<span class="sr-only">(current)</span></a></li>
        <li class="{{ Request::is('blog')? "active" :"" }}"><a href="/blog" style="color: #000000;">Blog<span class="sr-only">(current)</span></a></li>
        <li class="{{ Request::is('about')? "active" :"" }}"><a href="/about"style="color: #000000;">About</a></li>
        <li class="{{ Request::is('contact')? "active" :"" }}"><a href="/contact"style="color: #000000;">Contact Us</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        
         <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}"  style="color: #000000;"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                            <li><a href="{{ route('register') }}"  style="color: #000000;margin-right: 20px;"><span class="glyphicon glyphicon-user"></span> Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                     <a href="{{url('posts')}}">Posts</a>
                                     <a href="{{route('categories.index')}}">Categories</a>
                                     <a href="{{route('tags.index')}}">Tags</a>
                                     
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"  style="color: #000000;">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul><p></p>
                            </li>
                        @endif
                    </ul>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>