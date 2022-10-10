<!-- Navbar -->
<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ url('frontend/images/logo3@2x.png') }}" alt="Logo BXT" />
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav ml-auto mr-3">
                <li class="nav-item mx-md-2">
                    <a href="{{ url('/') }}" class="nav-link active">Home</a>
                </li>
                <li class="nav-item mx-md-2 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        {{ __('home.other_packages') }}
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('BookPerDay.index') }}">{{ __('home.book_per_day') }}</a>
                    </div>
                </li>
                <li class="nav-item mx-md-2">
                    <a class="nav-link" href="{{ url('contactus') }}">{{ __('home.contact_us') }}</a>
                </li>
                <li class="nav-item mx-md-2 row">
                    <a class="nav-link {{ app()->getLocale() == 'en' ? 'active' : '' }}" 
                        href="{{ route('localization.switch', 'en') }}">EN
                    </a>
                    <a class="nav-link row">/</a>
                    <a class="nav-link {{ app()->getLocale() == 'id' ? 'active' : '' }}" 
                        href="{{ route('localization.switch', 'id') }}">ID
                    </a>
                </li> 
            </ul>

            @guest
            <!-- Mobile button -->
            <form class="forn-inline d-sm-block d-md-none">
                <button class="btn btn-login my-2 my-sm-0 px-4" type="button"
                    onclick="event.preventDefault(); location.href='{{ url('login') }}';">
                    {{ __('home.sign_in') }}
                </button>
            </form>

            <!-- Dekstop Button -->
            <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button"
                    onclick="event.preventDefault(); location.href='{{ url('login') }}';">
                    {{ __('home.sign_in') }}
                </button>
            </form>
            @endguest

            @auth
            <!-- Mobile button -->
            <form class="forn-inline d-sm-block d-md-none" action="{{ url('logout') }}" method="POST">
                @csrf
                <button class="btn btn-login my-2 my-sm-0 px-4" type="submit">
                    {{ __('home.logout') }}
                </button>
            </form>

            <!-- Dekstop Button -->
            <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ url('logout') }}" method="POST">
                @csrf
                <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
                    {{ __('home.logout') }}
                </button>
            </form>
            @endauth

        </div>
    </nav>
</div>
<!-- End Navbar -->
