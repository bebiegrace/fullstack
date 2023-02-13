<?php

namespace App\Models;
use App\Http\Controllers\AuthController;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Draft extends Model
{
    protected $fillable =[
        'user_id',
        'user_name',
        'title',
        'content',
    ];

    use HasFactory;


    public function userdraft(){
        return $this->belongsTo(Writer::class,'user_id');
    }
}


