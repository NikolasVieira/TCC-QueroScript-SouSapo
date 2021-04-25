@extends('layouts.app')

@section('content')
<div class="container">
<h2>AQUI VAI SER A PAGINA PARA VER E SELECIONAR OS CAPITULOS DA HQ</h2>
<hr />
<a href="{{ route('hq.create') }}" class="btn btn-success">Novo Capitulo</a>
<br /><br />
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Capitulo</th>
            <th scope="col">Pagina</th>
            <th scope="col">Opções</th>
        </tr>
    </thead>
    @foreach($hq as $hqs)
    <tbody>
        <tr>
            <th>{{ $hqs->id }}</th>
            <th>{{ $hqs->hq_name }}</th>
            <th>{{ $hqs->chapter_number }}</th>
            <th>{{ $hqs->page_number }}</th>
            <td>
                <a href="{{ route('hq.edit',$hq->id)}}" class="btn btn-primary btn-sm">Editar</a>
            </td>
        </tr>
    </tbody>
    @endforeach
</table>
</div>
@endsection
