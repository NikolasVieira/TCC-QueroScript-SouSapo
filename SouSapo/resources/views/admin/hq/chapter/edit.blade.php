@extends('adminlte::page')

@section('content')
<div class="container">
    <form id="frmchapter" name="frmchapter" action="{{route('hq.update', $chapter->id)}}" method="POST">
        @csrf
        @method('PUT')
        <h3>AQUI VAI SER A PAGINA PARA EDITAR OS CAPITULOS</h3>
        <p>OBS: Só vai ser visivel aos adms</p>
        <hr />
        <p> Você esta editando as informações de {{ $chapter->chapter_name }}</p>
        <hr />
        <div class="row">
            <div class="form-group col">
                <label for="chapter_name">Titulo do Capitulo</label>
                <input type="text" class="form-control" id="chapter_name" name="chapter_name" value="{{$chapter->chapter_name}}">
            </div>
            <div class="form-group col">
                <label for="chapter_number">Numero do Capitulo</label>
                <input type="number" class="form-control" id="chapter_number" name="chapter_number"
                    value="{{$chapter->chapter_number}}">
            </div>
        </div>
        <div class="row">
            <div class="form-group col">
                <label for="pages">Numero de Paginas</label>
                <input type="number" class="form-control" id="pages" name="pages"
                    value="{{$chapter->pages}}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


@endsection
