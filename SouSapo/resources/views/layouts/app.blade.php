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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
    <div id="app">


        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: var(--sapo);">
            <!-- Logo e Titulo da NavBar -->
            <a id="logo" class="navbar-brand" href="{{ url('/') }}" style="background-color: var(--sapinho);">
                <img src="https://a-static.mlcdn.com.br/618x463/quadro-infantil-desenho-sapo-conspecto/conspecto/148957/9b142972fa26b3c5f14c9d865d408650.jpg" width="30" height="30"
                    class="d-inline-block align-top" alt="">
                SouSapo
            </a>

            <!-- Navbar -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Botôes da navbar -->
                <ul class="navbar-nav mr-auto">
                    <li id="navbotao" class="nav-item active" style="background-color: var(--purple);">
                        <a class="nav-link" href="{{ url('/hq') }}">Quadrinhos <span class="sr-only">(current)</span></a>
                    </li>
                    <li id="navbotao" class="nav-item active" style="background-color: var(--purple);">
                        <a class="nav-link" href="{{ url('/apoio') }}">Apoiar <span class="sr-only">(current)</span></a>
                    </li>
                    <li id="navbotao" class="nav-item active" style="background-color: var(--purple);">
                        <a class="nav-link" href="{{ url('/sobre') }}">Sobre <span class="sr-only">(current)</span></a>
                    </li>
                    <li id="navbotao" class="nav-item active" style="background-color: var(--purple);">
                        <a class="nav-link" href="{{ url('/forum') }}">Fórum <span class="sr-only">(current)</span></a>
                    </li>
                    <li id="navbotao" class="nav-item active" style="background-color: var(--purple);">
                        <a class="nav-link" href="{{ url('/comunidade') }}">Comunidade <span class="sr-only">(current)</span></a>
                    </li>
                </ul>

                <!-- Lado direito na NavBar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Links de autenticação -->
                    @guest

                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @endif

                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                    </li>
                    @endif

                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
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
        <main class="py-4">
            @yield('content')
        </main>

        <!-- FOOTER -->
        <div class="footer">
            <p>Footer</p>
        </div>

    </div>
</body>

</html>
