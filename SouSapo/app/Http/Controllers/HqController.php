<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Chapter;
use App\Models\Page;

class HqController extends Controller
{
    public function quadrinhos()
    {
        $chapter = Chapter::all()->sortBy('chapter_number');
        $page = Page::all();
        return view('pages.quadrinhos', compact('chapter', 'page'));
    }
    public function show($id)
    {
        $chapter = Chapter::where('id', $id)->first();
        $page = $chapter->page()->orderBy('page_number', 'ASC')->get();
        return view('pages.ler', compact('chapter', 'page'));
    }
}
