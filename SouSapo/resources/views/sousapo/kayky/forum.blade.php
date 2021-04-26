@extends('layouts.app')


@section('content')

    <section class="Forum">
        <link rel="stylesheet" href="/css/forum.css">

        <div class="titulo-forum">
            <h1>FÓRUM</h1>
        </div>

        <div class="container-forum">
            <div class="infos">

                <div class="topicos">
                    <div id="selecionar">
                        <div></div>
                        <p>Todos os Topicos</p>
                    </div>
                    <h1>SELEÇÃO <br> DE <br> TOPICOS</h1>
                </div>
                <div class="coments">
                    <div class="opcoes">
                        <div class="filtros">
                            <div class="selects">selecao de filtros<i class="fa fa-angle-down" aria-hidden="true"></i></div>
                            <div class="selects">selecao de filtros<i class="fa fa-angle-down" aria-hidden="true"></i></div>
                            <div class="selects">selecao de filtros<i class="fa fa-angle-down" aria-hidden="true"></i></div>
                        </div>
                        <div class="button">novo topico</div>
                    </div>
                    <div class="textos"></div>
                    <div class="textos"></div>
                    <div class="textos"></div>
                    <div class="textos"></div>
                    <div class="textos"></div>

                </div>
            </div>

    </section>


@endsection
