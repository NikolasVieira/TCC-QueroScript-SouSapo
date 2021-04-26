@extends('layouts.app')

@section('content')
<div class="container">
    <h2>AQUI VAI SER A PAGINA PARA VER E SELECIONAR OS CAPITULOS DA HQ</h2>
    <hr />
    <a href="{{ route('hq.create') }}" class="btn btn-success">Novo Capitulo</a>
    <br><br>
    <div class="row row-cols-1 row-cols-md-3">
        @foreach($hq as $hqs)
        <div class="col-3 p-2">
            <div class="card text-white bg-dark text-center h-100 p-3">
                <img src="{{ asset('img/hq_marvel_capa.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $hqs->hq_name }}</h5>
                    <p class="card-text">
                        Id do Capitulo: {{ $hqs->id }}<br>
                        Numero do Capitulo: {{ $hqs->chapter_number }}<br>
                        Numero de Paginas: {{ $hqs->page_number }}</p>
                    <div class="card-footer">
                        <a href="{{ route('hq.edit',$hqs->id)}}" class="btn btn-primary">Editar</a>
                        <a href="{{ route('hq.show',$hqs->id)}}" class="btn btn-success">ler</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
