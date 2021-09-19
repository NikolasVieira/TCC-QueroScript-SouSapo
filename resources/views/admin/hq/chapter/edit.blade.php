@extends('adminlte::page')

@section('content')
<form id="frmchapter" name="frmchapter" action="{{route('chapters.update', $chapter->id)}}" method="POST">
    @csrf
    @method('PUT')
    <h3>AQUI VAI SER A PAGINA PARA EDITAR OS CAPITULOS</h3>
    <p> Você esta editando as informações do capitulo numero {{ $chapter->chapter_number }}</p>
    <hr />
    <a href="{{ route('chapters.index') }}" class="btn btn-secondary mb-3">Voltar</a>
    <div class="row">
        <div class="form-group col">
            <label for="chapter_name">Titulo do Capitulo</label>
            <input type="text" class="form-control" id="chapter_name" name="chapter_name"
                value="{{$chapter->chapter_name}}">
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
            <input type="number" class="form-control" id="pages" name="pages" value="{{$chapter->pages}}">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
