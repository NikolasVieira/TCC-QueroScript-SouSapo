@extends('adminlte::page')

@section('content')
AQUI VAI SER A PAGINA PARA ADICIONAR AS HQS
<br>
OBS: Só vai ser visivel aos adms
<div class="container">
    <form id="frmhq" name="frmhq" action="{{ route('hq.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="form-group col">
                <label for="hq_name">Titulo do Capitulo</label>
                <input type="text" class="form-control {{ $errors->has('hq_name') ? 'is-invalid' : ''}}" id="hq_name"
                    name="hq_name" placeholder="Informe o titulo desse capitulo">
                @if ($errors->has('hq_name'))
                <div class="invalid-feedback">
                    {{$errors->first('hq_name','Atenção o campo é obrigatório!')}}
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
                <label for="page_number">Numero de Paginas</label>
                <input type="number" class="form-control {{ $errors->has('page_number') ? 'is-invalid' : ''}}"
                    id="page_number" name="page_number"
                    placeholder="Informe o Número de paginas que terão nesse Capitulo">
                @if ($errors->has('page_number'))
                <div class="invalid-feedback">
                    {{$errors->first('page_number','Atenção o campo é obrigatório!')}}
                </div>
                @endif
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@endsection
