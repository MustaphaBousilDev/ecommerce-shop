<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;


class UsersComponent extends Component
{
    public function render()
    {
        $users=User::all();
        
        return view('livewire.admin.users-component',['users'=>$users])->layout('layouts.base');
    }
}
