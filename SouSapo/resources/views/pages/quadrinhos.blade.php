@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Selecione o capitulo que deseja ler</h2>
    <hr />
    <div class="row row-cols-1 row-cols-md-3">
        @foreach($chapter as $chapters)
        <div class="col-3 p-2">
            <div class="card text-white bg-ra text-center h-100 p-3">
                @if($page)
                <img src="{{ asset('img/hq_marvel_capa.jpg') }}" class="card-img-top" alt="capa">
                @endif
                <img src="{{ asset('img/hq_marvel_capa.jpg') }}" class="card-img-top" alt="capa">
                <div class="card-body">
                    <h5 class="card-title">{{ $chapters->chapter_name }}</h5>
                    <div class="card-footer">
                        <a href="{{ route('sousapo.ler',$chapters->id)}}" class="btn btn-success btn">ler</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
