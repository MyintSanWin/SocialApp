<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    function user(){
      return  $this->belongsTo(User::class);// (post 1->user_id 2) user with relationship in post
        
    }
}

//post 1 -> user 1
