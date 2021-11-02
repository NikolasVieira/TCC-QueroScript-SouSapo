<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width = 1050, user-scalable = no" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/hq.js') }}" defer></script>

    <script src="{{ asset('vendor/turnjs4/extras/jquery.min.1.7.js') }}"></script>
    <script src="{{ asset('vendor/turnjs4/extras/modernizr.2.5.3.min.js') }}"></script>
    <script src="{{ asset('vendor/turnjs4/lib/hash.js') }}"></script>

    <!-- Fontes -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hqcontrols.css') }}" rel="stylesheet">

</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top" style="background-color: var(--sapo);">
        <div class="container-fluid">

            <!-- Logo e Titulo da NavBar -->
            <a id="logo" class="navbar-brand" href="{{ route('sousapo.index') }}">
                <img src="img/ico/frog.svg" width="30" height="30" class="d-inline-block align-top">
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

                    <li id="navbotao" class="nav-item active ml-2">
                        <a class="btn btn-sapinho" href="{{ route('sousapo.quadrinhos') }}"
                            role="button">Quadrinhos</a>
                    </li>

                    <li id="navbotao" class="nav-item active ml-2">
                        <a class="btn btn-sapinho" href="{{ route('sousapo.sobre') }}" role="button">Sobre</a>
                    </li>

                    <li id="navbotao" class="nav-item active ml-2">
                        <a class="btn btn-sapinho" href="{{ route('sousapo.apoio') }}" role="button">Apoiar</a>
                    </li>

                    <li id="navbotao" class="nav-item dropdown active ml-2">
                        <a id="navbarDropdown" class="btn btn-sapinho dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Comunidade</a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="{{ route('sousapo.forum') }}">
                                Fórum
                            </a>

                            <a class="dropdown-item" href="{{ route('sousapo.artes.index') }}">
                                Artes
                            </a>
                        </div>
                    </li>
                </ul>

                <!-- Lado direito na NavBar -->
                <ul class="nav navbar-nav ml-auto">
                    <!-- Links de autenticação -->
                    @guest

                    @if (Route::has('login'))
                    <li id="navbotao" class="nav-item mr-2">
                        <a class="btn btn-sapao" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @endif

                    @if (Route::has('register'))
                    <li id="navbotao" class="nav-item mr-2">
                        <a class="btn btn-sapao" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                    </li>
                    @endif

                    @else
                    <li class="nav-item dropdown">
                        @if (isset(Auth::user()->nick))
                        <a id="navbarDropdown" class="btn btn-sapao dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                            @if (isset(Auth::user()->profile_photo_path))
                            <img style=" border-radius:50%; width:35px; height:35px; margin-right:5px;"
                                class="h-8 w-8 rounded-full object-cover"
                                src="/img/users/{{Auth::user()->profile_photo_path}}"
                                alt="{{ Auth::user()->name }}">
                            @else
                            <img style=" border-radius:50%; width:35px; height:35px; margin-right:5px;"
                                src="{{ asset('img/personagens/Deus.png') }}" alt="imagem padrão">
                            @endif
                            {{ Auth::user()->nick }}
                        </a>
                        @else
                        <a id="navbarDropdown" class="btn btn-sapao dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            @if (isset(Auth::user()->profile_photo_path))
                            <img style=" border-radius:50%; width:35px; height:35px; margin-right:5px;"
                                class="h-8 w-8 rounded-full object-cover"
                                src="/img/users/{{Auth::user()->profile_photo_path}}"
                                alt="{{ Auth::user()->name }}">
                            @else
                            <img style=" border-radius:50%; width:35px; height:35px; margin-right:5px;"
                                src="{{ asset('img/personagens/Deus.png') }}" alt="imagem default">
                            @endif
                            {{ Auth::user()->name }}
                        </a>

                        @endif

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('conta.index') }}">
                                {{ __('Minha Conta') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('admin.index') }}">
                                {{ __('Dashboard') }}
                            </a>
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
    <main class="pb-0 bg-sapao">
        @yield('content')
    </main>
    <div id=hqcontrol>
        <div class="hqcontrols">
            <button onclick="viewPage();" type="button" class="btn btn-success">Ver Pagina em Tela Cheia</button>
            <button onclick="viewImage();" type="button" class="btn btn-success">Ver Imagem em Tela Cheia</button>
        </div>
    </div>
</body>

</html>
