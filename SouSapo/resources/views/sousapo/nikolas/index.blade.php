@extends('layouts.app')

@section('content')

<div>
    <video autoplay loop muted>
        <source src="{{ asset('css/loop.mp4') }}" type="video/mp4" />
    </video>
</div>

@endsection
