<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $fillable =[
        'user_id',
        'title',
        'content',
    ];
    use HasFactory;

    public function userpersonal(){
        return $this->belongsTo(User::class);
    }
}
