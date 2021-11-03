@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success" id="message">{{ session('success') }}</div>
        @endif
        @if (session('delete'))
            <div class="alert alert-error" id="message">{{ session('delete') }}</div>
        @endif
        @if (session('error'))
            <div class="alert alert-error" id="message">{{ session('error') }}</div>
        @endif
        <div class="infos">
            <img class="h-8 w-8 rounded-full object-cover" style="width: 100px; height: 100px;"
                src="/img/users/{{ Auth::user()->profile_photo_path }}" alt="{{ Auth::user()->name }}">
            <h1>nome: {{ Auth::user()->name }}</h1>
            <h1>nick: {{ Auth::user()->nick }}</h1>
            <h1>bio: {{ Auth::user()->bio }}</h1>
        </div>

        <div class="editar">
            <form method="post" action="{{ route('conta.update') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="name" aria-describedby="name" name="name"
                        value="{{ Auth::User()->name }}">
                </div>
                <div class="mb-3">
                    <label for="nick" class="form-label">Nick</label>
                    @if (isset(Auth::User()->nick))
                        <input type="text" class="form-control" id="nick" aria-describedby="nick" name="nick"
                            value="{{ Auth::User()->nick }}">
                    @else
                        <input type="text" class="form-control" id="nick" aria-describedby="nick" name="nick"
                            placeholder="Escreva o seu nick">
                    @endif
                </div>
                <div class="mb-3">
                    <div class="mb-3">
                        <label for="bio" class="form-label">Bio</label>

                        @if (isset(Auth::User()->bio))
                            <input type="text" class="form-control" id="bio" name="bio" aria-describedby="bio"
                                value="{{ Auth::User()->bio }}">
                        @else
                            <input type="text" class="form-control" id="bio" aria-describedby="bio" name="bio"
                                placeholder="Escreva uma frase">
                        @endif

                    </div>
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ Auth::User()->email }}">
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Escolher foto de perfil</label>
                    <input class="form-control" type="file" name="image" id="image">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <div class="artes">
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
                <h1>voce nao tem artes !!</h1>
            @endif

        </div>
    </div>


@endsection
