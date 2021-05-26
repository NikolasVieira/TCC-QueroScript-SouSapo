<?php

namespace App\Http\Controllers\Admin\Hq;

use App\Http\Controllers\Controller;
use App\Models\Chapter;
use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    public function index()
    {
        $page = Page::all();
        return view('admin.hq.page.index', compact('page'));
    }

    public function create()
    {
        $page = Page::all();
        return view('admin.hq.page.create', compact('page'));
    }

    public function store(Request $request)
    {
        $page = new Page();
        $page->chapter_number = $request->input('chapter_number');
        $page->page_number = $request->input('page_number');
        $page->path = $request->file('pagina')->store('quadrinhos');
        $page->save();

        return redirect()->route('page.index', compact('page'));
    }

    public function show($id)
    {
        $page = Page::where('id', $id)->first();
        return view('admin.hq.page.show', compact('page'));
    }

    public function edit($id)
    {
        $page = Page::find($id);
        if (isset($page)) {
            return view('admin.hq.page.edit', compact('page'));
        }
        return view('admin.hq.page.index');
    }

    public function update(Request $request, $id)
    {
        $page = Page::find($id);
        if (isset($page)) {
            $page->chapter_number = $request->input('chapter_number');
            $page->page_number = $request->input('page_number');
            $page->path = $request->input('path');
            $page->save();
        }
        return redirect()->route('page.index', compact('page'));
    }

    public function destroy($id)
    {
        $page = Page::find($id);
        if (isset($page)) {
            $page->delete();
        }
        return redirect()->route('page.index');
    }
}
