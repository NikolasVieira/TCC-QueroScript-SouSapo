<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    
    public function index()
    {
        $categoria = Categoria::all();
        return view('categoria.index', compact('categoria'));
    }

  
    public function create()
    {
        $categoria = Categoria::all();
        return view('categoria.create', compact('categoria'));
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
        return view('categoria.edit', compact('categoria'));
    }

   
    public function update(Request $request, $id)
    {
        $categoria = Categoria::find($id);
        $categoria->produto = $request->input('titulo');
        $categoria->save();
      
        return redirect()->route('categoria', compact('categoria'));
    }

   
    public function destroy($id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();
        return redirect()->route('categoria.index');
    }
}
