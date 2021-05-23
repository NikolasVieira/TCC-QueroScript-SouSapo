@extends('adminlte::page')

@section('content')
<h2>PREVIEW DO CAPITULO</h2>
<hr />
<a href="{{ route('chapter.index') }}" class="btn btn-secondary mb-3">Voltar</a>
@if ($chapter)
<p>
    Id do Capitulo: {{ $chapter->id }}<br>
    Numero do Capitulo: {{ $chapter->chapter_number }}<br>
    Numero de Paginas: {{ $chapter->page_number }}</p>
</p>
@endif

@endsection
