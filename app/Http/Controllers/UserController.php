<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;

class UserController extends Controller
{
    public function show() {
        $user = User::all();
        return view('', compact('user'));
    }

    public function Updateprofile(Request $request) {
         $id = auth()->user()->id;
         $info = User::find($id);
         $user = auth()->user();
         if (isset($info)) {
            $info->name = $request->input('name');
            $info->nick = $request->input('nick');
            $info->bio = $request->input('bio');
            $info->email = $request->input('email');
                if($request->file('image') && $request->file('image')->isValid()){
                    $requestImage = $request->image;
                    $name = Str::slug(auth()->user()->name);
                    $extension = $requestImage->extension();
                    $nameFile = "{$name}. {$extension}";
<<<<<<< HEAD
            
                    $upload = $requestImage->move(public_path('img/users'), $nameFile);

=======
                    $upload = $requestImage->storeAs('users ', $nameFile);
>>>>>>> b471eff3f782be228f5c3076bfbd0845cd59c5b9
                    $info->profile_photo_path = $nameFile;
            }
        $info->save();
            if($info){
                return redirect()->route('sousapo.conta')->with('success' , 'dados editaados com sucesso !');
            }else{
               return redirect()->back()->with('error' , 'dados nao editados !');
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
