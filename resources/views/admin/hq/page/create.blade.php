@extends('adminlte::page')

@section('content')

<h2>AQUI VAI SER A PAGINA PARA ADICIONAR AS PAGINAS AOS CAPITULOS</h2>
<hr />
<a href="{{ route('page.index') }}" class="btn btn-secondary mb-3">Voltar</a>

<form action="{{ route('page.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="form-group col">
            <label for="chapter_number">Capitulo pertencente</label>
            <select class="form-control" id="chapter_number" name="chapter_number">
                <option>selecione</option>
                @foreach ($chapter as $chapters)
                <option value="{{ $chapters->chapter_number}}">{{ $chapters->chapter_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col">
            <label for="page_number">Numero da Pagina</label>
            <input type="number" class="form-control" id="page_number" name="page_number"
                placeholder="Informe o Número da pagina que tera a imagem escolhida">
        </div>
    </div>

    <div class="row">
        <div class="form-group col">
            <label for="file">Imagem da Pagina</label>
            <input type="file" class="form-control" id="file" name="pagina">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection
