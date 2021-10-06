<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SouSapo') }}</title>

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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    @livewireStyles
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

                        <li id="navbotao" class="nav-item active ml-2">
                            <a class="btn btn-sapinho" href="{{ route('forum.index') }}" role="button">Fórum</a>
                        </li>

                        <li id="navbotao" class="nav-item active ml-2">
                            <a class="btn btn-sapinho" href="{{ route('sousapo.comunidade') }}"
                                role="button">Comunidade</a>
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
                                    src="{{ asset('img/deus.png') }}" alt="imagem default">
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
                                    src="{{ asset('img/deus.png') }}" alt="imagem default">
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

        <!-- FOOTER -->
        @section('footer_padrao')
        <div id="footer">
            <footer>
                <div class="container">
                    <div class="sec sobrenos">
                        <h2>Sobre Nós</h2>
                        <p>Os Fundadores de SouSapo são Maria Fernanda, Nikolas Raposo, Victor Guzella, Kayky Martins,
                            Kaelaine Pereira e Micaeli Almeida. Para fazer o TCC nós nos juntamos para criar o SouSapo,
                            cada um com seu trabalho a desempenhar, nenhum menos importante do que o outro, todos
                            necessários.</p>
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
                            <li><a href="{{ route('sousapo.quadrinhos') }}">Quadrinhos</a></li>
                            <li><a href="{{ route('sousapo.sobre') }}">Sobre</a></li>
                            <li><a href="{{ route('sousapo.apoio') }}">Apoiar</a></li>
                            <li><a href="{{ url('/forum') }}">Fórum</a></li>
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
                                    <a href="tel:12345678900">+1 (23)4567-8900</a>
                                </p>
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

    @livewireScripts
</body>

</html>
