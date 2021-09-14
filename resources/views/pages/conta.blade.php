@extends('layouts.app')

@section('content')

    @if (session('success'))
        <div class="alert alert-success" id="message">{{ session('success') }}</div>
    @endif
    @if (session('error'))
        <div class="alert alert-error" id="message">{{ session('error') }}</div>
    @endif

<div class="infos">
    <img class="h-8 w-8 rounded-full object-cover" src="storage/users/{{Auth::user()->profile_photo_path}}" alt="{{ Auth::user()->name }}">
    <h1>nome: {{Auth::user()->name}}</h1>
    <h1>nick: {{Auth::user()->nick}}</h1>
    <h1>bio: {{Auth::user()->bio}}</h1>

</div>
<div class="editar">
    <form method="post" action="{{ route('sousapo.conta-update') }}" enctype="multipart/form-data">
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



@endsection
