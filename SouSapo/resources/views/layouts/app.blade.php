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
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<body>
    <div id="app">

        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top" style="background-color: var(--sapo);">
            <div class="container-fluid">

                <!-- Logo e Titulo da NavBar -->
                <a id="logo" class="navbar-brand" href="{{ route('sousapo.index') }}">
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
                            <a class="btn btn-sapinho" href="{{ route('hq.capitulos') }}" role="button">Quadrinhos</a>
                        </li>

                        <li id="navbotao" class="nav-item active">
                            <a class="btn btn-sapinho" href="{{ route('sousapo.sobre') }}" role="button">Sobre</a>
                        </li>

                        <li id="navbotao" class="nav-item active">
                            <a class="btn btn-sapinho" href="{{ route('sousapo.apoio') }}" role="button">Apoiar</a>
                        </li>

                        <li id="navbotao" class="nav-item active">
                            <a class="btn btn-sapinho" href="{{ route('sousapo.forum') }}" role="button">Fórum</a>
                        </li>

                        <li id="navbotao" class="nav-item active">
                            <a class="btn btn-sapinho" href="{{ route('sousapo.comunidade') }}" role="button">Comunidade</a>
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
                                <a class="dropdown-item" href="{{ route('sousapo.conta') }}">
                                    {{ __('minha conta') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('sousapo.dashboard') }}">
                                    {{ __('dashboard') }}
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

        <!-- FOOTER -->
        @section('footer_padrao')
        <div id="footer">
            <footer>
                <div class="container">
                    <div class="sec sobrenos">
                        <h2>Sobre Nós</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus nam odio magni incidunt
                            iste
                            dolore molestias, hic ipsa porro obcaecati reprehenderit, repudiandae nulla eaque deleniti
                            recusandae dignissimos id omnis corrupti?</p>
                        <ul class="sci">
                            <li><a class="facebook" href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i>
                                </a></li>
                            <li><a class="instagram" href="#"><i class="fa fa-instagram" aria-hidden="true"></i>
                                </a></li>
                            <li><a class="twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i>
                                </a></li>
                            <li><a class="youtube" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a></li>
                        </ul>
                    </div>
                    <div class="sec quickLinks">
                        <h2>Links Rápidos</h2>
                        <ul>
                            <li><a href="{{ route('sousapo.index') }}">Inicio</a></li>
                            <li><a href="{{ route('hq.index') }}">Quadrinhos</a></li>
                            <li><a href="{{ route('sousapo.sobre') }}">Sobre</a></li>
                            <li><a href="{{ route('sousapo.apoio') }}">Apoiar</a></li>
                            <li><a href="{{ route('sousapo.forum') }}">Fórum</a></li>
                            <li><a href="{{ route('sousapo.comunidade') }}">Comunidade</a></li>
                        </ul>
                    </div>
                    <div class="sec contato">
                        <h2>Informações e Contato</h2>
                        <ul class="info">
                            <li>
                                <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                <span>R. Lúcio Sarti, 809 <br>Parque Eldorado, Bebedouro <br>SP, 14706-120</span>
                            </li>
                            <li>
                                <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                                <p><a href="tel:551733439695">+55 (17)3343-9695</a><br>
                                    <a href="tel:12345678900">+1 (23)4567-8900</a></p>
                            </li>
                            <li>
                                <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                <p><a href="mailto:quemleuperdeu@hotmail.com">quemleuperdeu@hotmail.com</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer>
            <div class="copyrightText">
                <p>Copyright © 2021 QueroScripts. All Rights Reserved.</p>
            </div>
        </div>
        @show
    </div>
</body>

</html>
