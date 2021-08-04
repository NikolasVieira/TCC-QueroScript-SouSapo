@extends('layouts.app')

@section('content')

    <section class="Forum">
        <link rel="stylesheet" href="/css/forum.css">

        <div class="titulo-forum">
            <h1>FÓRUM</h1>
        </div>
        <div class="container-forum">
            <div class="infos">
                <div class="topicos">

                    <div class="form-check">
                        <div>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                            <label class="form-check-label" for="flexCheckIndeterminate">
                                Todos os topicos
                            </label>
                        </div>
                    </div>

                    <h1>SELEÇÃO <br> DE <br> TOPICOS</h1>
                </div>
                <div class="coments">
                    <div class="opcoes">
                        <div class="filtros">
                            <form action="" >
                            <select class="form-select btn-sapinho" aria-label="Default select example">
                                <option selected>filtros</option>
                                <option value="mitologia">Mitologia</option>
                                <option value="personagens">Personagens</option>
                                <option value="teorias">Teorias</option>
                              </select>
                              
                            </form>
                    </div>

                        @if (Auth::check())

                            <!-- Modal -->
                            <button type="button" class="btn btn-sapinho" data-bs-toggle="modal"
                                data-bs-target="#exampleModal" id="open">
                                Novo topico +
                            </button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Discussão</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ url('forum') }}" method="post">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="titulo" class="form-label">Titulo</label>
                                                    <input type="text" class="form-control" id="titulo" name="titulo"
                                                        placeholder="digite o titulo:">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="texto" class="form-label">texto:</label>
                                                    <input type="text" class="form-control" id="texto" name="texto"
                                                        placeholder="digite o texto:">
                                                </div>

                                                <select class="form-select" aria-label="Default select example" name="categoria">
                                                    <option selected>Selecione a categoria:</option>
                                                    <option value="mitologia">Mitologia</option>
                                                    <option value="personagens">Personagens</option>
                                                    <option value="teorias">Teorias</option>
                                                  </select>
                                                  <div class="modal-footer">

                                                    <button type="submit" class="btn btn-primary">Publicar</button>
                                                </div>
                                            </form>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>


                        @else


                            <a href="{{ route('login') }}" class="btn btn-sapinho"> Novo topico +</a>


                        @endif


                    </div>
                    @foreach ($discucao as $discucaos)
                        
                   
                    <div class="textos">
                     
                        <h1>{{$discucaos->titulo}}</h1>
                        <a href="{{ url('forum/show', ['id' => $discucaos->id]) }}"
                            class="btn btn-danger btn-sm">visualizar</a>
                            
                    </div>

                    @endforeach
                    

                </div>
            </div>

    </section>

@endsection
