<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Order;
class UserOrdersComponent extends Component
{
    public function render(){
        $orders=Order::with('user','shipping','country','city')
        ->orderBy('created_at','DESC')->where('user_id',session('loginId'))->paginate(12);
        return view('livewire.user.user-orders-component',['orders'=>$orders])->layout('layouts.base');
    }
}
