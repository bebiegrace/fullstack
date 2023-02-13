<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\Reader;
use Illuminate\Http\Request;

class ReaderController extends Controller
{


    public function getUser(){
        return reader::all();
     }



        public function storedata(Request $request)
        {


            $request->validate([
                'email'=>'required|email|unique:users',
                'password'=>'required|min:8|max:12',

            ]);


            return reader::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make( $request->password),
            // 'user_type' => $request->user_type,

            $response['message']="User Registered Successfully",
            $response['data']=$request->all(),

            ]);
        }

        public function fetchUser($id)
        {
            return reader::where('id', $id)->first();

        }

        // function register(Request $request){
        //     $userModel=new Reader();
        //     $data=$userModel->addUser($request->all());
        // }


}
