<?php

namespace App\Http\Controllers;
// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class UserController extends Controller
{

 public function getUser(){
    return user::all();
 }



    public function storedata(Request $request)
    {


        $request->validate([
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8|max:12',

        ]);


        return user::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make( $request->password),
        'user_type' => $request->user_type,

        $response['message']="User Registered Successfully",
        $response['data']=$request->all(),

        ]);





    }




    public function fetchUser($id)
    {
        return user::where('id', $id)->first();

    }

    function register(Request $request){
        $userModel=new User();
        $data=$userModel->addUser($request->all());
    }



}
