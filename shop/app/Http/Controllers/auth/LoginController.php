<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use Hash;
use Session ;

class LoginController extends Controller
{
    //
    public function loginUser(Request $request){
        //validation inputs 
        $request->validate([
            'email'=>'required|email|max:255',
            'password'=>'required|min:6|max:255'
        ]);
        //check if user is authenticated
        $user=User::where('email',$request->email)->first();
        if($user){
            if($user->status==0){
                session()->flash('fail','Your account is not active');
                return redirect()->route('login');
            }
            if(Hash::check($request->password,$user->password)){
                //set auth 
                Session::put('loginId',$user->id);
                //create Session has users data auth 
                Session::put('user',$user);
                return redirect()->route('home');
            }else{
                session()->flash('fail','Invalid password');
                return redirect()->route('login');
            }
        }else{
            session()->flash('fail','Invalid email');
            return redirect()->route('login');
        } 

    }

    //logout function 
    public function logout(){
        if(Session::has('loginId')){
            //destroy session loginId
            Session::forget('loginId');
            //destroy session user
            Session::forget('user');
            return redirect('login');
        }
    }
}
