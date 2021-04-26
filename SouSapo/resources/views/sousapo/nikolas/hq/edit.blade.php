@extends('layouts.hqcontrols')
@extends('layouts.app')

@section('content')
<div class="container">
    <form id="frmhq" name="frmhq" action="{{route('hq.update', $hq->id)}}" method="POST">
        @csrf
        @method('PUT')
        <h3>AQUI VAI SER A PAGINA PARA EDITAR AS HQS</h3>
        <p>OBS: Só vai ser visivel aos adms</p>
        <hr />
        <p> Você esta editando as informações de {{ $hq->hq_name }}</p>
        <hr />
        <div class="row">
            <div class="form-group col">
                <label for="hq_name">Titulo do Capitulo</label>
                <input type="text" class="form-control" id="hq_name" name="hq_name" value="{{$hq->hq_name}}">
            </div>
            <div class="form-group col">
                <label for="chapter_number">Numero do Capitulo</label>
                <input type="number" class="form-control" id="chapter_number" name="chapter_number"
                    value="{{$hq->chapter_number}}">
            </div>
        </div>
        <div class="row">
            <div class="form-group col">
                <label for="page_number">Numero de Paginas</label>
                <input type="number" class="form-control" id="page_number" name="page_number"
                    value="{{$hq->page_number}}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


@endsection
