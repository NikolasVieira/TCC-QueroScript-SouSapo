<?php

namespace App\Http\Controllers\Admin\Forum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoryController extends Controller
{
    public function index()
    {
        $categoria = Categoria::all();
        return view('admin.forum.categoria.index', compact('categoria'));
    }

    public function create()
    {
        $categoria = Categoria::all();
        return view('admin.forum.categoria.create', compact('categoria'));
    }

    public function store(Request $request)
    {
        $categoria =  new Categoria();
        $categoria->titulo = $request->input('titulo');
        $categoria->save();
        return redirect()->route('categoria.index', compact('categoria'));
    }

    public function edit($id)
    {
        $categoria = Categoria::find($id);
        return view('admin.forum.categoria.edit', compact('categoria'));
    }

    public function update(Request $request, $id)
    {
        $categoria = Categoria::find($id);
        $categoria->produto = $request->input('titulo');
        $categoria->save();
        return redirect()->route('categoria.index', compact('categoria'));
    }

    public function destroy($id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();
        return redirect()->route('categoria.index');
    }
}
