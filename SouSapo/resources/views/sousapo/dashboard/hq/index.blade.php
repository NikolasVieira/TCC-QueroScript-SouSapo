@extends('adminlte::page')

@section('content')
<div class="container">
    <br>
    <h2>CRUD DA HQ</h2>
    <hr />
    <a href="{{ route('hq.create') }}" class="btn btn-success">Novo Capitulo</a>
    <br><br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#id</th>
                <th scope="col">Nome do Capitulo</th>
                <th scope="col">Número do Capitulo</th>
                <th scope="col">Número de Paginas</th>
                <th scope="col">Opções</th>
            </tr>
        </thead>
        <tbody>
            @foreach($hq as $hqs)
            <tr>
                <th scope="row">{{ $hqs->id }}</th>
                <td>{{ $hqs->hq_name }}</td>
                <td>{{ $hqs->chapter_number }}</td>
                <td>{{ $hqs->page_number }}</td>
                <td>
                    <a href="{{ route('hq.edit',$hqs->id)}}" class="btn btn-primary btn-sm">Editar</a>
                    <a href="{{ route('hq.show',$hqs->id)}}" class="btn btn-success btn-sm">ler</a>
                    <a href="{{ route('hq.destroy',['id'=>$hqs->id])}}" class="btn btn-danger btn-sm">Remover</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
