<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Image;
//color
use App\Models\Color;
//size
use App\Models\Size;
use Cart;

class ProductDetailComponent extends Component
{
    public $slug;
    public $qty;

    public $size_id=5;
    public $color_id=7;
    
    
    //check if $size_id checked 
    

    //mount
    public function mount($slug){
        $this->slug = $slug;
        $this->qty = 1;
        
    }
    //store in cart shopping
    public function store($product_id,$product_name,$product_price){
        Cart::instance('cart')->add($product_id,$product_name,$this->qty,$product_price)->associate('App\Models\Product');
        $product=Cart::instance('cart')->content();
        //go to items in variable product
        foreach($product as $item){
            if($item->id==$product_id){
                $rowId=$item->rowId;
                $product=Cart::instance('cart')->get($rowId);
                $product->size=$this->size_id;
                $product->color=$this->color_id;
                break;
            }
        }
        //dd($product);
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
        
        $product = Product::with('tags')->with('sizes')->where('slug',$this->slug)->first();
        //slider product 
        //$sliderProducts=Product::where('sub_category_id',$product->sub_category_id)->inRandomOrder()->limit(10)->get();
        $nporduct=Product::latest()->take(4)->get();
        $images = Image::all();
        $colors=Color::where('status',1)->whereNull('deleted_at')->get();
        $sizes=Size::where('status',1)->whereNull('deleted_at')->get();
        return view('livewire.product-detail-component',['product'=>$product,'images'=>$images,'colors'=>$colors,'sizes'=>$sizes]);
    }
}
