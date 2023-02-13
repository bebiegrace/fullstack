<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
class Writer extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable =[
        'name',
        'email',
        'password',
        // 'user_type',
    ];
    use HasFactory;

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    use HasFactory;

    public function draft(){
        return $this->hasMany(Draft::class);
    }

    public function publish(){
        return $this->hasMany(Publish::class);
    }

}
