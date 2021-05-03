<?php

namespace App\Http\Controllers;

use App\Http\Requests\HqRequest;
use App\Models\Hq;

class HqController extends Controller
{
    public function index()
    {
        $hq = Hq::all();
        return view('sousapo.hq.index', compact('hq'));
    }

    public function create()
    {
        $hq = Hq::all();
        return view('sousapo.hq.create', compact('hq'));
    }

    public function store(HqRequest $request)
    {
        $hq = new Hq();
        $hq->hq_name        = $request->input('hq_name');
        $hq->chapter_number = $request->input('chapter_number');
        $hq->page_number    = $request->input('page_number');
        $hq->save();

        return redirect()->route('hq.index', compact('hq'));
    }

    public function show($id)
    {

        $hq = Hq::where('id', $id)->first();
        return view('sousapo.hq.show', compact('hq'));
    }

    public function edit($id)
    {
        $hq = Hq::find($id);
        if (isset($hq)) {
            return view('sousapo.hq.edit', compact('hq'));
        }
        return view('sousapo.hq.index');
    }

    public function update(HqRequest $request, $id)
    {
        $hq = Hq::find($id);
        if (isset($hq)) {
            $hq->hq_name        = $request->input('hq_name');
            $hq->chapter_number = $request->input('chapter_number');
            $hq->page_number    = $request->input('page_number');
            $hq->save();
        }
        return redirect()->route('hq.index', compact('hq'));
    }

    public function destroy($id)
    {
        $hq = Hq::find($id);
        if (isset($hq)) {
            $hq->delete();
        }
            return redirect()->route('hq.index');
    }
}
