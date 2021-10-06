@extends('adminlte::page')

@section('content')
    <h2>Categorias</h2>
    <hr />
    <a href="{{ route('categoria.create') }}" class="btn btn-success">Nova Categoria</a>
    <br><br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Titulo</th>
                <th scope="col">Opções</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categoria as $categorias)
            <tr>
                <td scope="row"> {{ $categorias->titulo }}</td>
                <td>
                    <a href="{{ route('categoria.edit', $categorias->id) }}" class="btn btn-primary btn-sm" >Editar</a>
                    <a href="{{ route('categoria.delete', $categorias->id) }}" class="btn btn-danger btn-sm" >Remover</a>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
    @endsection
