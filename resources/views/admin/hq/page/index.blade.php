@extends('adminlte::page')

@section('content')
<style>
    #pag {
        height: 10rem;
    }
</style>
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
                <th scope="col">Caminho</th>
                <th scope="col">Opções</th>
            </tr>
        </thead>
        <tbody>
            @foreach($page as $pages)
            <tr>
                <th scope="row">{{ $pages->id }}</th>
                <td><img src="{{ asset('storage') }}/{{ $pages->path }}" alt="img" id="pag"></td>
                <td>{{ $pages->chapter_number }}</td>
                <td>{{ $pages->page_number }}</td>
                <td>{{ $pages->path }}</td>
                <td>
                    <a href="{{ route('pages.edit',$pages->id)}}" class="btn btn-primary btn-sm">Editar</a>
                    <a href="{{ route('pages.show',$pages->id)}}" class="btn btn-success btn-sm">ler</a>
                    <a href="{{ route('pages.destroy',['id'=>$pages->id])}}" class="btn btn-danger btn-sm">Remover</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
