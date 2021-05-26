@extends('adminlte::page')

@section('content')
<h1>PREVIEW DA PAGINA</h1>

@if ($page)
<p>Id da Pagina: {{ $page->id }}</p>
<p>Numero do Capitulo: {{ $page->chapter_number }}</p>
<p>Numero de Pagina: {{ $page->page_number }}</p>
<p>Caminho da Pagina: {{ $page->path }}</p>
<p>Imagem da Pagina:</p>
<img src="{{ asset('storage') }}/{{ $page->path }}" alt="img">
@endif

@endsection
