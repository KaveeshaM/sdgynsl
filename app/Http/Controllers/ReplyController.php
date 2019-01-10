<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReplyController extends Controller
{
    public function index()
    {
        $rep = DB::table('replies')->orderBy('id','DESC')->get();

        return view('view_messages')->with('rep', $rep);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'message' => 'required',
            'email' => 'required',
            'reply' => 'required'
        ]);



        $replies = new Replies([
            'message' => $request -> get('message'),
            'email' => $request -> get('email'),
            'reply' => $request -> get('reply')
        ]);


        $replies->save();

        return redirect()->back();
    }
}
