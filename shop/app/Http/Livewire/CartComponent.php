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

    //save forlater
    public function saveForLater($rowId){
        $item = Cart::instance('cart')->get($rowId);
        Cart::instance('cart')->remove($rowId);
        Cart::instance('saveForLater')->add($item->id,$item->name,1,$item->price)->associate('App\Models\Product');
        //emitTo using for refresh component when add item to cart
        $this->emitTo('cart-icon-component','refreshComponent');
        session()->flash('success_message','Item has been saved for later');
    }

    //move to cart
    public function moveToCart($rowId){
        $item = Cart::instance('saveForLater')->get($rowId);
        //dd($item);
        Cart::instance('saveForLater')->remove($rowId);
        Cart::instance('cart')->add($item->id,$item->name,1,$item->price)->associate('App\Models\Product');
        $this->emitTo('cart-icon-component','refreshComponent');
        session()->flash('success_message','Item has been moved to cart');
    }

    //remove item from save for later
    public function removeItemFromSaveLater($rowId){
        Cart::instance('saveForLater')->remove($rowId);
        //emitTo using for refresh component when add item to cart
        //$this->emitTo('cart-icon-component','refreshComponent');
        session()->flash('r_success_message','Item has been removed');
    }


    //render
    public function render(){
        $images = Image::all();
        return view('livewire.cart-component',['images'=>$images]);
    }
}
