<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Draft;
use App\Models\Reader;
use App\Models\Writer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

//geting request from the form
//     public function loginUser(Request $request){
//         $validateData = $request->validate([
//             'email'=>'required|email',
//             'password'=>'required|min:8|max:12',

//         ]);

//              $user =User::where('email', $validateData['email'])->first();

//         if($user && Hash::check($validateData['password'],$user->password)){
//             $token =$user->createToken('api',['create']);
//         return[

//             'token'=>$token->plainTextToken,
//            'greetings'=> 'Successfully Login!!!'
//         ];

//         }
//         else {
//             return[
//                 'error'=>'Invalid Credentials! Please try again.'
//             ];
//         }
// }

///Reader

public function loginUser2(Request $request){
    $validateData = $request->validate([
        'email'=>'required|email',
        'password'=>'required|min:8|max:12',
    ]);

         $user =Reader::where('email', $validateData['email'])->first();

    // $token = $user->createToken('api');

    if($user && Hash::check($validateData['password'],$user->password)){
        $token =$user->createToken('api',['create']);
    return[

        'token'=>$token->plainTextToken,
       'greetings'=> 'Successfully Login!!!'
    ];

    }
    else {
        return[
            'error'=>'Invalid Credentials! Please try again.'
        ];
    }
}




//Writer

public function loginUser1(Request $request){
    $validateData = $request->validate([
        'email'=>'required|email',
        'password'=>'required|min:8|max:12',
    ]);

         $user =Writer::where('email', $validateData['email'])->first();

    // $token = $user->createToken('api');

    if($user && Hash::check($validateData['password'],$user->password)){
        $token = $user->createToken('api',['create']);
    return[

        'token'=>$token->plainTextToken,
       'greetings'=> 'Successfully Login!!!'
    ];

    }
    else {
        return[
            'error'=>'Invalid Credentials! Please try again.'
        ];
    }
}






// //this for the userdashboard page

// public function dashboard(){
//     // return view('auth.dashboard'); link to dashboard html
// // return "Welocome to your empty dashboard just wait for the other featiures we still need to think about it okay? ";
// $data = array();
// if(Session::has("login_id")){
//     $data=User::where('id', '=', Session::get('login_id'))->first();
// }

// return view('dashboard', compact('data'));
// }



public function logout(){
if(Session::has("login_id")){
   Session::pull('login_id');
   return redirect('login');
}

}

}
