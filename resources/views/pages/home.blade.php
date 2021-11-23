@extends('layouts.app')

@section('title', 'SouSapo | Inicio')

@section('content')

    <link href="{{ asset('css/index.css') }}" rel="stylesheet">

    <div class="text-center">
        <figure>
            <video autoplay loop muted>
                <source src="video/teste.mp4" type="video/mp4">
            </video>
        </figure>
    </div>

    <!--CAPITULOS MAIS RECENTES-->
    <div id="novidades" class="container-fluid bg-sapao">
        <div id="header">
            <span id="head" class="text-white">Capitulos Recentes</span>
            <div class="row row-cols-1 row-cols-md-3">
                @foreach ($chapter as $chapters)
                    <div class="col-3 p-2">
                        <div class="card bg-razinha text-center h-100 p-3">
                            <img class="card-img-top" src="{{ asset('storage') }}/{{ $chapters->path }}" alt="capa"
                                id="cover">
                            <div class="card-body">
                                <h5 class="card-title">{{ $chapters->chapter_name }}</h5>
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-sapinho text-white w-100" href="{{ route('sousapo.ler',$chapters->chapter_number)}}">Ler</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!--DISCUSSÕES MAIS RECENTES-->
    <div id="novidades" class="container-fluid bg-sapao">
        <div id="header">
            <span id="head" class="text-white">Discussões Recentes</p>
        </div>
        <div class="px-5 m-4 row row-cols-1 row-cols-md-3">
            @foreach ($tweets as $tweet)
                <div class="col-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col" id="foto">
                                    @if ($tweet->user->profile_photo_path)
                                        <img style="border-radius:50%; width:35px; height:35px; margin-right:5px;"
                                            class="h-8 w-8 rounded-full object-cover"
                                            src="/img/users/{{ $tweet->user->profile_photo_path }}"
                                            alt="{{ $tweet->user->name }}">
                                    @else
                                        <img style="border-radius:50%; width:35px; height:35px; margin-right:5px;"
                                            src="{{ asset('img/personagens/Deus.png') }}" alt="imagem default">
                                    @endif
                                    <p class="col">{{ $tweet->user->name }}</p>
                                </div>

                                <p class="col"><i class="bi bi-stars">{{ $tweet->likes->count() }}</i></p>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $tweet->titulo }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $tweet->categoria }}</h6>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <a class="col my-3 mr-1 btn btn-success" href="{{ route('sousapo.forum') }}">Ver no
                                    Fórum</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
