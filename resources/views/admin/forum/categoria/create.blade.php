@extends('adminlte::page')

@section('content')

<h2>ADICIONAR CATEGORIA</h2>
<hr />
<a href="{{ route('categoria.index') }}" class="btn btn-secondary mb-3">Voltar</a>

<form action="{{ route('categoria.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="form-group col">
            <label for="titulo">Titulo da Categoria</label>
            <input type="text" class="form-control {{ $errors->has('titulo') ? 'is-invalid' : ''}}"
                id="titulo" name="titulo" placeholder="Informe o titulo da categoria">
            @if ($errors->has('titulo'))
            <div class="invalid-feedback">
                {{$errors->first('titulo','Atenção o campo é obrigatório!')}}
            </div>
            @endif
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Adicionar</button>
</form>
@endsection
