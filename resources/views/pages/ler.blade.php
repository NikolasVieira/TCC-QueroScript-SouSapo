@extends('layouts.app')
@section('content')
<script src="{{ asset("js/jquery.min.js") }}"></script>
<script src="{{ asset('vendor/turnjs4/lib/turn.min.js') }}"></script>
<link href="{{ asset('css/ler.css') }}" rel="stylesheet">

@if($page)
<div class="container" id="cont">
    <div id="flipbook">
        @foreach ($page as $pages)
        <div id="pagina">
            <img src="{{ asset('storage') }}/{{ $pages->path }}" alt="{{ $pages->page_number }}" id="img">
        </div>
        @endforeach
    </div>
</div>
@endif

<script type="text/javascript">
    $('#flipbook').turn({
        width:800,
        height:600,
        page:1,
        autoCenter:false,
        duration:1200
    })
</script>

@endsection
