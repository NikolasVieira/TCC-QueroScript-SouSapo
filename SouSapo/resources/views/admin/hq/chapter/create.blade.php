@extends('adminlte::page')

@section('content')
<a href="{{ route('hq.index') }}" class="btn btn-secondary mb-3">Voltar</a>
<h3>AQUI VAI SER A PAGINA PARA ADICIONAR OS CAPITULOS</h3>
<br>
<hr>
<div class="container">
    <form id="frmchapter" name="frmchapter" action="{{ route('hq.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="form-group col">
                <label for="chapter_name">Titulo do Capitulo</label>
                <input type="text" class="form-control {{ $errors->has('chapter_name') ? 'is-invalid' : ''}}"
                    id="chapter_name" name="chapter_name" placeholder="Informe o titulo desse capitulo">
                @if ($errors->has('chapter_name'))
                <div class="invalid-feedback">
                    {{$errors->first('chapter_name','Atenção o campo é obrigatório!')}}
                </div>
                @endif
            </div>

            <div class="form-group col">
                <label for="chapter_number">Numero de Capitulo</label>
                <input type="number" class="form-control {{ $errors->has('chapter_number') ? 'is-invalid' : ''}}"
                    id="chapter_number" name="chapter_number" placeholder="Informe o Número desse Capitulo">
                @if ($errors->has('chapter_number'))
                <div class="invalid-feedback">
                    {{$errors->first('chapter_number','Atenção o campo é obrigatório!')}}
                </div>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="form-group col">
                <label for="pages">Numero de Paginas</label>
                <input type="number" class="form-control {{ $errors->has('pages') ? 'is-invalid' : ''}}" id="pages"
                    name="pages" placeholder="Informe o Número de paginas que terão nesse Capitulo">
                @if ($errors->has('pages'))
                <div class="invalid-feedback">
                    {{$errors->first('pages','Atenção o campo é obrigatório!')}}
                </div>
                @endif
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@endsection
