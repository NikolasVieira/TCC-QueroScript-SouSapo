<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resposta extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'tweet_id',
        'content'
 ];

 public function user()
 {

    return $this->belongsTo(User::class);
 }

public function tweet()
{
    
    return $this->belongsTo(tweet::class);
}

}
