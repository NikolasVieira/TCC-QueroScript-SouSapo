<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class EncryptCookies extends Middleware
{
    /**
     * O nome dos cookies que não serão encriptados.
     *
     * @var array
     */
    protected $except = [
        //
    ];
}
