@extends('layouts.app')

@section('title', 'SouSapo | Galeria')

@section('content')
    <div class="container py-2">
        <div class="artes">
            <h1 class="my-5">GALERIA</h1>
            @if (count($arte) > 0)
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($arte as $artes)
                        <div class="col">
                            <div class="card h-100" style="background-color: var(--sapo);">
                                <img src="img/artes/{{ $artes->img_path }}" class="card-img-top" alt="..."
                                    height="170px">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $artes->titulo }}</h5>
                                    <a href="{{ route('conta.arte.delete', $artes->id) }}"
                                        class="btn btn-danger btn-sm">Remover</a>
                                    <p class="card-text">{{ $artes->descricao }}</p>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal{{ $artes->id }}">
                                        Abrir imagem
                                    </button>
                                    <!-- modal -->
                                    <div class="modal fade " id="exampleModal{{ $artes->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                        {{ $artes->titulo }} --
                                                        {{ $artes->user->name }}
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="img/artes/{{ $artes->img_path }}" class="card-img-top"
                                                        alt="..." height="300px" width="500px">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="h1 text-white">Você não possui nenhuma arte.</div>
            @endif
        </div>
    </div>

@endsection
