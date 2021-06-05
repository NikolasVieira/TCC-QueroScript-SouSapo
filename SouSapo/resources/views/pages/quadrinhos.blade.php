@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Selecione o capitulo que deseja ler</h2>
    <hr />
    <div class="row row-cols-1 row-cols-md-3">
        @foreach($chapter as $chapters)
        <div class="col-3 p-2">
            <div class="card text-white bg-ra text-center h-100 p-3">
                <img src="{{ asset('img/hq_marvel_capa.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $chapters->chapter_name }}</h5>
                    <p class="card-text">
                        Id do Capitulo: {{ $chapters->id }}<br>
                        Numero do Capitulo: {{ $chapters->chapter_number }}<br>
                        Numero de Paginas: {{ $chapters->pages }}</p>
                    <div class="card-footer">
                        <a href="{{ route('sousapo.ler',$chapters->id)}}" class="btn btn-success btn-sm">ler</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
