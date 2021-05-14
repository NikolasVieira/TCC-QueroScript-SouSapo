@extends('layouts.dashboard')

@section('content')
<h1>AQUI VAI SER A PAGINA PARA LER O CAPITULO ESCOLHIDO DA HQ</h1>

@if ($hq)
<p>
    Id do Capitulo: {{ $hq->id }}<br>
    Numero do Capitulo: {{ $hq->chapter_number }}<br>
    Numero de Paginas: {{ $hq->page_number }}</p>
</p>
@endif

@endsection
