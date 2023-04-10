<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\User;
use App\Models\Profiles;
use Illuminate\Support\Facades\Session;

class ProfileComponent extends Component{

    public function verify(){
        if(!Session::has('loginId')){
            return redirect()->route('login');
        }
    }
    public function render()
    
    {
        $this->verify();
        $user_id=Session()->get('user')->id;
        $profile=Profiles::where('user_id',$user_id)->first();
        //check if profile is empty
        if(empty($profile)){
            $profile=new Profiles();
            $profile->user_id=$user_id;
            $profile->city='';
            $profile->country='';
            $profile->state='';
            $profile->street='';
            $profile->zip='';
            $profile->phone='';
            $profile->fname='';
            $profile->lname='';
            $profile->save();
        }
        $user=User::find($user_id);
        return view('livewire.user.profile-component',['user'=>$user]);
    }
}
