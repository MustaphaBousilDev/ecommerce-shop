<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
class DashboardComponent extends Component
{
    public $user;
    public function render()
    {
        //gel all user 
        $this->user=User::all();
        return view('livewire.admin.dashboard-component')->with('user',$this->user)->layout('layouts.base');
    }
}
