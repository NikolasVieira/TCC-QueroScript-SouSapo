<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tweet extends Model
{
    use HasFactory;

    protected $fillable = ['content' , 'titulo', 'categoria', 'user_id'];

    public function user() 
    {
        return  $this->belongsTo(User::class);
    }
    
    public function likes(){
        
        return $this->hasMany(like::class);
               
               /*
               ->where(function ($query){
                        if ( auth()->check()){
                            $query->where('user_id' , auth()->user()->id);
                        }
                     });*/
    }

    public function respostas()

    {
        return $this->hasMany(Respostas::class);
    }
}

