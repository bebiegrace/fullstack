<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publish;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Support\Facades\Auth;
class PublishController extends Controller
{
    public function publishni()
    {
        return publish::all('title', 'content');
    }


    // public function store(Request $request)
    // {
    //     return publish::create([
    //     'user_id' => $request->user_id,
    //     'title' => $request->title,
    //     'content' => $request->content,
    //     'views' => $request->views,
    //     'comment' => $request->comment
    //     ]);
    // }


    public function store(Request $request)
    {
        // Validate the request
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
        ]);

        // Create the post
        $post = Publish::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'user_id' => Auth::user()->id,
            'user_name' => Auth::user()->name,
        ]);

        // Return the post
        return response()->json($post);
    }


    public function fetch($id)
    {
        return publish::where('id', $id)->first();

    }

    // public function fetchtwo($title)
    // {
    //     return draft::where('title', $title)->first();

    // }

    public function update(Request $request, $id)
    {

        publish::find($id)->update([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'content' => $request->content,
            'views' => $request->views,
            'comment' => $request->comment
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
        return publish::find($id)->delete();
    }
}
