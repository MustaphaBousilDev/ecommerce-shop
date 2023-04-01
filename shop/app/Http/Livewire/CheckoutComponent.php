<?php

namespace App\Http\Livewire;

use Livewire\Component;
//model country 
use App\Models\Country;
//model city 
use App\Models\Order;
use App\Models\City;
//class Session 
use Session;
use App\Models\Shipping;
use App\Models\Transaction;
use Cart;
use Auth;
class CheckoutComponent extends Component
{
    public $ship_to_different;
    public $firstname;
    public $lastname;
    public $email;
    public $phone;
    public $address1;
    public $address2;
    public $city;
    public $country;
    public $zipcode;

    public $s_firstname;
    public $s_lastname;
    public $s_email;
    public $s_phone;
    public $s_address1;
    public $s_address2;
    public $s_province;
    public $s_country;
    public $s_zipcode;

    //payment method
    public $paymentmode_cod;
    public $paymentmode_paypal;
    public $paymentmode_card;
    public $thankyou;

    //function updated 
    public function updated($fields){
        $this->validateOnly($fields,[
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|email',
            //validation phone regex accept +212 6 00 00 00 00 or 06 00 00 00 00 or 06-00-00-00-00 or +212600000000 or 0600000000 
            'phone'=>'required',
            'address1'=>'required',
            'city'=>'required|numeric',
            'country'=>'required|numeric',
            'zipcode'=>'required|numeric',
            'paymentmode_cod'=>'required',
        ]);
        //if ship to different
        if($this->ship_to_different){
            $this->validateOnly($fields,[
                's_firstname'=>'required',
                's_lastname'=>'required',
                's_email'=>'required|email',
                's_phone'=>'required',
                's_address1'=>'required',
                's_province'=>'required',
                's_country'=>'required',
                's_zipcode'=>'required',
            ]);
        }
    }

    //function placeOrder
    public function placeOrder(){
        //validate data
        $this->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|email',
            //validation phone regex accept +212 6 00 00 00 00 or 06 00 00 00 00 or 06-00-00-00-00 or +212600000000 or 0600000000 
            'phone'=>'required',
            'address1'=>'required',
            'city'=>'required|numeric',
            'country'=>'required|numeric',
            'zipcode'=>'required|numeric',
            'paymentmode_cod'=>'required',
        ]);
        //if ship to different
        

        //save order in database using orm create 
        $order=Order::create([
            'user_id'=>session('loginId'),
            'subtotal'=>session()->get('checkout')['subtotal'],
            'discount'=>session()->get('checkout')['discount'],
            'tax'=>session()->get('checkout')['tax'],
            'total'=>session()->get('checkout')['total'],
            'firstname'=>$this->firstname,
            'lastname'=>$this->lastname,
            'email'=>$this->email,
            'phone'=>$this->phone,
            'line1'=>$this->address1,
            'line2'=>$this->address2,
            'city_id'=>$this->city,
            'province'=>$this->s_province,
            'country_id'=>$this->country,
            'zipcode'=>$this->zipcode,
            'status'=>'ordered',
            'is_shipping_different'=>$this->ship_to_different ? 1 : 0,
        ]);

        //indert into order_item table
        foreach(Cart::instance('cart')->content() as $item){
            $order->orderItems()->create([
                'product_id'=>$item->model->id,
                'order_id'=>$order->id,
                'quantity'=>$item->qty,
                'price'=>$item->price,
                'color'=>4,
                'size'=>5,
            ]);
        }

        //if ship to different
        if($this->ship_to_different){
            //validation 
            $this->validate([
                's_firstname'=>'required',
                's_lastname'=>'required',
                's_email'=>'required|email',
                's_phone'=>'required',
                's_address1'=>'required',
                's_province'=>'required',
                's_country'=>'required',
                's_zipcode'=>'required',
            ]);
            //orm create in shipping table
            $shipping=Shipping::create([
                'order_id'=>$order->id,
                'firstname'=>$this->s_firstname,
                'lastname'=>$this->s_lastname,
                'email'=>$this->s_email,
                'phone'=>$this->s_phone,
                'line1'=>$this->s_address1,
                'line2'=>$this->s_address2,
                'province'=>$this->s_province,
                'country_id'=>$this->s_country,
                'zipcode'=>$this->s_zipcode,
            ]);

            //^payment method 
            if($this->paymentmode_cod=='cod'){
                //orm transaction table 
                $transaction=Transaction::create([
                    'order_id'=>$order->id,
                    'user_id'=>session('loginId'),
                    'mode'=>'cod',
                    'status'=>'pending',
                ]);

            }else if($this->paymentmode_paypal=="paypal"){
                $transaction=Transaction::create([
                    'order_id'=>$order->id,
                    'user_id'=>session('loginId'),
                    'mode'=>'paypal',
                    'status'=>'pending',
                ]);
            }
            //if payment mode card
            else if($this->paymentmode_card=="card"){
                $transaction=Transaction::create([
                    'order_id'=>$order->id,
                    'user_id'=>session('loginId'),
                    'mode'=>'card',
                    'status'=>'pending',
                ]);
            }
            $this->thankyou=1;
            //destroy cart
            Cart::instance('cart')->destroy();
            session()->forget('checkout');
        }

    }

    //verify checkout
    public function verifyCheckout(){
        if(!Session::has('loginId')){
            return redirect()->route('login');
        }else if($this->thankyou){
            return redirect()->route('thankyou');
        }else if(!session()->get('checkout')){
            return redirect()->route('cart');
        }
    }
    public function render(){
        $this->verifyCheckout();
        $countries=Country::where('status',1)->whereNull('deleted_at')->get();
        $cities=City::where('status',1)->whereNull('deleted_at')->get();
        return view('livewire.checkout-component',['countries'=>$countries,'cities'=>$cities]);
    }
}
