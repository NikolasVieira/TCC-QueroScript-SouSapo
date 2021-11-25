@section('title', 'SouSapo | Fórum')

<div id="Forum">
    <link href="{{ asset('css/forum.css') }}" rel="stylesheet">
    <div id="Banner">
        <h1 class="text-white">Fórum</h1>
    </div>
    <hr>

    <div class="row">

        <div class="col p-5" id="Filtro">
            <div id="Criar Topico" class="col bg-razinha">
                <div class="card-header h2">{{ __('Criar Tópico')}}</div>
                <form method="POST" wire:submit.prevent="create">
                    <div id="campos" class="row">
                        <input type="text" class="form-control" placeholder="Titulo" wire:model="titulo">
                        @error('titulo')
                            <span class="error">É nescessario Titulo!</span>
                        @enderror

                        <textarea type="text" class="form-control" placeholder="Conteudo" wire:model="content"
                            rows="3"></textarea>
                        @error('content')
                            <span class="error">É nescessario ter um Conteudo!</span>
                        @enderror

                        <select class="form-select" wire:model="categoria_ti">
                            <option selected>Selecione a Categoria</option>
                            @foreach ($categoria as $categorias)
                                <option value="{{ $categorias->titulo }}"> {{ $categorias->titulo }}</option>
                            @endforeach
                        </select>
                        @error('categoria_ti')
                            <span class="error">É nescessario escolher uma Categoria!</span>
                        @enderror
                    </div>
                    <button class="btn btn-ra" type="submit">Publicar</button>
                </form>
            </div>

            <div id="Filtro" class="col bg-razinha card-body">
                <div class="h2">{{ __('Filtro de Pesquisa')}}</div>
                <div id="Filtros" class="row">
                    <select wire:model="filtroCat" class="col-5 form-select" aria-label="Default select example">
                        <option selected value="">Todos os Tópicos</option>
                        @foreach ($categoria as $categorias)
                            <option value="{{ $categorias->titulo }}">{{ $categorias->titulo }}</option>
                        @endforeach
                    </select>
                    <input class="col-5 form-control" type="text" placeholder="Procure por titulo" wire:model="search">
                </div>
            </div>

            <br/>

            <div class="card bg-sapinho">
                <hr>
                <div class="card-header h2 text-white">{{ __('Tópicos')}}</div>
            </div>
            <div id="Topico">
                @foreach ($tweets as $tweet)
                    <div class="mx-5 accordion" id="topico-{{ $tweet->id }}">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="cabeçalho-{{ $tweet->id }}">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse{{ $tweet->id }}" aria-expanded="true"
                                    aria-controls="collapse{{ $tweet->id }}">
                                    <i id="likes" class="bi bi-stars">{{ $tweet->likes->count() }}</i>
                                    @if ($tweet->user->profile_photo_path)
                                        <img id="perfil" src="/img/users/{{ $tweet->user->profile_photo_path }}"
                                            alt="{{ $tweet->user->name }}">
                                    @else
                                        <img id="perfil" src="img/personagens/Deus.png" alt="Imagem padrão">
                                    @endif
                                    <div id="titulo">
                                        {{ $tweet->titulo }} <br>
                                        {{ $tweet->user->name }}
                                    </div>
                                </button>
                            </h2>

                            <div id="collapse{{ $tweet->id }}" class="accordion-collapse collapse"
                                aria-labelledby="cabeçalho-{{ $tweet->id }}"
                                data-bs-parent="#topico-{{ $tweet->id }}">
                                <div class="accordion-body">
                                    <p class="card-text">{{ $tweet->content }}</p>
                                    <h6 class="card-subtitle text-muted">{{ $tweet->categoria }}</h6>
                                    <div id="botoes">
                                        <a class="btn btn-primary" class="card-link"
                                            wire:click.prevent="like({{ $tweet->id }})">
                                            <i class="bi bi-hand-thumbs-up">Curtir</i>
                                        </a>
                                        <a class="btn btn-primary" class="card-link"
                                            wire:click.prevent="unlike({{ $tweet->id }})">
                                            <i class="bi bi-hand-thumbs-down">Descurtir</i>
                                        </a>
                                        <a class="btn btn-success"
                                            href="{{ route('forum.show', $tweet->id) }}">Comentar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div id="Paginação">
                {{ $tweets->links() }}
            </div>
        </div>
    </div>
</div>
