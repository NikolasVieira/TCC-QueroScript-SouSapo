<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arte extends Model
{
    use HasFactory;

    protected $fillable = [
      'titulo',
      'descricao',
      'img_path'

    ];

    public function user() 
    {
        return  $this->belongsTo(User::class);
    }
}
