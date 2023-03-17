<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
class HomeComponent extends Component
{
   
    //get all variable insdie session 
    public function render(){
        //$this->user=User::find(session('loginId'));
        return view('livewire.home-component');       ;
    }
}
