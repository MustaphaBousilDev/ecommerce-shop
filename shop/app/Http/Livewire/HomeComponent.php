<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Product;
use Cart;
use App\Models\Slider;
use App\Models\SubCategory;
use App\Models\Image;
class HomeComponent extends Component{
    //store in cart shopping 
    public function store($product_id,$product_name,$product_price){
        Cart::instance('cart')->add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success_message','Item added in cart');
        $this->emitTo('cart-icon-component','refreshComponent');
        return redirect()->route('cart');
    }
    ///////////////////////////////////////
    public function addToWishlist($product_id,$product_name,$product_price){
        Cart::instance('wishlist')
        ->add($product_id,$product_name,1,$product_price)
        ->associate('App\Models\Product');   
        $this->emitTo('wishlist-icon-component','refreshComponent');  
    }
    ///////////////////////////////////////
    //remove from wishlist
    public function removeFromWishlist($product_id){
        foreach(Cart::instance('wishlist')->content() as $witem){
            if($witem->id==$product_id){
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('wishlist-icon-component','refreshComponent');
                return;
            }
        }
    }
    //////////////////////////////////////
    //get all variable insdie session 
    public function render(){
        //$this->user=User::find(session('loginId'));
        $sliders=Slider::where('status',1)->get();
        //latest product
        $lproducts=Product::where('status',1)
        ->whereNull('deleted_at')
        ->orderBy('created_at','DESC')
        ->get()
        ->take(8);
        //image 
        $images=Image::all();
        //get all subcategory where status 1 and deleted_at null
        $subcategories=SubCategory::where('status',1)->whereNull('deleted_at')->get();
        return view('livewire.home-component',['sliders'=>$sliders,'lproducts'=>$lproducts,'images'=>$images,'subcategories'=>$subcategories]);      
    }
}
