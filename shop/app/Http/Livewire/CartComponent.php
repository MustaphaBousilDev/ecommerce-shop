<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Image;
use Cart;
class CartComponent extends Component{
    //increment quantity
    public function increaseQuantity($rowId){
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty + 1;
        Cart::instance('cart')->update($rowId,$qty);
        //emitTo using for refresh component when add item to cart
        $this->emitTo('cart-icon-component','refreshComponent');
    }
    //decrement quantity
    public function decreaseQuantity($rowId){
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty - 1;
        Cart::instance('cart')->update($rowId,$qty);
        //emitTo using for refresh component when add item to cart
        $this->emitTo('cart-icon-component','refreshComponent');
    }
    //remove item from cart
    public function destroy($rowId){
        Cart::instance('cart')->remove($rowId);
        //emitTo using for refresh component when add item to cart
        $this->emitTo('cart-icon-component','refreshComponent');
        session()->flash('success_message','Item has been removed');
        
    }

    //destroy all items from cart
    public function destroyAll(){
        Cart::instance('cart')->destroy();
        //emitTo using for refresh component when add item to cart
        $this->emitTo('cart-icon-component','refreshComponent');
    }


    //render
    public function render(){
        $images = Image::all();
        return view('livewire.cart-component',['images'=>$images]);
    }
}
