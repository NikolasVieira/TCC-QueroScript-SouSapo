@extends('layouts.app')
@section('content')

<link href="{{ asset('css/index.css') }}" rel="stylesheet">

<div class="text-center">
    <figure>
        <video autoplay loop muted>
            <source src="video/teste.mp4" type="video/mp4">
        </video>
    </figure>
</div>

<div id="novidades" class="container-fluid bg-sapao">
    <div id="header">
        <span id="head">Capitulos Recentes</p>
    </div>
</div>
@endsection
