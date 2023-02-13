<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CommentController extends Controller
{
    public function commentni()
    {
        return Comment::all();
    }

    public function store(Request $request)
    {
        // Validate the request
        $this->validate($request, [
            // 'publish' => 'required',
            'comment' => 'required',
        ]);

        // Create the post
        $post = Comment::create([
            'user_id' => Auth::user()->id,
            'user_name' => Auth::user()->name,
            'publish_id' => $request->input('publish_id'),
            'comment' => $request->input('comment'),
        ]);

        // Return the post
        return response()->json($post);
    }

    public function fetch($id)
    {
        return comment::where('id', $id)->first();

    }



    public function update(Request $request, $id)
    {

        comment::find($id)->update([
            'user_id' => Auth::user()->id,
            'user_name' => Auth::user()->name,
            'publish_id' => $request->input('publish_id'),
            'comment' => $request->input('comment'),

        ]);
    }


    public function destroy($id)
    {
        return comment::find($id)->delete();
    }
}
