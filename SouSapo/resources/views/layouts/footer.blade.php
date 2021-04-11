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
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">

</head>

<body>
    <!-- FOOTER -->

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
                        <li><a href="{{ url('/') }}">Inicio</a></li>
                        <li><a href="{{ url('/hq') }}">Quadrinhos</a></li>
                        <li><a href="{{ url('/sobre') }}">Sobre</a></li>
                        <li><a href="{{ url('/apoio') }}">Apoiar</a></li>
                        <li><a href="{{ url('/forum') }}">Fórum</a></li>
                        <li><a href="{{ url('/comunidade') }}">Comunidade</a></li>
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

</body>

</html>
