<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chapter;
use App\Models\Page;

class HqController extends Controller
{
    public function quadrinhos()
    {
        $page = Page::all();
        $chapter = Chapter::all();
        return view('pages.quadrinhos', compact('chapter', 'page'));
    }
    public function read()
    {
        $page = Page::all();
        $chapter = Chapter::all();
        return view('pages.ler', compact('chapter', 'page'));
    }
}
