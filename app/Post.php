<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
     protected $fillable = [
        'title', 'content',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];
}
