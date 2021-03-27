@extends('layouts.app')
@section('content')

<<<<<<< Updated upstream
<style>

#ulSobre1 {
    position: relative;
    margin-left: 5px;
    margin-right: 500px;
    background-color: #CC99F4;
}

#divSobre1{
    margin-left: 150px;
}

#divSobre2{
    padding-top: 20px;
    padding-bottom: 1px;
}

#nos {
    font-size: 17px;
}

#divSobre11{
    margin-left: 110px;
}

</style>

<p>
    <div id="divSobre1">
        <h1>Sobre Nós</h1><br/>
    </div>
    <ul id="ulSobre1">
        <div id="divSobre2">
            <p id="nos">Maria Fernanda - WebDesign e Diretora Criativa</p>
            <p id="nos">Victor Guzella - WebDesign e Programador</p>
            <p id="nos">Nikolas Raposo - Programador e Roteirista</p>
            <p id="nos">Micaeli Almeida - Escritora e Avaliadora</p>
            <p id="nos">Kaelaine Pereira- Escritora e Avaliadora</p>
            <p id="nos">Kayky Martins - DBA e Programador</p>
=======
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
>>>>>>> Stashed changes
        </div>
    </ul>
</p>
<hr>
<p>
    <div id="divSobre11">
        <h1>Sobre o Projeto</h1><br/>
    </div>
<<<<<<< Updated upstream
    <ul id="ulSobre1">
        <div id="divSobre2">
            <p id="">HQ</p>
        </div>
    </ul>
</p>
=======
</div>

<!--TESTE NO NIKOLAS-->
<hr>
<div class="container">
    <div class="row">
        <div class="col">
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
        
        <div class="col">
            <h1 id="SobreoProjeto"> Sobre o Projeto </h1>
            <div class="card">
                <div class="card-body text-justify card-color">
                    texto texto texto bem grande e comprido
                </div>
            </div>
        </div>
    </div>
</div>
>>>>>>> Stashed changes



@endsection
