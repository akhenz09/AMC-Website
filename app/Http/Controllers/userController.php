<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\user_table;
use Session;
class userController extends Controller
{
    //
    public function saveRegistration(Request $request){
        \Log::info(json_encode($request->all()));

        $newReg = new user_table;
        $newReg->Fname = $request->txtFname;
        $newReg->Sname = $request->txtSname;
        $newReg->Email = $request->txtEmail;
        $newReg->Username = $request->txtUsername;
        $newReg->Password = hash::make ($request->txtPassword);
        $newReg->save();
        return "Submission Successful!";
    }

    public function login(){
        return view ('Frontend/login');
    }

    public function userAuth(Request $req){
        $user = user_table::where(['Username'=>$req->txtUsername])->first();
        if(!$user || !hash::check($req->txtPassword, $user->Password))
        {
            return "Unknown User Account!";
        }
        else
        {
            $req->session()->put('user', $user);
            return redirect('/items');
        }
    }

   public function logout(){
        Session::forget('user');
        return redirect('Frontend/login');
   }
}
