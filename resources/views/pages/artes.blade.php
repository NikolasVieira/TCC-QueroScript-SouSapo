@extends('layouts.app')
@section('content')
    <div>

        <div class="container">
            <h1>Artes da Comunidade</h1>
            <div class="d-flex">
                
                @if (isset($filtro))
                    <form class="d-flex" method="GET" action="{{ route('artes.index') }}">

                        <input style="display: none" class="form-control me-2" type="search" placeholder="filtro"
                            aria-label="filtro" id="filtro" name="filtro" value="">
                        <button class="btn btn-success me-2" type="submit">Limpar busca</button>
                    </form>

                @endif

                <form class="d-flex" method="GET" action="{{ route('artes.index') }}">

                    <input class="form-control me-2" type="search" placeholder="Pesquisar.." aria-label="filtro" id="filtro"
                        name="filtro">
                    <button class="btn btn-success" type="submit">Procurar</button>
                </form>
            </div>
            <div>
                <button aling="right">Filtro</button>
                <button aling="center">Artes Originais</button>

            </div>

            <hr>

            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($arte as $artes)

                    <div class="col">
                        <div class="card h-100" style="background-color: var(--sapo);">
                            <img src="img/artes/{{ $artes->img_path }}" class="card-img-top" alt="..." height="170px">
                            <div class="card-body">
                                <h5 class="card-title">{{ $artes->titulo }}</h5>
                                <p class="card-text">{{ $artes->descricao }}</p>
                            </div>
                        </div>
                    </div>


                @endforeach

                <div class="col">
                    <div class="card h-100" style="background-color: var(--sapo);">
                        <img src="https://cdn.discordapp.com/attachments/741335125480177756/847716342660333568/unknown.png"
                            class="card-img-top" alt="..." height="170px">
                        <div class="card-body">
                            <h5 class="card-title">Deus (Klaus)</h5>
                            <p class="card-text">A cópia de Nanthjan, cujo se sentiu solitário.</p>
                        </div>
                    </div>
                </div>

            </div>


            <hr>


            <div class="col p-5 bg-razinha" id="Criar_Topico">
                <h1>Adicionar Arte</h1>
                <form method="POST" action="{{ route('artes.store') }}" enctype="multipart/form-data">
                     @csrf
                    <div class="row">
                        <input class="col m-1" type="text" name="titulo" id="titulo" placeholder="titulo">
                        @error('titulo') <span class="error">É nescessario titulo!</span> @enderror
                        <input class="col m-1" type="text" name="descricao" id="descricao" placeholder="descricao">
                        @error('descricao') <span class="error">É nescessario preencher o conteudo!</span>
                        @enderror
                        <input type="file" name="image" id="image">
                        @error('image')
                            {{ $message }}
                        @enderror
                    </div>
                    <button class="btn btn-ra" style="width: 10rem" type="submit">Salvar</button>
                </form>
            </div>
        </div>
        <hr>




    </div>


@endsection
