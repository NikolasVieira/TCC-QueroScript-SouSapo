<?php

namespace App\Http\Controllers;
use  App\Models\Discucao;
use App\Models\respostas;
use App\http\Requests\DiscucaoRequest;
use App\Http\Requests\RespostaRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    
    public function index()
    {
        $discucao = Discucao::all();
        return view('pages.forum', compact('discucao'));
    } 

    
    public function create()
    {
        $discucao = Discucao::all();
        
        return view('pages.forum', compact('discucao'));
    }

    
    public function store(DiscucaoRequest $request)
    {
        $discucao = new Discucao();
        $discucao->titulo= $request->input('titulo');
        $discucao->texto = $request->input('texto');         
        $discucao->categoria = $request->input('categoria');
        $discucao->save();
        return view('pages.forum', compact('discucao'));
       

    }
    public function show($id)
    {
           $discucao = DB::table('discucaos')
                ->where('id', '=', $id)
                ->get();

        
            return view('pages.discussao', compact('discucao'));

    }

     public function createResposta()
     {
        $resposta = respostas::all();
        return view('pages.discussao', compact('resposta'));
     }

     public function storeResposta(RespostaRequest $request)
     {
         $id = '';
        $resposta = new respostas();
        $resposta->discucao_id = $request->input('id_discucao'); ;
        $resposta->texto = $request->input('texto');
        $resposta->save();
        

        
        
     }
    
    
}
