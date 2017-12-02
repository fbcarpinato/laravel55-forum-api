<?php

namespace RESTfullServiceTest\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'user_id', 'post_id', 'body'
    ];
}