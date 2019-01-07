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
    $res = DB::table('users')->where('district', $district)->groupBy('division')->get();
    return view('login.allmembers')->with('res', $res);

}
else
    $division=Auth::User()->division;
        $res = DB::table('users')->where('division', $division)->get();
        return view('login.members')->with('res', $res);

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
                        $messege->to($x)->subject("Role Chaneges");
                        $messege->from('sdgynsl18@gmail.com');
                    } }$i++;
                });



        $live=DB::table('livestreams')->where('status','Yes')->get();

        return view('login.home')->with('live',$live);
    }
    public function delete(){
        foreach ($_POST['delete'] as $delete ){
            if($delete=='yes'){
                DB::table('users')->where('email', $_POST['email'])->delete();
            }
        }

    }
}
