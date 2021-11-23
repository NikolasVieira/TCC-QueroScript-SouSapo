@extends('layouts.app')

@section('title', 'SouSapo | Minha Conta')

@section('content')
    <div class="container py-2">
        @if (session('success'))
            <div class="alert alert-success" id="message">{{ session('success') }}</div>
        @endif
        @if (session('delete'))
            <div class="alert alert-error" id="message">{{ session('delete') }}</div>
        @endif
        @if (session('error'))
            <div class="alert alert-error" id="message">{{ session('error') }}</div>
        @endif
        <div class="infos card-body bg-razinha">
            @if (isset(Auth::user()->profile_photo_path))
                <img class="h-8 w-8 rounded-full object-cover" style="width: 100px; height: 100px;"
                    src="/img/users/{{ Auth::user()->profile_photo_path }}" alt="{{ Auth::user()->name }}">
            @else
                <img style=" border-radius:50%; width:35px; height:35px; margin-right:5px;"
                    src="{{ asset('img/personagens/Deus.png') }}" alt="imagem padrão">
            @endif
            <h1>Nome: {{ Auth::user()->name }}</h1>
            @if (isset(Auth::user()->nick))
                <h1>Nick: {{ Auth::user()->nick }}</h1>
            @endif
            @if (isset(Auth::user()->bio))
                <h1>Biografia: {{ Auth::user()->bio }}</h1>
            @endif
        </div>

        <div class="card-header bg-razinha h2">{{ __('Editar informações') }}</div>
        <div class="card-body bg-razinha editar">
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
                <div class="row row-cols-1 row-cols-md-6 g-4">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
                            value="1.jpeg">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <img style="width: 80px; height:80px;" src="img/users/1.jpeg" alt="imagem 1">
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="profile_img" id="profile_img" checked
                            value="2.jpeg">
                        <label class="form-check-label" for="profile_img">
                            <img style="width: 80px; height:80px;" src="img/users/2.jpeg" alt="imagem 2">
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="profile_img" id="profile_img" checked
                            value="3.jpeg">
                        <label class="form-check-label" for="profile_img">
                            <img style="width: 80px; height:80px;" src="img/users/3.jpeg" alt="imagem 3">
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="profile_img" id="profile_img" checked
                            value="4.jpeg">
                        <label class="form-check-label" for="profile_img">
                            <img style="width: 80px; height:80px;" src="img/users/4.jpeg" alt="imagem 4">
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="profile_img" id="profile_img" checked
                            value="5.jpeg">
                        <label class="form-check-label" for="profile_img">
                            <img style="width: 80px; height:80px;" src="img/users/5.jpeg" alt="imagem 5">
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="profile_img" id="profile_img" checked
                            value="6.jpeg">
                        <label class="form-check-label" for="profile_img">
                            <img style="width: 80px; height:80px;" src="img/users/6.jpeg" alt="imagem 6">
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="profile_img" id="profile_img" checked
                            value="7.jpeg">
                        <label class="form-check-label" for="profile_img">
                            <img style="width: 80px; height:80px;" src="img/users/7.jpeg" alt="imagem 7">
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="profile_img" id="profile_img" checked
                            value="8.jpeg">
                        <label class="form-check-label" for="profile_img">
                            <img style="width: 80px; height:80px;" src="img/users/8.jpeg" alt="imagem 8">
                        </label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <br />

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
                <div class="h1 text-white">Você não possui nenhuma arte.</div>
            @endif
        </div>
        <br />
    </div>

@endsection
