@extends('layouts.app')

@section('content')
    @foreach ($tweet as $tweets)@endforeach
    <h3><b>{{ $tweets->titulo }}</b></h3>
    <p>{{ $tweets->content }}</p>
    <p>Tags: {{ $tweets->categoria }}</p>
    <p>Perguntado por: {{ $tweets->user->name }}</p>
    <hr>
    @foreach ($resposta as $respostas)
    <p><b>Usuario:</b> {{ $respostas->user->name }}</p>
    <p><b>Resposta:</b> {{ $respostas->content }}</p>
    <hr>
    @endforeach

    <form method="get" action="{{ url('forum/resposta/{id}') }}">
        @csrf
        @method('post')
        <input type="text" name="tweet_id" id="tweet_id" wire:model="tweet_id" value="{{ $tweets->id }}">
        <input type="text" name="content" id="content" wire:model="content">
        <button type="submit">salvar</button>
    </form>

    @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif
@endsection
