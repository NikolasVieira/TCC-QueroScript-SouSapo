@extends('adminlte::page')

<link href="{{ asset('css/cruds.css') }}" rel="stylesheet">

@section('content')
    <h2>Paginas</h2>
    <hr />
    <a href="{{ route('pages.create') }}" class="btn btn-success">Nova Pagina</a>
    <br><br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#Id</th>
                <th scope="col">Página</th>
                <th scope="col">Número do Capitulo</th>
                <th scope="col">Número da Pagina</th>
                <th scope="col">Opções</th>
            </tr>
        </thead>
        <tbody>
            @foreach($page as $pages)
            <tr>
                <th scope="row">{{ $pages->id }}</th>
                <td><img src="{{ asset('storage') }}/{{ $pages->path }}" alt="pagina" id="page"></td>
                <td>{{ $pages->chapter_number }}</td>
                <td>{{ $pages->page_number }}</td>
                <td>
                    <a href="{{ route('pages.edit',$pages->id)}}" class="btn btn-primary btn-sm">Editar</a>
                    <a href="{{ route('pages.show',$pages->id)}}" class="btn btn-success btn-sm">ler</a>
                    <a href="{{ route('pages.delete',$pages->id)}}" class="btn btn-danger btn-sm">Remover</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
