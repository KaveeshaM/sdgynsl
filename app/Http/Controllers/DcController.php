<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

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

    public function showall()
    {
        $res = DB::table('users')->where('role', 'Dc')->orderBy('district')->get();
        return view('view_dc')->with('res', $res);

    }

    public function delete(){
        foreach ($_POST['delete'] as $delete){
            DB::table('users')->where('email', $delete)->delete();
        }

        return redirect()->back()->with('message', 'Deleted  Successfully!');

    }

}

