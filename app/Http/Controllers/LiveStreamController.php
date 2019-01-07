<?php

namespace App\Http\Controllers;

use App\Livestream;
use Illuminate\Http\Request;

class LiveStreamController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'link' => 'required',
            'status' => 'required'
        ]);



        $livestream = new Livestream([
            'name' => $request -> get('name'),
            'link' => $request -> get('link'),
            'email' => $request -> get('email'),
            'status' => $request -> get('status')
        ]);


        $livestream->save();

        return view('livestream');
    }
}
