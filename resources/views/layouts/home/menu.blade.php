<!-- Header -->
<nav class="navbar navbar-default navbar-custom sticky">
    <div>
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
               @if(Request::path() == '/')
                <li class="active"><a href="#home">Home</a></li>
                <li><a href="#about-us">About Us</a></li>
                <li><a href="#contact">Contact</a></li>
                @endif
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                  <li class="dropdown">
      <div class="profile-header-container">
       <div class="profile-header-img">
               <img class="img-circle" src="{{asset('uploads/'.Auth::user()->id)}}" width="50px"/>
               <!-- badge -->
               <div class="rank-label-container">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                     <span class="label label-default rank-label"> {{ Auth::user()->name }}</span>
                 </a>

                 <ul class="dropdown-menu" role="menu">
                     <li><a href="{{ url('/posts') }}">Posts</a></li>
                    <li>
                         <a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                             Logout
                         </a>

                         <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                             {{ csrf_field() }}
                         </form>
                    </li>
                   </ul>
               </div>
           </div>
       </div>



                    </li>

                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>
<!-- /Header -->
