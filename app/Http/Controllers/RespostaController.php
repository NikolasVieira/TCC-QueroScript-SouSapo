<?php

namespace App\Http\Controllers;

use App\Http\Requests\Request;
use App\Models\Resposta;

class RespostaController extends Controller
{
    public function RespostaTweet(Request $request)
    {
        $resposta = new resposta();
        $resposta->tweet_id = $request->input('tweet_id');
        $resposta->content = $request->input('content');
        $resposta->user_id = auth()->user()->id;
        $resposta->save();
        return redirect()->back()->with('success', 'resposta adicionada com sucesso');
    }
}
