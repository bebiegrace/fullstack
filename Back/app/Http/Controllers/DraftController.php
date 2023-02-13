<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Draft;
use App\Models\User;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Spatie\FlareClient\Api;

class DraftController extends Controller
{
    public function draftni()
    {
        return draft::all();
    }

    public function store(Request $request)
    {
        // Validate the request
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
        ]);

        // Create the post
        $post = Draft::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'user_id' => Auth::user()->id,
            'user_name' => Auth::user()->name,
        ]);

        // Return the post
        return response()->json($post);
    }


    //     $post = Draft::create([
    //      'user_id' => Auth::user()->id,
    //      'title' => 'Data',
    //      'content' => 'Data',
    //   ]);

// $post = new Draft();
// $post->user_id = Auth::user()->id;
// $post->save();



// public function store(Request $request)
//   {

// $post_draft = [
//     'user_id'=> $request->Auth::id(),
//     'title' => $request->title,
//     'content' => $request->content
//     // 'peeringdb' => $request->input('peeringDB'),
//     // 'asset' => $request->input('asset'),
//     // 'contact' => $request->input('Contact'),

// ];

// Draft::create($post_draft);


// Session::flash('success', 'Form succesfully saved To draft!');

//   }



    public function fetch($id)
    {
        return draft::where('id', $id)->first();

    }

    // public function fetch1($id)
    // {
    // $draft = Draft::with(['userdraft'])->get();

    // $draft = Books::with(['author' => function($query)return  $query->where()])->get();
    // }
    // $users = DB::table('users')->where('votes', '>', 100)->get();

    // public function fetchtwo($title)
    // {
    //     return draft::where('title', $title)->first();

    // }

    public function update(Request $request, $id)
    {

        draft::find($id)->update([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'content' => $request->content
        ]);
    }


    // public function updatetwo(Request $request, $title)
    // {

    //     draft::find($title)->update([
    //         'user_id' => $request->user_id,
    //         'title' => $request->title,
    //         'content' => $request->content
    //     ]);
    // }

    public function destroy($id)
    {
        return draft::find($id)->delete();
    }
}
