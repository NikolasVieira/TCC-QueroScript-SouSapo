<?php

namespace App\Http\Controllers\Hq;

use App\Http\Controllers\Controller;
use App\Http\Requests\HqRequest;
use App\Models\Chapter;
use App\Models\Page;

class HqController extends Controller
{
    public function capitulos()
    {
        $page = Page::all();
        $chapter = Chapter::all();
        return view('pages.capitulos', compact('chapter', 'page'));
    }

    public function index()
    {
        $chapter = Chapter::all();
        return view('admin.hq.chapter.index', compact('chapter'));
    }

    public function create()
    {
        $chapter = Chapter::all();
        return view('admin.hq.chapter.create', compact('chapter'));
    }

    public function store(HqRequest $request)
    {
        $chapter = new Chapter();
        $chapter->chapter_name = $request->input('chapter_name');
        $chapter->chapter_number = $request->input('chapter_number');
        $chapter->pages = $request->input('pages');
        $chapter->save();

        return redirect()->route('hq.index', compact('chapter'));
    }

    public function show($id)
    {
        $chapter = Chapter::where('id', $id)->first();
        return view('admin.hq.chapter.show', compact('chapter'));
    }

    public function edit($id)
    {
        $chapter = Chapter::find($id);
        if (isset($chapter)) {
            return view('admin.hq.chapter.edit', compact('chapter'));
        }
        return view('admin.hq.chapter.index');
    }

    public function update(HqRequest $request, $id)
    {
        $chapter = Chapter::find($id);
        if (isset($chapter)) {
            $chapter->chapter_name = $request->input('chapter_name');
            $chapter->chapter_number = $request->input('chapter_number');
            $chapter->pages = $request->input('pages');
            $chapter->save();
        }
        return redirect()->route('hq.index', compact('chapter'));
    }

    public function destroy($id)
    {
        $chapter = Chapter::find($id);
        if (isset($chapter)) {
            $chapter->delete();
        }
        return redirect()->route('hq.index');
    }
}
