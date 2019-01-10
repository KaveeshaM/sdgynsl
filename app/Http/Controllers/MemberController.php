<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\User;
use DB;
use Mail;
use function Psy\sh;

class MemberController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');


    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function showall()
    {
if(Auth::User()->role=='Dc'){
    $district=Auth::User()->district;
    $res = DB::table('users')->where('district', $district)->orderBy('division')->orderBy('role')->get();
    return view('login.allmembers')->with('res', $res);

}
else if(Auth::User()->role=='Secretary') {
    $division = Auth::User()->division;
    $res = DB::table('users')->where('division', $division)->whereIn('role',['Member'])->get();
    return view('login.members')->with('res', $res);
}
else if(Auth::User()->role=='admin') {
    $res = DB::table('users')->whereIn('role',['Member','Secretary','Mc'])->orderBy('district')->orderBy('division')->orderBy('role')->get();
    return view('members_view')->with('res', $res);
}
else
    return view('/home');
    }
    public function update()
    {



            Mail::send(['text'=>'login/changeroleMail'],['name',Auth::User()->name],function ($messege){
                $i=0;
                foreach ($_POST['changeRole']as $changeRole)
                {


                    if($changeRole!='Choose Role') {
                        $email = $_POST['email'];
                        $x = $email[$i];
                        DB::table('users')
                            ->where('email', $email[$i])
                            ->update(['role' => $changeRole]);
                        $messege->to($x)->subject("Role Changes");
                        $messege->from('sdgynsl18@gmail.com');
                    } $i++;}
                });




          return redirect()->back()->with('message', 'Updated Successfully!');
    }
    public function delete(){


        foreach ($_POST['delete'] as $delete){
            DB::table('users')->where('email', $delete)->delete();
        }

        return redirect()->back()->with('message', 'Deleted  Successfully!');
    }
}
