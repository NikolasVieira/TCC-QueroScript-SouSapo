@extends('adminlte::page')

@section('content')
<form id="frmpage" name="frmpage" action="{{route('pages.update', $page->id)}}" method="POST">
    @csrf
    @method('PUT')
    <h3>VOCÊ ESTA EDITANDO UMA PAGINA</h3>
    <p> Você esta editando as informações da pagina número {{ $page->page_number }}</p>
    <hr />
    <a href="{{ route('pages.index') }}" class="btn btn-secondary mb-3">Voltar</a>
    <div class="row">
        <div class="form-group col">
            <label for="chapter_number">Numero do Capitulo</label>
            <input type="number" class="form-control" id="chapter_number" name="chapter_number"
                value="{{$page->chapter_number}}">
        </div>
        <div class="form-group col">
            <label for="page_number">Numero da Pagina</label>
            <input type="number" class="form-control" id="page_number" name="page_number"
                value="{{$page->page_number}}">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label for="path">Imagem da Pagina</label>
            <input type="input" class="form-control" id="path" name="path" value="{{$page->path}}">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
