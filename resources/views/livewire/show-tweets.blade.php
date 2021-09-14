<div>
    <h1 style="color: black;">testeee</h1>
    <p>{{ $titulo }}</p>
    <p>{{ $content }}</p>
    <p>{{ $categoria }}</p>

    <form method="POST" wire:submit.prevent="create">

        <input type="text" name="titulo" id="titulo" placeholder="titulo" wire:model="titulo">
        @error('titulo') <span class="error">e nescessario titulo !</span> @enderror

        <input type="text" name="content" id="content" placeholder="conteudo" wire:model="content">
        @error('content') <span class="error">e nescessario preencher o conteudo !</span> @enderror

        <input type="text" name="categoria" id="categoria" placeholder="categoria" wire:model="categoria">
        @error('categoria') <span class="error">e nescessario escolher uma categoria !</span> @enderror

        <button type="submit">salvar</button>



    </form>

    <hr>

    @foreach ($tweets as $tweet)
        @if ($tweet->user->profile_photo_path))
            <img style=" border-radius:50%; width:35px; height:35px; margin-right:5px;"
                class="h-8 w-8 rounded-full object-cover" src="storage/users/{{ $tweet->user->profile_photo_path }}"
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


        <a  class="btn btn-primary" href="#" wire:click.prevent="unlike({{ $tweet->id }})">descurtir</a>




        <p>{{ $tweet->likes->count() }}</p>


        <a href="{{ url('forum/show/{id}') }}" class="btn btn-info btn-sm">visualizar</a>



        <br>
        <hr>
    @endforeach


    <div>

        {{ $tweets->links() }}
    </div>


</div>
