@extends('layouts.app')
@section('content')
<script src="{{ asset("js/jquery.min.js") }}"></script>
<script src="{{ asset('vendor/turnjs4/lib/turn.min.js') }}"></script>

<style>
    body {
        overflow: hidden;
    }

    #cont{
        padding-top:5%;
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

    #pagina {
        background: white;
    }

    #img {
        width: 100%;
    }
</style>
<div class="container" id="cont">

    <div id="flipbook">
        <div id="pagina">
            <img src="{{ asset('img/hq_marvel_capa.jpg') }}" alt="capa" id="img">
        </div>
        <div id="pagina">
            <h1>CONTRA-CAPA</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat dolorem, tenetur libero sequi
                blanditiis
                porro quam velit. Numquam autem rem natus incidunt, harum, necessitatibus omnis nihil praesentium,
                accusantium dolores nisi?</p>
        </div>
        <div id="pagina">
            <h1>SUMARIO</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat dolorem, tenetur libero sequi
                blanditiis
                porro quam velit. Numquam autem rem natus incidunt, harum, necessitatibus omnis nihil praesentium,
                accusantium dolores nisi?</p>
        </div>
        <div id="pagina">
            <h1>PAGINA 1</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat dolorem, tenetur libero sequi
                blanditiis
                porro quam velit. Numquam autem rem natus incidunt, harum, necessitatibus omnis nihil praesentium,
                accusantium dolores nisi?</p>
        </div>
        <div id="pagina">
            <h1>PAGINA 2</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat dolorem, tenetur libero sequi
                blanditiis
                porro quam velit. Numquam autem rem natus incidunt, harum, necessitatibus omnis nihil praesentium,
                accusantium dolores nisi?</p>
        </div>
        <div id="pagina">
            <h1>VERSO</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat dolorem, tenetur libero sequi
                blanditiis
                porro quam velit. Numquam autem rem natus incidunt, harum, necessitatibus omnis nihil praesentium,
                accusantium dolores nisi?</p>
        </div>
    </div>

</div>
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
