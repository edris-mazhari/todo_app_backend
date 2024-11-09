<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    /** @use HasFactory<\Database\Factories\TodoFactory> */
    use HasFactory;


    protected $with = [
        'owner'
    ];
   

    protected $guraded = [
        'title',
        'description',
    ];

    protected $fillable = [ 
        'title',
        'description',
        'is_checked',
        'owner'
    ];

    

    public function owner()
    {
       return $this->belongsTo(User::class,'owner');
    }
}
