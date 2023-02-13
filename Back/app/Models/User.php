<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;
// use DB;

class User extends  Authenticatable
{

    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable =[
        'name',
        'email',
        'password',
        'user_type',
    ];
    use HasFactory;


    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function publishIn(){
        return $this->hasMany(Publish::class);
}

public function draftIn(){
    return $this->hasMany(Draft::class);
}

public function personalIn(){
    return $this->hasMany(Personal::class);
}

//=========================================================
function addUser($data){
    DB::table('users')->insert($data);
}

// function deleteUser($id){
//     DB::table('user')->where('id',$id)->delete();
// }

// function updateUser($id,$data){
//     DB::table('user')->where('id',$id)->update($data);
// }

// function fetchUser($id){
//     DB::table('user')->where('id',$id)->get()->first();
// }



}

