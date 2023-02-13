<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Writer;

class WriterController extends Controller
{
    public function getUser(){
        return writer::all();
     }



        public function storedata(Request $request)
        {


            $request->validate([
                'email'=>'required|email|unique:users',
                'password'=>'required|min:8|max:12',

            ]);


            return writer::create([
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
            return writer::where('id', $id)->first();

        }
}
