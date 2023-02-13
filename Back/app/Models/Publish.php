<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publish extends Model
{
    protected $fillable =[
        'user_id',
        'user_name',
        'title',
        'content',
    ];
    use HasFactory;

    public function userpublish(){
        return $this->belongsTo(Writer::class);
    }

    public function publish(){
        return $this->hasMany(Reader::class);
    }
}
