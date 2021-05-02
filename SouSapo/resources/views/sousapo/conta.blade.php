@extends('layouts.app')


@section('content')

<section class="minha-conta">
    <link rel="stylesheet" href="/css/conta.css">

    <div class="perfil">
        <div id="foto"></div>
        <p>nome do usuario</p>
        <p>frase do usuario</p>

        <h1>configuração</h1>


        <a href="">sobre mim</a>
        <a href="#">notificação</a>
        <a href="#">privacidade</a>
    </div>
    <div class="container-cont">
        <div class="infos">

            <div class="form">
                <form>
                    <label for="nome">Nome de Exibição:</label><br>
                    <input type="text" id="nome" name="nome"><br>

                    <label for="frase">Frase:</label><br>
                    <textarea name="frase" id="frase" cols="40" rows="10"></textarea>

                </form>
            </div>
            <div class="config">
                <div class="avatar">

                </div>
                <div class="tema">

                </div>
            </div>
        </div>
    </div>

</section>

@endsection
