@extends('layouts.app')
@section('content')
<script src="{{ asset("js/jquery.min.js") }}"></script>
<script src="{{ asset('vendor/turnjs4/lib/turn.min.js') }}"></script>

<style>
    body {
        overflow: hidden;
    }

    #cont {
        padding-top: 5%;
        padding-bottom: 5%;
    }

    #flipbook {
        margin-left: 10%;
    }

    #flipbook .shadow,
    #flipbook.shadow {
        -webkit-box-shadow: 0 4px 10px #666;
        -moz-box-shadow: 0 4px 10px #666;
        -ms-box-shadow: 0 4px 10px #666;
        -o-box-shadow: 0 4px 10px #666;
        box-shadow: 0 4px 10px #666;
    }

    #page {
        background: white;
    }

    #vazio {
        background: gray;
    }

    #img {
        width: 100%;
    }
</style>

<div class="container" id="cont">
    <div id="flipbook">
        <div class="hard" id="cover">
            <img src="{{ asset('storage') }}/{{ $chapter->path }}" alt="Capa" id="img">
        </div>
        <div class="hard" id="vazio"></div>
        @foreach ($page as $pages)
        <div id="page">
            <img src="{{ asset('storage') }}/{{ $pages->path }}" alt="{{ $pages->page_number }}" id="img">
        </div>
        @endforeach
        <div class="hard" id="vazio"></div>
	    <div class="hard" id="vazio"></div>
    </div>
</div>


<script type="text/javascript">
    $('#flipbook').turn({
        width:800,
        height:600,
        page:1,
        autoCenter:false,
        duration:1500
    })
</script>

@endsection
