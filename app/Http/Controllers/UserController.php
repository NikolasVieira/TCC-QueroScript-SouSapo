<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Arte;


class UserController extends Controller
{

    public function Updateprofile(Request $request)
    {

        $id = auth()->user()->id;
        $info = User::find($id);
        $user = auth()->user();
        if (isset($info)) {
            $info->name = $request->input('name');
            $info->nick = $request->input('nick');
            $info->bio = $request->input('bio');
            $info->email = $request->input('email');
            //ADICIONANDO IMAGEM
            if ($request->file('image') && $request->file('image')->isValid()) {
                $requestImage = $request->image;
                $name = Str::slug(auth()->user()->name);
                $extension = $requestImage->extension();
                $nameFile = "{$name}.{$extension}";
                $requestImage ->move(public_path('img/users'), $nameFile);
                $info->profile_photo_path = $nameFile;
            }
            $info->save();
            if ($info) {
                return redirect()->route('conta.index')->with('success', 'dados editados com sucesso!');
            } else {
                return redirect()->back()->with('error', 'dados nao editados !');
            }
        }
    }


    /*
   public function storagePhoto(Request $request)
    {
        $id = auth()->user()->id;
        $foto = User::find($id);
        $foto->profile_photo_path = $request->input('file');
        dd($foto);
        $nameFile = Str::slug(auth()->user()->name) . '.' . $info->file->extension();
        $user = auth()->user();
        if($path = $info->file->storeAs('users', $nameFile)) {
            $user->update([
                'profile_photo_path' => $path,
            ]);
        }
        return redirect()->route('sousapo.conta');
    }
    */
}
