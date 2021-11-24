@extends('layouts.app')

@section('title', 'SouSapo | Resposta')

@section('content')

    <link href="{{ asset('css/forum.css') }}" rel="stylesheet">
    <div id="Banner">
        <h1 class="text-white">Fórum</h1>
    </div>
    <hr>
    <div class="container py-4">

        <div class="card-header bg-razinha">
            <!--A PERGUNTA-->
            <div class="card-body">
                @if ($tweet->user->profile_photo_path)
                    <img style="border-radius:50%; width:35px; height:35px; margin-right:5px;"
                        class="h-8 w-8 rounded-full object-cover" src="/img/users/{{ $tweet->user->profile_photo_path }}"
                        alt="{{ $tweet->user->name }}">
                @else
                    <img style="border-radius:50%; width:35px; height:35px; margin-right:5px;"
                        src="{{ asset('img/personagens/Deus.png') }}" alt="imagem default">
                @endif
                {{ $tweet->titulo }} | Perguntado por: {{ $tweet->user->nick }} | Tags: {{ $tweet->categoria }}
            </div>

            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{ $tweet->content }}</li>
            </ul>

            <!--AS RESPOSTAS-->
            @foreach ($resposta as $r)
                <div class="card-body">
                    @if ($r->user->profile_photo_path)
                        <img style="border-radius:50%; width:35px; height:35px; margin-right:5px;"
                            class="h-8 w-8 rounded-full object-cover"
                            src="/img/users/{{ $r->user->profile_photo_path }}" alt="{{ $r->user->name }}">
                    @else
                        <img style="border-radius:50%; width:35px; height:35px; margin-right:5px;"
                            src="{{ asset('img/personagens/Deus.png') }}" alt="imagem default">
                    @endif
                    Resposta de</b> {{ $r->user->nick }}
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{ $r->content }}</li>
                </ul>


            @endforeach


        </div>
        <br>

        @if (\Session::has('success'))
            <div class="alert alert-success my-2">
                <ul>
                    <li>{!! \Session::get('success') !!}</li>
                </ul>
            </div>
        @endif

        <form method="get" action="{{ route('forum.resposta', $tweet->id) }}">
            @csrf
            @method('post')
            <input type="text" name="tweet_id" id="tweet_id" wire:model="tweet_id" value="{{ $tweet->id }}"
                style="display: none">
            <div class="form-floating py-1">
                <textarea class="form-control" name="content" placeholder="Escreva a resposta aqui" wire:model="content"
                    style="height: 100px"></textarea>
                <label>Responder</label>
            </div>
            @error('content')
                <span class="error">É nescessario escolher uma Categoria!</span>
            @enderror
            <button type="submit" class="btn btn-sapinho text-white">Salvar</button>
            <a class="btn btn-sapinho m-4 text-white" href="{{ route('sousapo.forum') }}">Voltar</a>
        </form>
    </div>
@endsection
