<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Image;
use Cart;

class ProductDetailComponent extends Component
{
    public $slug;
    public $qty;
    //mount
    public function mount($slug){
        $this->slug = $slug;
        $this->qty = 1;
    }
    //store in cart shopping
    public function store($product_id,$product_name,$product_price){
        Cart::instance('cart')->add($product_id,$product_name,$this->qty,$product_price)->associate('App\Models\Product');
        session()->flash('success_message','Item added in cart');
        return redirect()->route('cart');
    }

    //increase quantity
    public function increaseQuantity(){
        $this->qty++;
    }
    //decrease quantity
    public function decreaseQuantity(){
        if($this->qty>1){
            $this->qty--;
        }
    }



    //render
    public function render(){
        $product = Product::with('tags')->where('slug',$this->slug)->first();
        //slider product 
        //$sliderProducts=Product::where('sub_category_id',$product->sub_category_id)->inRandomOrder()->limit(10)->get();
        $nporduct=Product::latest()->take(4)->get();
        $images = Image::all();
        return view('livewire.product-detail-component',['product'=>$product,'images'=>$images]);
    }
}
