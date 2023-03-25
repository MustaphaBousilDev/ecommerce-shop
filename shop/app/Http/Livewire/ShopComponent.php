<?php

namespace App\Http\Livewire;

use Livewire\Component;
//pagination 
use Livewire\WithPagination;
//products
use App\Models\Product;
//images 
use App\Models\Image;
use Cart;
class ShopComponent extends Component
{
    //pagination
    use WithPagination;


    //store in cart shopping 
    public function store($product_id,$product_name,$product_price){
        Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success_message','Item added in cart');
        return redirect()->route('cart');
    }

    //render 
    public function render(){
        //get all products with tags and status = 1 and paginate 12
        $products =Product::with('tags')->where('status',1)->paginate(16);
        
        //get all images
        $images = Image::all();
        return view('livewire.shop-component',['products'=>$products,'images'=>$images]);
    }
}
