<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        $request->file('arquivo')->store('teste');
        var_dump($request->file('arquivo'), $request->all());
    }
}
