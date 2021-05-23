@extends('adminlte::page')

@section('content')
<h1>PREVIEW DA PAGINA</h1>

@if ($page)
<p>
    Id da Pagina: {{ $page->id }}<br>
    Numero do Capitulo: {{ $page->chapter_number }}<br>
    Numero de Pagina: {{ $page->page_number }}</p>
    Caminho da Pagina: {{ $page->path }}</p>
</p>
@endif

@endsection
