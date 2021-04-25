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

    <!-- Fontes -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<body>
    <div id="app">

        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top" style="background-color: var(--sapo);">
            <div class="container-fluid">

                <!-- Logo e Titulo da NavBar -->
                <a id="logo" class="navbar-brand" href="{{ url('/') }}" style="background-color: var(--sapao);">
                    <img src="https://a-static.mlcdn.com.br/618x463/quadro-infantil-desenho-sapo-conspecto/conspecto/148957/9b142972fa26b3c5f14c9d865d408650.jpg"
                        width="30" height="30" class="d-inline-block align-top" alt="">
                    SouSapo
                </a>

                <!-- Botão Responsivo -->
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navsapo"
                    aria-controls="navsapo" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar -->
                <div id="navsapo" class="collapse navbar-collapse">
                    <!-- Botôes da navbar -->
                    <ul class="nav navbar-nav mr-auto">

                        <li id="navbotao" class="nav-item active">
                            <a class="btn btn-sapinho" href="{{ url('/hq') }}" role="button">Quadrinhos</a>
                        </li>

                        <li id="navbotao" class="nav-item active">
                            <a class="btn btn-sapinho" href="{{ url('/sobre') }}" role="button">Sobre</a>
                        </li>

                        <li id="navbotao" class="nav-item active">
                            <a class="btn btn-sapinho" href="{{ url('/apoio') }}" role="button">Apoiar</a>
                        </li>

                        <li id="navbotao" class="nav-item active">
                            <a class="btn btn-sapinho" href="{{ url('/forum') }}" role="button">Fórum</a>
                        </li>

                        <li id="navbotao" class="nav-item active">
                            <a class="btn btn-sapinho" href="{{ url('/comunidade') }}" role="button">Comunidade</a>
                        </li>
                    </ul>

                    <!-- Lado direito na NavBar -->
                    <ul class="nav navbar-nav ml-auto">
                        <!-- Links de autenticação -->
                        @guest

                        @if (Route::has('login'))
                        <li id="navbotao" class="nav-item">
                            <a class="btn btn-sapao" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li id="navbotao" class="nav-item">
                            <a class="btn btn-sapao" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                        </li>
                        @endif

                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="btn btn-sapao dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Sair') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
        </nav>

        <!-- CONTEUDO -->
        <main class="pb-0">
            @yield('content')
        </main>

    </div>
</body>

</html>
