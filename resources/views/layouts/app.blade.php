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
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<!-- <body>
    <div id="app">

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">


                    <ul class="navbar-nav ml-auto">

                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body> -->
<body>
<header class="border-b md:flex md:items-center md:justify-between p-1 pb-0 shadow-lg md:pb-2">
  
    <!-- Logo text or image -->
    <div class="flex items-center justify-between mb-4 md:mb-0">
        <a href="{{ url('/') }}">
            <img class="h-16 w-50" src="{{ asset('images/logo.png') }}" alt="">
        </a>
    </div>
    <!-- END Logo text or image -->
    
    <!-- Search field -->
    <form class="mb-4 w-full md:mb-0 md:w-1/4">
        <label class="hidden" for="search-form">Buscar</label>
        <input class="bg-grey-lightest border-2 focus:border-orange p-2 rounded-lg shadow-inner w-full" placeholder="Buscar por DNI o CIP" type="text">
        <button class="hidden">Submit</button>
    </form>
    <!-- END Search field -->
    
    <!-- Global navigation -->
    <nav>
        <ul class="list-reset md:flex md:items-center">
            <li class="md:ml-4">
                <a class="block no-underline hover:bg-gray-800 py-2 text-grey-darkest hover:text-white md:border-none md:p-0" href="{{ route('users.index') }}">
                Usuarios
                </a>
            </li>
            <li class="md:ml-4">
                <a class="border-t block no-underline hover:underline py-2 text-grey-darkest hover:text-black md:border-none md:p-0" href="#">
                Certificados
                </a>
            </li>

            @guest
                <li class="md:ml-4 block no-underline hover:underline py-2 text-grey-darkest hover:text-black md:border-none md:p-0">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="md:ml-4">
                        <a class="nav-link block no-underline hover:underline py-2 text-grey-darkest hover:text-black md:border-none md:p-0" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="md:ml-4 dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right object-cover" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>

    </nav>
    <!-- END Global navigation -->
</header>    

<main class="py-4">
            @yield('content')
        </main>
<body>
</html>
