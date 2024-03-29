<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Fontes -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/conta.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    @livewireStyles
</head>

<body>
    <div id="app">
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top" style="background-color: var(--ra);">
            <div class="container-fluid">

                <!-- Logo e Titulo da NavBar -->
                <a id="logo" class="navbar-brand text-white" href="{{ route('sousapo.index') }}">
                    <img src="img/ico/logo.png" width="30" height="30" class="d-inline-block align-top">
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
                            <a class="btn btn-sapinho text-white" href="{{ route('sousapo.quadrinhos') }}"
                                role="button">Quadrinhos</a>
                        </li>

                        <li id="navbotao" class="nav-item active ml-2">
                            <a class="btn btn-sapinho text-white" href="{{ route('sousapo.sobre') }}"
                                role="button">Sobre</a>
                        </li>

                        <li id="navbotao" class="nav-item dropdown active ml-2">
                            <a id="navbarDropdown" class="btn btn-sapinho dropdown-toggle text-white" href="#"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                v-pre>Comunidade</a>

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
                                    <a class="btn btn-sapinho text-white"
                                        href="{{ route('login') }}">{{ __('Entrar') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li id="navbotao" class="nav-item mr-2">
                                    <a class="btn btn-sapinho text-white"
                                        href="{{ route('register') }}">{{ __('Registrar') }}</a>
                                </li>
                            @endif

                        @else
                            <li class="nav-item dropdown">
                                @if (isset(Auth::user()->nick))
                                    <a id="navbarDropdown" class="btn btn-sapinho dropdown-toggle text-white" href="#"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        v-pre>

                                        @if (isset(Auth::user()->profile_photo_path))
                                            <img style=" border-radius:50%; width:35px; height:35px; margin-right:5px;"
                                                class="h-8 w-8 rounded-full object-cover"
                                                src="/img/users/{{ Auth::user()->profile_photo_path }}"
                                                alt="{{ Auth::user()->name }}">
                                        @else
                                            <img style=" border-radius:50%; width:35px; height:35px; margin-right:5px;"
                                                src="{{ asset('img/personagens/Deus.png') }}" alt="imagem padrão">
                                        @endif
                                        {{ Auth::user()->nick }}
                                    </a>
                                @else
                                    <a id="navbarDropdown" class="btn btn-sapinho dropdown-toggle text-white" href="#"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        v-pre>
                                        @if (isset(Auth::user()->profile_photo_path))
                                            <img style=" border-radius:50%; width:35px; height:35px; margin-right:5px;"
                                                class="h-8 w-8 rounded-full object-cover"
                                                src="/img/users/{{ Auth::user()->profile_photo_path }}"
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
                                    @if (Auth::user()->is_admin)
                                        <a class="dropdown-item" href="{{ route('admin.index') }}">
                                            {{ __('Dashboard') }}
                                        </a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Sair') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
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
            <footer>
                <div class="container">
                    <div class="sec sobrenos">
                        <h2>Sobre Nós</h2>
                        <p>Os Fundadores de SouSapo são Maria Fernanda, Nikolas Raposo, Victor Guzella, Kayky Martins,
                            Kaelaine Pereira e Micaeli Almeida. Para fazer o TCC nós nos juntamos para criar o SouSapo,
                            cada um com seu trabalho a desempenhar, nenhum menos importante do que o outro, todos
                            necessários.</p>
                        <ul class="sci">
                            <li><a class="facebook" href="#"><i class="fa fa-facebook-official"
                                        aria-hidden="true"></i>
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
                            <li><a href="{{ route('sousapo.quadrinhos') }}">Quadrinhos</a></li>
                            <li><a href="{{ route('sousapo.sobre') }}">Sobre</a></li>
                            <li><a href="{{ route('sousapo.artes.index') }}">Artes</a></li>
                            <li><a href="{{ route('sousapo.forum') }}">Fórum</a></li>
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
                                    <a href="tel:12345678900">+1 (23)4567-8900</a>
                                </p>
                            </li>
                            <li>
                                <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                <p><a href="mailto:quemleuperdeu@hotmail.com">quemleuperdeu@hotmail.com</a></p>
                            </li>
                            <li>
                                <form action="https://www.paypal.com/donate" method="post" target="_top">
                                    <input type="hidden" name="hosted_button_id" value="ZV6B24GHCHMTQ" />
                                    <input type="image"
                                        src="https://www.paypalobjects.com/pt_BR/BR/i/btn/btn_donateCC_LG.gif" border="0"
                                        name="submit" title="PayPal - The safer, easier way to pay online!"
                                        alt="Faça doações com o botão do PayPal" />
                                    <img alt="" border="0" src="https://www.paypal.com/pt_BR/i/scr/pixel.gif" width="1"
                                        height="1" />
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer>
            <div class="copyrightText">
                <p>Copyright © 2021 QueroScripts. All Rights Reserved.</p>
            </div>
        @show
    </div>
    @livewireScripts
</body>

</html>
