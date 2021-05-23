<?php

namespace App\Http\Controllers\Admin\Hq;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function form()
    {
        return view('admin.hq.upload.form');
    }

    public function upload(Request $request)
    {
        $request->file('arquivo')->store('teste');
        var_dump($request->file('arquivo'), $request->all());
    }
}
