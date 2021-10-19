<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Request extends FormRequest
{
    /**
     * Determina se o usuario é autorizado a fazer essa request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Pega as regras de validação para aplicar na request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
