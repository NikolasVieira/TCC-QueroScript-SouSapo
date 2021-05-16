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
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                              <select class="form-select btn-sapinho" aria-label="Default select example">
                                <option selected>filtros</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                              <select class="form-select btn-sapinho" aria-label="Default select example">
                                <option selected>filtros</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
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
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="" method="post">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Email
                                                        address</label>
                                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                                        placeholder="name@example.com">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">

                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        @else


                            <a href="{{ route('login') }}" class="btn btn-sapinho"> Novo topico +</a>


                        @endif


                    </div>
                    <div class="textos"></div>
                    <div class="textos"></div>
                    <div class="textos"></div>
                    <div class="textos"></div>
                    <div class="textos"></div>

                </div>
            </div>

    </section>

@endsection
