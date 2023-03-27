<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Image;
use Cart;

class ProductDetailComponent extends Component
{
    public $slug;
    //mount
    public function mount($slug){$this->slug = $slug;}
    //store in cart shopping
    public function store($product_id,$product_name,$product_price){
        Cart::instance('cart')->add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success_message','Item added in cart');
        return redirect()->route('cart');
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
