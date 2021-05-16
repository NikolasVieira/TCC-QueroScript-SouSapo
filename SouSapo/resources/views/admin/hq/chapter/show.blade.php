@extends('adminlte::page')

@section('content')
<h1>AQUI VAI SER A PAGINA PARA LER O CAPITULO ESCOLHIDO DA HQ</h1>

@if ($chapter)
<p>
    Id do Capitulo: {{ $chapter->id }}<br>
    Numero do Capitulo: {{ $chapter->chapter_number }}<br>
    Numero de Paginas: {{ $chapter->page_number }}</p>
</p>
@endif

@endsection
