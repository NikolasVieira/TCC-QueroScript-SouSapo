@extends('layouts.app')

@section('content')
<div class="container">
    <h2>AQUI VAI SER A PAGINA PARA VER E SELECIONAR OS CAPITULOS DA HQ</h2>
    <hr />
    <a href="{{ route('hq.create') }}" class="btn btn-success">Novo Capitulo</a>
    <br><br>
    <div class="row">
        @foreach($hq as $hqs)
        <div class="card col" style="width: 18rem;">
            <img src="img/hq_marvel_capa" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $hqs->hq_name }}</h5>
                <p class="card-text">Id do Capitulo:{{ $hqs->id }}<br>Numero do
                    Capitulo:{{ $hqs->chapter_number }}<br>Numero de Paginas:{{ $hqs->page_number }}</p>
                <a href="{{ route('hq.edit',$hqs->id)}}" class="btn btn-primary">Editar</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
