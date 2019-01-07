<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DcController extends Controller
{

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'district' => 'required',
            'email' => 'required',
            'contact_no' => 'required',
            'password' => 'required'
        ]);



        $user = new User([
            'name' => $request -> get('name'),
            'district' => $request -> get('district'),
            'division' => $request -> get('division'),
            'email' => $request -> get('email'),
            'contact_no' => $request -> get('contact_no'),
            'role' => $request -> get('role'),
            'password' => $request -> get('password')
        ]);


        $user->save();

        return view('add_dc');
    }

}

