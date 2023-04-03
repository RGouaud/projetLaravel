<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sauce extends Model
{
    Protected $primaryKey='idSauce';
    Protected $fillable =   ['userId', 
                            'name', 
                            'manufacturer', 
                            'description', 
                            'mainPepper', 
                            'imageUrl', 
                            'heat', 
                            'likes', 
                            'dislikes', 
                            'usersLiked', 
                            'usersDisliked'];
    // use HasFactory;
}
