@extends('layouts.app')

@section('content')

<link href="{{ asset('css/sobre.css') }}" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-5 mb-2">
            <h1 id="Sobrenos">Sobre Nós</h1>
            <div class="card">
                <div class="card-body text-justify card-color">
                    Maria Fernanda - Ilustradora e WebDesign<br />
                    Nikolas Raposo - Roteirista e Programador<br />
                    Victor Guzella - Ilustrador e Programador<br />
                    Kayky Martins - DBA e Programador<br />
                    Kaelaine - Escritora e Avaliadora<br />
                    Micaeli - Escritora e Avaliadora<br />
                </div>
            </div>
        </div>
        <div id="linha-vertical" class="col-sm-2 col-md-1 mb-2"></div>
        <!--<hr width="1" size="100">-->
        <div class="col-sm-12 col-md-5 mb-4">
            <h1 id="SobreoProjeto"> Sobre o Projeto </h1>
            <div class="card">
                <div class="card-body text-justify card-color">
                    texto texto texto bem grande e comprido
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
