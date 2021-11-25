@extends('layouts.app')

@section('title', 'SouSapo | Sobre')

@section('content')

    <link href="{{ asset('css/sobre.css') }}" rel="stylesheet">

    <div class="container">
        <br />
        <div class="row">
            <div class="col-sm-6 col-md-5 mb-2">
                <h1 id="Sobrenos">Sobre Nós</h1>
                <div class="card">
                    <div class="card-body card-color">
                        <p>
                            Os Fundadores de SouSapo são Kaelaine Pereira, Kayky Martins, Maria Fernanda Guizelin, Micaeli
                            Almeida, Nikolas Raposo e Victor Guzella. Para fazer o TCC nós nos juntamos para criar o
                            SouSapo, cada um com seu trabalho a desempenhar, nenhum menos importante do que o outro, todos
                            necessários.
                        </p>
                        <p>
                            Kaelaine estava encarregada da parte escrita do TCC, assim o resto da equipe podia se concentrar
                            na criação do site e dos quadrinhos, enquanto toda burocracia era administrada.
                        </p>
                        <p>
                            Kayky estava encarregado de manter o site estável, fazendo manutenções e criando algumas
                            páginas, também prestava auxílio a Nikolas quando era necessário.
                        </p>
                        <p>
                            Maria Fernanda estava encarregada da parte visual e artística do site, além de criar os
                            quadrinhos que seriam publicados. Fazendo Artes dos personagens e dos cenários, a história
                            Principal e a mitologia por trás da HQ.
                        </p>
                        <p>
                            Micaeli também estava encarregada da parte escrita do TCC, ela auxiliava Kaelaine na formatação
                            e idealização da parte escrita, Micaeli também ajudou em algumas partes da criação da história
                            da HQ.
                        </p>
                        <p>
                            Nikolas estava encarregado da programação do site, buscando a maior produtividade possível
                            enquanto gerenciava o que os outros programadores tinham que fazer durante os meses de trabalho,
                            ele também auxiliava na criação da HQ roteirizando algumas histórias e ajudando na criação da
                            ideia da HQ.
                        </p>
                        <p>
                            Victor estava encarregado de deixar o site mais atraente, operando como UX designer, ele também
                            atuou na criação de algumas páginas.
                        </p>
                    </div>
                </div>
            </div>
            <div id="linha-vertical" class="col-sm-2 col-md-1 mb-2"></div>
            <!--<hr width="1" size="100">-->
            <div class="col-sm-12 col-md-5 mb-4">
                <h1 id="SobreoProjeto"> Sobre o Projeto </h1>
                <div class="card">
                    <div class="card-body card-color">
                        <p>
                            O site SouSapo surgiu da ideia de um dos fundadores, Maria Fernanda, ela estava aprendendo
                            animação e teve a ideia de um projeto, uma animação em que o protagonista é um sapo que possui
                            uma flor falante e juntos teriam várias aventuras, a animação tinha fortes inspirações no
                            desenho Gravity Falls e Hora de Aventura, teriam loucuras e mistérios, além de ser voltado a
                            comédia.
                        </p>
                        <p>
                            Por conta do TCC chegando decidimos implementar essa ideia a ele, então nós iamos fazer um site
                            voltado para essa ideia, porém uma animação requeria muito tempo e esforço, e a história nem
                            estava escrita, vimos que uma animação era inviável naquele momento, por isso adaptamos a ideia
                            para a mídia dos quadrinhos, assim manteria a proposta inicial de ser louco e misterioso e com
                            possibilidades de aprimoramentos.
                        </p>
                        <p>
                            Quando já sabíamos o que deveria ser feito, botamos a mão na massa, começaram a sair conceitos e
                            desenhos de como seria a HQ e a ideia principal do quadrinho foi surgindo até que chegou no
                            estado que SouSapo é hoje.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <br />
    </div>

@endsection
