<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Chapter extends Model
{
    protected $fillable = [
        'chapter_name',
        'chapter_number',
        'pages',
        'path',
        'status',
    ];

    public function page()
    {
        return $this->hasMany(Page::class, 'chapter_number', 'chapter_number');
    }
}
