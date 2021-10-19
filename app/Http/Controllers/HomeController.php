<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Chapter;
use App\Models\Tweet;

class HomeController extends Controller
{
    public function index()
    {
        $chapter = Chapter::where('status', '=', true)->latest()->paginate(3);
        $tweets = Tweet::with('user')->latest()->paginate(3);
        $categorias = Categoria::all();
        return view('pages.home', compact('chapter', 'tweets', 'categorias'));
    }
}
