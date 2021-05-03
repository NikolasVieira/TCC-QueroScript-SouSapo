<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HqPages extends Model
{
    protected $fillable = [
        'chapter_number',
        'path',
    ];
}
