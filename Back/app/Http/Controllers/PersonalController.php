<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personal;
class PersonalController extends Controller
{
    public function personalni()
    {
        return personal::all();
    }


    public function store(Request $request)
    {
        return personal::create([
        'user_id' => $request->user_id,
        'title' => $request->title,
        'content' => $request->content
        ]);
    }

    public function fetch($id)
    {
        return personal::where('id', $id)->first();

    }

    // public function fetchtwo($title)
    // {
    //     return draft::where('title', $title)->first();

    // }

    public function update(Request $request, $id)
    {

        personal::find($id)->update([
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
        return personal::find($id)->delete();
    }
}
