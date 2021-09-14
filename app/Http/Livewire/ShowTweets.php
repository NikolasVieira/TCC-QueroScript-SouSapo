<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use  App\Models\Tweet;
use App\Models\like;
use App\Models\Resposta;
use App\Http\Requests\Request;

class ShowTweets extends Component
{
  
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $content = '';
    public $titulo = '';
    public $categoria = '';
  
 

    protected $rules = [
         
         'content' => 'required',
         'titulo' => 'required',
         'categoria' => 'required',
    ]; 
    public function render()
    {

        $tweets = Tweet::with('user')->latest()->paginate(4);
        
        return view('livewire.show-tweets', [
            'tweets' => $tweets,
            
        ])
        ->extends('layouts.app');
    }


    
    public function create() 
    {
        $this->validate();

        auth()->user()->Tweets()->create([
            'titulo' => $this->titulo ,
            'content' => $this->content,
            'categoria' => $this->categoria
 
        ]);
         
        $this->titulo = '';
         $this->content = '';
         $this->categoria = '';
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

       $tweet->likes()->where('user_id' , auth()->user()->id)->delete();

    }
    public function show($id)
    {
        $tweet = tweet::all();
        $resposta = Resposta::all();
        return view('pages.respostas', compact('tweet', 'resposta'));
    }
    public function RespostaTweet(Request $request) 
    {
        $this->validate();

        $resposta = new resposta();
        $resposta->tweet_id = $request->input('tweet_id');
        $resposta->content = $request->input('content');
        $resposta->user_id = auth()->user()->id;
        
        return session('msg' , 'creio que pinto');
        
         
      
    }

    /*public function unlike(tweet $tweet)
            {
       $tweet->likes()->delete();

    }*/

}


