<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Order;
class AdminOrderComponent extends Component
{
    public function render()
    {
        //get all orders with use and shipping and products and country and city with pagination
        $orders = Order::with('user','shipping','country','city')
        ->orderBy('created_at','DESC')
        ->paginate(10);
        return view('livewire.admin.admin-order-component',['orders' => $orders])
        ->layout('layouts.base');
    }
}
