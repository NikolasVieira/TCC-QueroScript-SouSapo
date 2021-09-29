<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Chapter;
use App\Models\Page;

class HqController extends Controller
{
    public function quadrinhos()
    {
        $chapter = Chapter::where('status', '=', true)->get()->sortBy('chapter_number');
        $page = Page::all();
        return view('pages.quadrinhos', compact('chapter', 'page'));
    }
    public function show($chapter_number)
    {
        $chapter = Chapter::where('chapter_number', $chapter_number)->first();
        $page = $chapter->page()->where('status', '=', true)->get()->sortBy('page_number', SORT_NATURAL);
        return view('pages.ler', compact('chapter', 'page'));
    }
}
