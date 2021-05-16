@extends('adminlte::page')

@section('content')
<form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="arquivo">
    <button type="submit">enviar arquivo</button>
</form>

@endsection
