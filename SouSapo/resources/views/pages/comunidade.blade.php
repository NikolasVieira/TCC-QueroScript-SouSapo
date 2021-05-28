@extends('layouts.app')

@section('content')

<div class="container">
<h1>Artes da Comunidade</h1>

<div>
<button aling="right">Filtro</button>
<button aling="center" >Artes Originais</button>
<button aling="left">Enviar Imagem</button>
</div>

<hr>

<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100">
        <img src="https://cdn.discordapp.com/attachments/741335125480177756/847716087217782804/unknown.png" class="card-img-top" alt="..." height="170px">
        <div class="card-body">
          <h5 class="card-title">Deus (Nanthjan)</h5>
          <p class="card-text">O Deus de toda criação existente.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="https://cdn.discordapp.com/attachments/741335125480177756/847716342660333568/unknown.png" class="card-img-top" alt="..." height="170px">
        <div class="card-body">
          <h5 class="card-title">Deus (Klaus)</h5>
          <p class="card-text">A cópia de Nanthjan, cujo se sentiu solitário.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        </div>
      </div>
    </div>
</div>
 <div id="linha-vertical" class="col-sm-2 col-md-1 mb-5">
</div><div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        </div>
      </div>
    </div>
</div>

@endsection
