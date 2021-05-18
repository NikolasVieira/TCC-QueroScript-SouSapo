<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'chapter_number',
        'page_number',
        'path',
    ];
}
