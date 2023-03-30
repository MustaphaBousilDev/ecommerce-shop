<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Coupon;

class AdminAddCouponsComponent extends Component
{
    public $code;
    public $type;
    public $value;
    public $cart_value;

    //updated only 
    public function updated($fields){
        $this->validateOnly($fields,[
            'code'=>'required|unique:coupons',
            'type'=>'required',
            'value'=>'required',
            'cart_value'=>'required',
        ]);
    }
    public function storeCoupon(){
        //validation 
        $this->validate([
            'code'=>'required|unique:coupons',
            'type'=>'required',
            'value'=>'required',
            'cart_value'=>'required',
        ]);
        //save using method ORM create 
        $save=Coupon::create([
            'code'=>$this->code,
            'type'=>$this->type,
            'value'=>$this->value,
            'cart_value'=>$this->cart_value, 
        ]);
        //redirect to admin coupons page
        return redirect()->route('admin.coupons');
        session()->flash('message','Coupon has been created successfully');
    }
    public function render(){
        return view('livewire.admin.admin-add-coupons-component')->layout('layouts.base');
    }
}
