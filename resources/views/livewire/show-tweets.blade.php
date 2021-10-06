<div>
    <div class="py-5 pl-5 bg-white">
        <h1>Fórum</h1>
    </div>
    <div class="row">
        <div class="col p-5 bg-sapinho" id="Filtro">
            <h1>Filtro</h1>
            <select wire:model="filtroCat" class="form-select" aria-label="Default select example" name="filtroCat"
                id="filtroCat">
                <option selected value="">Todos os Tipos</option>
                @foreach ($categoria as $categorias)
                <option value="{{ $categorias->titulo }}"> {{ $categorias->titulo }}</option>
                @endforeach
            </select>
            <!--
            <input type="text" name="search" id="search" placeholder="Procure por titulo.." wire:model="search">
            -->
        </div>
        <div class="col p-5 bg-razinha" id="Criar_Topico">
            <h1>Criar Tópico</h1>
            <form method="POST" wire:submit.prevent="create">
                <div class="row">
                    <input class="col m-1" type="text" name="titulo" id="titulo" placeholder="titulo"
                        wire:model="titulo">
                    @error('titulo') <span class="error">É nescessario titulo!</span> @enderror
                    <input class="col m-1" type="text" name="content" id="content" placeholder="conteudo"
                        wire:model="content">
                    @error('content') <span class="error">É nescessario preencher o conteudo!</span> @enderror
                    <select wire:model="categoria_ti" class="col m-1 form-select" aria-label="Default select example"
                        name="categoria" id="categoria">
                        <option selected>Selecione a Categoria</option>
                        @foreach ($categoria as $categorias)
                        <option value="{{ $categorias->titulo }}"> {{ $categorias->titulo }}</option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-ra" style="width: 10rem" type="submit">Salvar</button>
            </form>
        </div>
    </div>
    <hr>
    @foreach ($tweets as $tweet)
    <div class="m-4 card" style="width: 25rem">
        <div class="row card-header">
            <div class="col" id="foto">
                @if ($tweet->user->profile_photo_path))
                <img style="border-radius:50%; width:35px; height:35px; margin-right:5px;"
                    class="h-8 w-8 rounded-full object-cover" src="/img/users/{{ Auth::user()->profile_photo_path }}"
                    alt="{{ $tweet->user->name }}">
                @else
                <img style="border-radius:50%; width:35px; height:35px; margin-right:5px;"
                    src="{{ asset('img/deus.png') }}" alt="imagem default">
                @endif
            </div>
            <p class="col">{{ $tweet->user->name }}</p>
            <p class="col"><i class="bi bi-stars">{{ $tweet->likes->count() }}</i></p>
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $tweet->titulo }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $tweet->categoria }}</h6>
            <p class="card-text">{{ $tweet->content }}</p>

        </div>
        <div class="card-footer">
            <div class="row">
                <a class="col my-3 mr-1 btn btn-primary btn-sm" href="#" class="card-link"
                    wire:click.prevent="like({{ $tweet->id }})"><i class="bi bi-hand-thumbs-up">Curtir</i></a>
                <a class="col my-3 mr-1 btn btn-primary btn-sm" href="#" wire:click.prevent="unlike({{ $tweet->id }})"
                    class="card-link"><i class="bi bi-hand-thumbs-down">Descurtir</i></a>
                <a class="col my-3 mr-1 btn btn-success" href="{{ route('forum.show',$tweet->id) }}">Responder</a>
            </div>
        </div>
    </div>
    @endforeach
    {{ $tweets->links() }}
</div>
