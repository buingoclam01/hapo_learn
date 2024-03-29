<header class="main-header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="logo-container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img class="logo-image" src="{{ asset('images/logo.png') }}" alt="HapoLearn Logo">
            </a>
            <div class="navbar-icons">
                <div class="navbar-icon">

                </div>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto w-100">
            <li class="nav-item {{ (Request::route()->getName() == 'home') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('home') }}" >HOME <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item {{ (Request::route()->getName() == 'courses.index') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('courses.index') }}">ALL COURSES</a>
                </li>

                <li class="nav-item {{ (Request::route()->getName() == 'profile') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('profiles.index') }}">PROFILE</a>
                </li>
                <li class="nav-item {{ ((Request::route()->getName() == 'login') || (Request::route()->getName() == 'register')) ? 'active' : '' }}">
                @if(Auth::check())
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                            <button type="submit" class="nav-link logout-btn">
                                LOGOUT
                            </button>
                        </form>
                @else
                        <a class="nav-link" href="{{ route('login') }}"A>
                            LOGIN/REGISTER
                        </a>
                @endif
                </li>
            </ul>
        </div>
    </nav>
</header>
