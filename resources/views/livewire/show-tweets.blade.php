<div>
    <h1 style="color: black;">teste</h1>
    <p>{{ $titulo }}</p>
    <p>{{ $content }}</p>
    <p>{{ $search }}</p>
    <div class="pesquisa">

        <h1> PARTE DE PESQUISA</h1>
        <select wire:model="filtroCat" class="form-select" aria-label="Default select example" name="filtroCat"
            id="filtroCat">

            <option selected value=""> todos os tipos</option>

            @foreach ($categoria as $categorias)

                <option value="{{ $categorias->titulo }}"> {{ $categorias->titulo }}</option>

            @endforeach

        </select>

        <input type="text" name="search" id="search" placeholder="Procure por titulo.." wire:model="search">
    </div>

    <br>
    <hr>
    <form method="POST" wire:submit.prevent="create">
        <input type="text" name="titulo" id="titulo" placeholder="titulo" wire:model="titulo">
        @error('titulo') <span class="error">É nescessario titulo!</span> @enderror

        <input type="text" name="content" id="content" placeholder="conteudo" wire:model="content">
        @error('content') <span class="error">É nescessario preencher o conteudo!</span> @enderror



        <select wire:model="categoria_ti" class="form-select" aria-label="Default select example" name="categoria"
            id="categoria">

            <option selected> Selecione a categoria</option>

            @foreach ($categoria as $categorias)

                <option value="{{ $categorias->titulo }}"> {{ $categorias->titulo }}</option>

            @endforeach

        </select>


        <button type="submit">salvar</button>
    </form>

    <hr>

    @foreach ($tweets as $tweet)
        @if ($tweet->user->profile_photo_path))
            <img style=" border-radius:50%; width:35px; height:35px; margin-right:5px;"
                class="h-8 w-8 rounded-full object-cover" src="/img/users/{{ Auth::user()->profile_photo_path }}"
                alt="{{ $tweet->user->name }}">
        @else
            <img style=" border-radius:50%; width:35px; height:35px; margin-right:5px;"
                src="{{ asset('img/deus.png') }}" alt="imagem default">
        @endif

        <h2>{{ $tweet->user->name }}</h2>
        <h3>{{ $tweet->titulo }}</h3>
        <p>{{ $tweet->content }}</p>
        <p>{{ $tweet->categoria }}</p>

        <a class="btn btn-primary" href="#" wire:click.prevent="like({{ $tweet->id }})">curtir</a>
        <a class="btn btn-primary" href="#" wire:click.prevent="unlike({{ $tweet->id }})">descurtir</a>
        <p>{{ $tweet->likes->count() }}</p>
        <a href="{{ url('forum/show/{id}') }}" class="btn btn-info btn-sm">visualizar</a>
        <br>
        <hr>
    @endforeach
    <div>
        {{ $tweets->links() }}
    </div>
</div>
