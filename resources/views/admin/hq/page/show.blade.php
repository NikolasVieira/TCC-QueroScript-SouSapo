@extends('adminlte::page')

@section('content')
<h1>PREVIEW DA PAGINA</h1>
<hr>
<a href="{{ route('pages.index') }}" class="btn btn-secondary mb-3">Voltar</a>

@if ($page)
<p>Id da Pagina: {{ $page->id }}</p>
<p>Numero do Capitulo: {{ $page->chapter_number }}</p>
<p>Numero de Pagina: {{ $page->page_number }}</p>
<p>Caminho da Pagina: {{ $page->path }}</p>
<p>Imagem da Pagina:</p>
<img src="{{ asset('storage') }}/{{ $page->path }}" alt="img">
@endif

<h1>CAPITULO PERTENCENTE</h1>
@if ($chapter)
<p>
    Id do Capitulo: {{ $chapter->id }}<br>
    Numero do Capitulo: {{ $chapter->chapter_number }}<br>
    Numero de Paginas: {{ $chapter->pages }}</p>
</p>
@endif

@endsection
