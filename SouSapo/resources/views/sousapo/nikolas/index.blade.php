@extends('layouts.app')
@section('content')

<link href="{{ asset('css/video.css') }}" rel="stylesheet">

<div class="text-center">
    <figure>
        <video autoplay loop muted>
            <source src="video/loop.mp4" type="video/mp4">
        </video>
    </figure>
</div>

@endsection
