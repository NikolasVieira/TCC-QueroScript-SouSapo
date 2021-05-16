@extends('adminlte::page')

@section('content')
    <h2>CRUD DA HQ</h2>
    <hr />
    <a href="{{ route('hq.create') }}" class="btn btn-success">Novo Capitulo</a>
    <br><br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#Id</th>
                <th scope="col">Nome do Capitulo</th>
                <th scope="col">Número do Capitulo</th>
                <th scope="col">Número de Paginas</th>
                <th scope="col">Opções</th>
            </tr>
        </thead>
        <tbody>
            @foreach($chapter as $chapters)
            <tr>
                <th scope="row">{{ $chapters->id }}</th>
                <td>{{ $chapters->chapter_name }}</td>
                <td>{{ $chapters->chapter_number }}</td>
                <td>{{ $chapters->pages }}</td>
                <td>
                    <a href="{{ route('hq.edit',$chapters->id)}}" class="btn btn-primary btn-sm">Editar</a>
                    <a href="{{ route('hq.show',$chapters->id)}}" class="btn btn-success btn-sm">ler</a>
                    <a href="{{ route('hq.destroy',['id'=>$chapters->id])}}" class="btn btn-danger btn-sm">Remover</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
