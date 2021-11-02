<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arte;
class ArteController extends Controller
{

    public function index()
    {
        $filtro = request('filtro');

        if ($filtro) {
            $arte = Arte::where('titulo', 'LIKE', '%' . $filtro . '%')->get();
            return view('pages.artes', compact(['arte', 'filtro']));
        }

        $arte = Arte::all();
        return view('pages.artes', compact('arte'));
    }

    public function store(Request $request)
    {
        $arte = new arte();
        $arte->user_id = auth()->user()->id;
        $arte->titulo =  $request->input('titulo');
        $arte->descricao =  $request->input('descricao');

        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName());
            $requestImage->move(public_path('img/artes'), $imageName);
            $arte->img_path = $imageName;
        }

        $arte->save();

        return redirect()->back()->with('success', 'dados cadastrados com sucesso !');
    }
    
    public function artes()
    {
        $user_id = auth()->user()->id;
        $arte = Arte::where('user_id', $user_id)->get();;
        return view('pages.conta', compact('arte'));
    }

    public function destroy($id)
    {
        $arte = Arte::find($id);
        if (isset($arte)) {

            $arte->delete();
        }
        return redirect()->back()->with('delete', 'Arte removida do sistema !');
    }

}
