@extends('layouts.app')

@section('title', 'SouSapo | Lendo')

@section('content')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/turnjs4/lib/turn.min.js') }}"></script>
    <link href="{{ asset('css/ler.css') }}" rel="stylesheet">

    @if ($page)
        <div class="container" id="cont">
            <div class="bg-razinha p-3">
            <div id="flipbook">
                <div id="capa">
                    <img src="{{ asset('storage') }}/{{ $chapter->path }}" alt="capa" id="cover">
                </div>
                @foreach ($page as $pages)
                    <div id="pagina">
                        <img src="{{ asset('storage') }}/{{ $pages->path }}"
                            alt="Pagina numero: {{ $pages->page_number }}" id="page">
                    </div>
                @endforeach
            </div>
        </div>
        </div>
    @endif

    <script type="text/javascript">
        $('#flipbook').turn({
            width: 800,
            height: 550,
            page: 1,
            autoCenter: false,
            duration: 1200
        })
    </script>

@endsection
