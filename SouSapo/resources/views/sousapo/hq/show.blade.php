@extends('layouts.app')

@section('content')
<h1>AQUI VAI SER A PAGINA PARA LER O CAPITULO ESCOLHIDO DA HQ</h1>

@foreach($hq as $hqs)
<p>
Id do Capitulo: {{ $hqs->id }}<br>
Numero do Capitulo: {{ $hqs->chapter_number }}<br>
Numero de Paginas: {{ $hqs->page_number }}</p>
</p>
@endforeach

@endsection
