<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $fillable = [
        'chapter_name',
        'chapter_number',
        'pages',
    ];

    public function page() {
        return $this->hasOne(Page::class, 'chapter_number', 'chapter_number');
    }

}
