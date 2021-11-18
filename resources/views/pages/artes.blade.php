@extends('layouts.app')

@section('title', 'SouSapo | Artes')

@section('content')
    <div>
        <div class="container">
            <br>
            <h1>Artes da Comunidade</h1>

            <div class="row">
                <div class="col">
                    <div class="d-flex">
                        @if (isset($filtro))
                            <form class="d-flex" method="GET" action="{{ route('sousapo.artes.index') }}">
                                <input style="display: none" class="form-control me-2" type="search" placeholder="filtro"
                                    aria-label="filtro" id="filtro" name="filtro" value="">
                                <button class="btn btn-ra me-2" type="submit">Limpar busca</button>
                            </form>
                        @endif
                        <form class="d-flex" method="GET" action="{{ route('sousapo.artes.index') }}">
                            <input class="form-control me-2" type="search" placeholder="Pesquisar.." aria-label="filtro"
                                id="filtro" name="filtro">
                            <button class="btn btn-ra" type="submit">Procurar</button>
                        </form>
                    </div>
                </div>
                <div class="col-2">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-ra" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Adicionar Arte
                    </button>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content p-4">
                        <form method="POST" action="{{ route('sousapo.artes.store') }}" enctype="multipart/form-data">
                            <div class="modal-header">
                                <h5 class="modal-title">Adicionar Arte</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                @csrf
                                <div class="row">
                                    <input class="col form-control mr-1" type="text" name="titulo" id="titulo"
                                        placeholder="Titulo">
                                    @error('titulo')
                                        <span class="error">É nescessario titulo!</span>
                                    @enderror

                                    <input class="col form-control ml-1 " type="text" name="descricao" id="descricao"
                                        placeholder="Descricao">
                                    @error('descricao')
                                        <span class="error">É nescessario preencher o conteudo!</span>
                                    @enderror

                                    <input class="form-control mt-2" type="file" id="image" name="image">
                                    @error('image')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-ra" style="width: 10rem" type="submit">Salvar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Artes -->
            <hr>
            @if (count($arte) > 0)
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($arte as $artes)
                        <div class="col">
                            <div class="card h-100" style="background-color: var(--sapo);">
                                <img src="img/artes/{{ $artes->img_path }}" class="card-img-top" alt="..."
                                    height="170px">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $artes->titulo }}</h5>
                                    <p class="card-text">{{ $artes->descricao }}</p>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal{{ $artes->id }}">
                                        Abrir imagem
                                    </button>
                                    <!-- modal -->
                                    <div class="modal fade " id="exampleModal{{ $artes->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">{{ $artes->titulo }}
                                                        --
                                                        {{ $artes->user->name }}
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="img/artes/{{ $artes->img_path }}" class="card-img-top"
                                                        alt="..." height="300px" width="500px">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="container">
                    <h1>não tem arte</h1>
                </div>
            @endif
            <br>
        </div>
    </div>
@endsection
