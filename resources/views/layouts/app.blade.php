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

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('bootstrap-4.5.0/css/bootstrap.css') }}">

    <style>
    html, body {
            background-color: #b83232;
            color: #fff;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
    }
    
    table tr {
            background-color: #ff5757;
            color: #fff;
            border: 6px solid #fff;
            padding: 10px;
    }

    table th {
            background-color: #ff5757;
            color: #000;
            border: 6px solid #fff;
            padding: 10px;
        
    }
    table td {
            background-color: #ff5757;
            color: #000;
            border: 6px solid #fff;
            padding: 10px;
        
    }

    nav {
        background-color: #ff5757;
        color: #000;    
    }
    .cen{
        text-align: center;
    }
    
    #app{
        border-radius: 10px;
    }
    }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark">

            <div class="container">

                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDropDown" aria-controls="navbarDropDown" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        

                            <li>
                                <a class="nav-link" href="{{ url('/category') }}">Kategori</a>
                            </li>

                            <li>
                                <a class="nav-link" href="{{ url('/post') }}">Post</a>
                            </li>

                            <li>
                                <a class="nav-link" href="{{ url('/photo') }}">Photo</a>
                            </li>

                            <li>
                                <a class="nav-link" href="{{ url('/album') }}">Album</a>
                            </li>
                    </div>


                        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                            <ul class="nav navbar-nav ml-auto">
                             <li class="nav-item active">
                                <a class="nav-link disable" href="#" role="button" aria-disabled="true">Hello! @ 
                                    {{ Auth::user()->name }} ! <span class="caret"></span>
                                </a>
                            </li>

                            <li>    
                                <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                </a>
                            </li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            
                            </ul>
                        @endguest
                   </div>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
