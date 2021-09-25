<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Tweet;
use App\Models\like;
use App\Models\Resposta;
use App\Models\Categoria;
use App\Http\Requests\Request;

class ShowTweets extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $content = '';
    public $titulo = '';
    public $categoria_ti = '';
   
    
    protected $rules = [

        'content' => 'required',
        'titulo' => 'required',
        'categoria_ti' => 'required',
    ];

    public function render()
    {
        $tweets = Tweet::with('user')->latest()->paginate(4);
        $categorias = Categoria::all();
        
        
        return view('livewire.show-tweets', [
            'tweets' => $tweets,
            'categoria' => $categorias,


        ])->extends('layouts.app');
    }

    public function create( Request $request)
    {
        $this->validate();
        auth()->user()->Tweets()->create([
            'titulo' => $this->titulo,
            'content' => $this->content,
            'categoria' => $this->categoria_ti,
        ]);
        $this->titulo = '';
        $this->content = '';
        
    }

    public function like($idtweet)
    {
        $tweet =  Tweet::find($idtweet);
        $tweet->likes()->create([
            'user_id' => auth()->user()->id
        ]);
    }

    public function unlike($idtweet)
    {
        $tweet =  Tweet::find($idtweet);
        $tweet->likes()->where('user_id', auth()->user()->id)->delete();
    }

    public function show($id)
    {
        $tweet = tweet::all();
        $resposta = Resposta::all();
        return view('pages.respostas', compact('tweet', 'resposta'));
    }
    /*
    public function unlike(tweet $tweet) {
       $tweet->likes()->delete();
    }
    */
}
