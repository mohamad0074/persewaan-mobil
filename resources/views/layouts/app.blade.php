<!doctype html>
<!-- cek : {{ asset('js/app.js') }} -->
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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

          <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}">
          <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
          <title>
            Material Dashboard 2 by Creative Tim
          </title>
          <!--     Fonts and icons     -->
          <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
          <!-- Nucleo Icons -->
          <link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet" />
          <link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet" />
          <!-- Font Awesome Icons -->
          <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
          <!-- Material Icons -->
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
          <!-- CSS Files -->
          <link id="pagestyle" href="{{ asset('css/material-dashboard.css') }}" rel="stylesheet" />
          <!-- Nepcha Analytics (nepcha.com) -->
          <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
          <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
         
</head>
<body>
    <div id="app">


<!-- Navbar Light -->
<nav
  class="navbar navbar-expand-lg navbar-light bg-white z-index-3 py-3">
  <div class="container">
    <a class="navbar-brand" href="" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" href="{{ url('/home') }}">
      Persewaan Mobil
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navigation">

      <ul class="navbar-nav navbar-nav-hover mx-auto">
        @guest

        @else

        <li class="nav-item px-3">
          <a style="font-weight: bold;" class="nav-link" href="{{ url('/mobil') }}">
            Mobil
          </a>
        </li>
        <li class="nav-item px-3">
          <a style="font-weight: bold;" class="nav-link" href="{{ url('/transaksi') }}">
            Order Sewa
          </a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="{{ url('/') }}">
            Pages
          </a>
        </li>
        @endguest
      </ul>

        <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item px-3">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item px-3">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item px-3 dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
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


      <!-- <ul class="navbar-nav ms-auto">
        <button class="btn bg-gradient-primary mb-0">Buy Now</button>
      </ul> -->
    </div>
  </div>
</nav>
<!-- End Navbar -->


        

        <main class="py-4">
            @yield('content')
        </main>

      <footer class="footer position-absolute bottom-2 py-2 w-100">
        <div class="container">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-12 col-md-6 my-auto">
              <div class="copyright text-center text-sm text-white text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart" aria-hidden="true"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold text-white" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-12 col-md-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-white" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-white" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-white" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-white" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>

    </div>
</body>
</html>
