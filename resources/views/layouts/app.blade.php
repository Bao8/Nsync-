<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield("title")</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/checkmenu.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.0.0/velocity.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $('.nav-item > a').on('click', function (e) {
                e.preventDefault();
                var $subNav = $(this).next('.nav-sub');
                if ($subNav.css("display") === "none") {
                    $(this).addClass('is-active');
                    $subNav.velocity('slideDown', {duration: 400});
                } else {
                    $(this).removeClass('is-active');
                    $subNav.velocity('slideUp', {duration: 400});
                }
            });
        });
    })(jQuery);
  </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/nsync.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
</head>
<body>
    <div id="app">
        <nav>
            <ul class="py-0 my-0 flex-md-nowrap row fixed-top navbar navbar-expand-md navbar-dark bg-dark shadow mr-0">
                <a class="navbar-brand col-sm-2 col-md-2 mr-0" href="{{ url('/home') }}">
                    Nsync
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="col-sm-10 col-md-10 pt-0" id="navbarSupportedContent">
                    <div class="row pb-0">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav col-10 p-0">
                        <form class="d-flex px-0" style="margin-left:auto;">
                            <input class="form-control form-control-dark w-100 " type="text" placeholder="Search" aria-label="Search" name="search">
                            <button class="btn btn-outline-success mx-2" type="submit">Search</button>
                        </form>
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav col-2 justify-content-end">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-dark bg-dark" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item text-white dd_link" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </ul>
        </nav>
        <div class="container-fluid pt-3">
            <div class="row">
                @guest
                    @if (Route::has('login'))
                    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                        @yield('content')
                    </main>                     
                    @endif
                @else
                    @extends('layouts.sidebar')    
                    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                    @yield('content')
                    </main>
                @endguest
            </div>
        </div>
    </div>
</body>
</html>
