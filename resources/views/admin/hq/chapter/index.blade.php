@extends('adminlte::page')

@section('content')
<style>
    #cover {
        height: 10rem;
    }
</style>
    <h2>CRUD DOS CAPITULOS</h2>
    <hr />
    <a href="{{ route('chapter.create') }}" class="btn btn-success">Novo Capitulo</a>
    <br><br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#Id</th>
                <th scope="col">Capa</th>
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
                <td><img src="{{ asset('storage') }}/{{ $chapters->path }}" alt="capa" id="cover"></td>
                <td>{{ $chapters->chapter_name }}</td>
                <td>{{ $chapters->chapter_number }}</td>
                <td>{{ $chapters->pages }}</td>
                <td>
                    <a href="{{ route('chapter.edit',$chapters->id)}}" class="btn btn-primary btn-sm">Editar</a>
                    <a href="{{ route('chapter.show',$chapters->id)}}" class="btn btn-success btn-sm">Visualizar</a>
                    <a href="{{ route('chapter.destroy',['id'=>$chapters->id])}}" class="btn btn-danger btn-sm">Remover</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
