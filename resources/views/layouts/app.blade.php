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

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
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
<body class="bg-local" style="background-image: url({{ asset('images/logo.jpg') }})">
    <div id="app" class="block sm:none md:px-12 lg:px-12 xl:px-12">
        <header class="bg-transparent md:flex md:items-center md:justify-between p-1 md:pb-2">
        
            <a href="{{ route('users.index') }}">
                <div class="flex">
                    <div class="">
                        <img class="h-20" src="{{ asset('images/logo.png') }}" alt="">
                    </div>
                    <div class="ml-2 w-10 text-lg">
                        <strong>SISTEMA DE CERTIFICADOS</strong>
                    </div>
                </div>
            </a>
            <!-- END Logo text or image -->
            
            <!-- Search field -->
            <form class="mx-auto pl-20 md:mb-0 md:w-1/4">
                <label class="hidden" for="search-form">Buscar</label>
                <!-- <span class="icon"><i class="fa fa-search"></i></span> -->
                <input class="bg-grey-lightest border-2 leading-normal focus:bg-white focus:outline-none p-2 rounded-full shadow-inner w-full" placeholder="Buscar por DNI o CIP" type="search" id="search">
                
                <button class="hidden">Submit</button>
            </form>
            <!-- END Search field -->
            
            <!-- Global navigation -->
            <nav>
                <ul class="list-reset md:flex md:items-center">
                    <li>
                        <a class="bg-gray-200 border hover:border-gray-600 hover:bg-gray-400 hover:text-gray-900 text-gray-700 font-bold py-3 px-4 rounded-l focus:border-gray-700 border-b-4 hover:border-gray-500" href="{{ route('users.index') }}">
                            Usuarios
                        </a>
                    </li>
                    <li>
                        <a class="bg-gray-200 border hover:border-gray-600 hover:bg-gray-400 hover:text-gray-900 text-gray-700 font-bold py-3 px-4 rounded-r focus:border-gray-700 border-b-4 hover:border-gray-500" href="{{ route('certificates.index') }}">
                            Certificados
                        </a>
                    </li>

                   <!--  @guest
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
                    @endguest -->
                </ul>
            </nav>
            <!-- END Global navigation -->
        </header>   
       
        @yield('content')
        
    </div>
<body>
</html>
