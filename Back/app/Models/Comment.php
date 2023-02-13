<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable =[
        'user_id',
        'user_name',
        'publish_id',
        'comment',
    ];

    use HasFactory;
}


