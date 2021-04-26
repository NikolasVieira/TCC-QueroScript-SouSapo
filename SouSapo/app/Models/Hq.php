<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hq extends Model
{
    protected $fillable = [
        'hq_name',
        'chapter_number',
        'page_number',
    ];
}
