<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">

        <!-- Branding Image -->
        <a class="navbar-brand" href="/" id="logo">{{config('app.name','PRISM')}}</a>

        <div class="collapse navbar-collapse" id="navbarCollapse">

          <ul class="navbar-nav mr-auto">

                {{--  <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a></li>  --}}

                @if (Auth::check())
                {{--  <li class="nav-item"><a class="nav-link" href="#">User List</a></li>  --}}

                <div class="dropdown show">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }} <b class="caret"></b>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item" href="{{ route('users.show', Auth::user()->id) }}">My Account</a>
                          <a class="dropdown-item" href="{{ route('users.edit', Auth::user()->id) }}">Edit Profile</a>
                          <div class="dropdown-divider"></div>
                          <a id="logout" href="#">
                                <form action="{{ route('logout') }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-block btn-danger" type="submit" name="button">Exit</button>
                                </form>
                            </a>
                        </div>
                </div>
              @else
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('help') }}">Help</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
              @endif

          </ul>

          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>

        </div>
    </nav>
</header>

