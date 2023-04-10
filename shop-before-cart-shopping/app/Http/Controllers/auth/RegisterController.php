<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class RegisterController extends Controller
{
    //
    public function register_user(Request $request){
        $request->validate([
            'username'=>'required|min:4|max:15|alpha|unique:users',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8|max:20',
            'password__confirm'=>'required|same:password',
            'phone_number'=>'required|numeric|digits:10'
        ]);
        //ORM for save data
        //dd($request->all());
        $user=new User();
        $user->username=$request->input('username');
        $user->email=$request->input('email');
        $user->password=Hash::make($request->input('password'));
        $user->phone=$request->input('phone_number');
        $res=$user->save();
        if($res){
            //redirect to home page 
            return redirect()->route('home');
        }else{
            return back()->with('fail','Something went wrong, try again later');
        }
    }
}
