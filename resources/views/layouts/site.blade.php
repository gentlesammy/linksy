<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="{{ asset('css/site.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="/"> Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/about"> About</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/contact"> Contact</a>
                            </li>
                            
                           

                        @else
                            
                            <li class="nav-item">
                                <a class="nav-link" href="/dashboard/links"> All Links</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/dashboard/links/new">Create Link</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/dashboard/settings">Settings</a>
                            </li>
                            
                        @endguest
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
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
                                    {{ Auth::user()->username }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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
        </nav>

        <main class="">
            @yield('content')
        </main>
    </div>
    <!-- footer -->
    <footer>
        <div class="container">
            <div class="falsefooter">
                <div class="copy box">
                    <h6>About Linkster</h6>
                    <p>
                        Linkster gives you a link where you can store all links that matters,
                        your targetted audience can easily find all your links easily.
                        You can also use linkster on sites that allowed just a single link such
                        as Instagram. 
                    </p>
                </div>
                <div class="newsletter box">
                    <h6>Subscribe Now</h6>
                    <p>
                        Get Hints on how to use Linkster to make your business more vissible. You can always unsubscribe.
                        <form action="" method="post">
                            <input type="text" placeholder="example@email.com" class="form-control">
                        </form>
                    </p>

                </div>
                <div class="sociallinks box">

                    <h6>Follow Us</h6>
                    <p>Get Our Posts Regularly through our social platforms</p>
                    <ul class="social-links list unstyle">
                        <li><a href="https://web.facebook.com/penhubng" target="_new"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="https://twitter.com/hub_pen" target="_new"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li class="social-link"><a href="https://www.instagram.com/penhubng" target="_new"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li class="social-link"><a href="https://wa.me/2348060913903?text=official%20message"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="copyright text-center">
            <p>Copyright {{Date('Y')}} All Rights Reserved | Powered By Sayem Technologies</p>
        </div>
</footer>
</body>
</html>
