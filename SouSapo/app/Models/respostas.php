<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class respostas extends Model
{
    protected $fillable = [
        'texto',
    ];
    public function discucao()
    {
        return $this->hasMany('App\Models\Discucao');
    }
}
