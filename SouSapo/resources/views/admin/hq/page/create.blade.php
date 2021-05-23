@extends('adminlte::page')

@section('content')

<h2>AQUI VAI SER A PAGINA PARA ADICIONAR AS PAGINAS AOS CAPITULOS</h2>
<hr/>
<a href="{{ route('page.index') }}" class="btn btn-secondary mb-3">Voltar</a>

    <form id="frmchapter" name="frmchapter" action="{{ route('page.store') }}" method="POST">
        @csrf
        <div class="row">
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
                <label for="path">Imagem da Pagina</label>
                <input type="file" class="form-control {{ $errors->has('path') ? 'is-invalid' : ''}}" id="path"
                    name="arquivo" placeholder="Informe o Número da pagina que tera a imagem escolhida">
                @if ($errors->has('path'))
                <div class="invalid-feedback">
                    {{$errors->first('path','Atenção o campo é obrigatório!')}}
                </div>
                @endif
            </div>
            <div class="form-group col">
                <label for="pages">Numero da Pagina</label>
                <input type="number" class="form-control {{ $errors->has('pages') ? 'is-invalid' : ''}}" id="pages"
                    name="pages" placeholder="Informe o Número da pagina que tera a imagem escolhida">
                @if ($errors->has('pages'))
                <div class="invalid-feedback">
                    {{$errors->first('pages','Atenção o campo é obrigatório!')}}
                </div>
                @endif
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection
