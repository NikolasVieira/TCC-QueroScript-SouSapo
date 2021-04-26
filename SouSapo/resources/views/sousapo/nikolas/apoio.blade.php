@extends('layouts.app')

@section('content')

<div class="intro py-4 position-relative text-white" style="background-color: var(--sapao);">
    <div class="intro-content mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 align-self-center">
            <h1 class="display-6 mb-2">Apoie o SouSapo.</h1>
            <p class="lead mb-4">
                ALGUNS DOS BENEFICIOS DE SER UM APOIADOR:<br>
                - PDFs para ler e compartilhar com quem quiser<br>
                - Ter seu nome no mural dos apoiadores<br>
                - Ter visibilidade aumentada na comunidade e no fórum.
            </p>
          </div><!-- /.col-md-6 -->
          <div class="col-md-5 ml-auto">
            <div class="card" style="background-color: var(--razinha);">
              <div class="card-body text-dark">
                <form>
                  <div class="form-group">
                    <label for="email">Nome Completo</label>
                    <input type="email" class="form-control" id="email" placeholder="Insira seu nome" style="background-color: var(--sapinho);">
                  </div>
                  <div class="form-group">
                    <label for="password">Valor</label>
                    <input type="number" class="form-control" id="valor" placeholder="Insira um Valor a ser doado" style="background-color: var(--sapinho);">
                  </div>
                  <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                        <label class="form-check-label" for="flexCheckIndeterminate">
                            Quero que meu nome apareça no mural
                        </label>
                      </div>
                  </div>
                  <button type="submit" class="btn btn-sapinho btn-block btn-lg mb-2">Doar</button>
                </form>
              </div>
            </div>
          </div><!-- /.col-md-6 -->
        </div>
      </div>
    </div>
  </div>

@endsection
