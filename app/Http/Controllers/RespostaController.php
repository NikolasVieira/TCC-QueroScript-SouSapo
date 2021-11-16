<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Request;
use App\Models\Resposta;
use App\Models\tweet;
use Illuminate\Support\Facades\DB;

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
    public function show($id)
    {
        $tweet = tweet::find($id);
        $resposta = Resposta::with('tweet')->where('tweet_id', $id)->get();
        return view('pages.respostas', compact('tweet', 'resposta'));
    }
}
