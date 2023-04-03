<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Order;
class UserOrderDetailsComponent extends Component
{
    public $order_id;
    public function mount($order_id){
        $this->order_id = $order_id;
    }
    public function render()
    {
        $orders =Order::find($this->order_id)->where('user_id',session('loginId')) ;
        $image=Image::all();
        return view('livewire.user.user-order-details-component',['orders'=>$orders,'image'=>$image])->layout('layouts.base');
    }
}
