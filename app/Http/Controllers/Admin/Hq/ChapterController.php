<?php

namespace App\Http\Controllers\Admin\Hq;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chapter;

class ChapterController extends Controller
{
    public function index()
    {
        $chapter = Chapter::where('status', '=', true)->get()->sortBy('chapter_number');
        return view('admin.hq.chapter.index', compact('chapter'));
    }

    public function create()
    {
        $chapter = Chapter::all();
        return view('admin.hq.chapter.create', compact('chapter'));
    }

    public function store(Request $request)
    {
        $chapter = new Chapter();
        $chapter->chapter_name = $request->input('chapter_name');
        $chapter->chapter_number = $request->input('chapter_number');
        $chapter->pages = $request->input('pages');
        $chapter->path = $request->file('capa')->store('cover');
        $chapter->save();
        return redirect()->route('chapters.index', compact('chapter'));
    }

    public function show($id)
    {
        $chapter = Chapter::where('id', $id)->first();
        $page = $chapter->page()->orderBy('page_number', 'ASC')->get();
        return view('admin.hq.chapter.show', compact('chapter', 'page'));
    }

    public function edit($id)
    {
        $chapter = Chapter::find($id);
        if (isset($chapter)) {
            return view('admin.hq.chapter.edit', compact('chapter'));
        }
        return view('admin.hq.chapter.index');
    }

    public function update(Request $request, $id)
    {
        $chapter = Chapter::find($id);
        if (isset($chapter)) {
            $chapter->chapter_name = $request->input('chapter_name');
            $chapter->chapter_number = $request->input('chapter_number');
            $chapter->pages = $request->input('pages');
            $chapter->save();
        }
        return redirect()->route('chapters.index', compact('chapter'));
    }

    public function destroy(Request $request, $id)
    {
        $chapter = Chapter::find($id);
        if (isset($chapter)) {
            $chapter->status = false;
            $chapter->save();
        }
        return redirect()->route('chapters.index', compact('chapter'));
    }
}
