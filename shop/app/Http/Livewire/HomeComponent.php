<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
//model sliders 
use App\Models\Slider;
class HomeComponent extends Component
{
   
    //get all variable insdie session 
    public function render(){
        //$this->user=User::find(session('loginId'));
        $sliders=Slider::where('status',1)->get();
        //dd($sliders);
        return view('livewire.home-component',['sliders'=>$sliders]);      
    }
}
