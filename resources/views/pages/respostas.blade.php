@extends('layouts.app')

@section('content')

    <link href="{{ asset('css/forum.css') }}" rel="stylesheet">
    <div id="Banner">
        <h1 class="text-white">Fórum</h1>
    </div>
    <a class="btn btn-ra m-4" href="{{ route('sousapo.forum') }}">Voltar</a>
    <div class="container py-4">
        @foreach ($tweet as $tweets)@endforeach
        <div class="card">
            <div class="card-header">
                {{ $tweets->titulo }} | Perguntado por: {{ $tweets->user->name }} | Tags: {{ $tweets->categoria }}
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{ $tweets->content }}</li>
            </ul>
            @foreach ($resposta as $respostas)
            <div class="card-header">
                Resposta de</b> {{ $respostas->user->name }}
            </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{ $respostas->content }}</li>
                </ul>
            @endforeach
        </div>

        @if (\Session::has('success'))
            <div class="alert alert-success my-2">
                <ul>
                    <li>{!! \Session::get('success') !!}</li>
                </ul>
            </div>
        @endif

        <form method="get" action="{{ url('forum/resposta/{id}') }}">
            @csrf
            @method('post')
            <input type="text" name="tweet_id" id="tweet_id" wire:model="tweet_id" value="{{ $tweets->id }}" style="display: none">
            <div class="form-floating py-1">
                <textarea class="form-control" name="content" placeholder="Escreva a resposta aqui" id="floatingTextarea2" wire:model="content" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Responder</label>
            </div>
            <button type="submit" class="btn btn-ra">salvar</button>
        </form>
    </div>
@endsection
