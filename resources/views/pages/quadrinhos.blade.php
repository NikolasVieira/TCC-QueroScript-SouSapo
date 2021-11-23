@extends('layouts.app')

@section('title', 'SouSapo | Quadrinhos')

@section('content')
    <div class="container py-3" style="height: 30rem">
        <br />
        <h2 class="text-white">Selecione o capitulo que deseja ler</h2>
        <hr />
        <div class="row row-cols-1 row-cols-md-3">
            @foreach ($chapter as $chapters)
                <div class="col-3">
                    <div class="card bg-razinha text-center h-100 p-3">
                        <img class="card-img-top" src="{{ asset('storage') }}/{{ $chapters->path }}" alt="capa"
                            id="cover">
                        <div class="card-body">
                            <h5 class="card-title">{{ $chapters->chapter_name }}</h5>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-sapinho text-white w-100"
                                href="{{ route('sousapo.ler', $chapters->chapter_number) }}">Ler</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <br />
    </div>
@endsection
