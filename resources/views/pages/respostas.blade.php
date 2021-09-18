@extends('layouts.app')

@section('content')
    @foreach ($tweet as $tweets)@endforeach
    <h2>{{ $tweets->user->name }}</h2>
    <h3>{{ $tweets->titulo }}</h3>
    <p>{{ $tweets->content }}</p>
    <p>{{ $tweets->categoria }}</p>
<hr>
    @foreach ($resposta as $respostas)
    <h2>{{ $respostas->user->name }}</h2>
    <h2>{{ $respostas->content }}</h2>
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
