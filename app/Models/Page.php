<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'pages';
    public $timestamps = false;
    protected $fillable = [
        'page_number',
        'path',
        'status',
    ];
    public function chapter_number()
    {
        return $this->belongsTo(Chapter::class, 'chapter_number', 'chapter_number');
    }
}
