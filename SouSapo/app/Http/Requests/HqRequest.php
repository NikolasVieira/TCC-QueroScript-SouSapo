<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HqRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'hq_name' => 'required',
            'chapter_number' => 'required',
            'page_number' => 'required'
        ];
    }
}
