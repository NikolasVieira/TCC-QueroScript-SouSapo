@extends('layouts.app')

@section('content')
@foreach ($discucao as $discucaos)
     <h1>{{$discucaos->titulo}}</h1>
<p>   {{$discucaos->texto}}</p>
@endforeach
@if (Auth::check())
<button type="button" class="btn btn-sapinho" data-bs-toggle="modal"
                                data-bs-target="#exampleModal" id="open">
                                 responder
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
                                            <form action="{{ url('forum/add/respostas') }}" method="post">
                                                @csrf
                                                
                                                <div class="mb-3">
                                                    <label for="texto" class="form-label">Resposta:</label>
                                                    <input type="text" class="form-control" id="texto" name="texto"
                                                        placeholder="digite a resposta:">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="disabledSelect" class="form-label">id discussao</label>
                                                    <select id="disabledSelect" class="form-select" name="id_discucao">
                                                        @foreach ($discucao as $discucaos)
                                                        <option>{{$discucaos->id}}</option>
                                                        @endforeach
                                                      
                                                    </select>
                                                  </div>

                                               
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
@endsection