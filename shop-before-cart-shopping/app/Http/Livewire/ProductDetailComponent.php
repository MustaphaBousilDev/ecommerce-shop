<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Image;

class ProductDetailComponent extends Component
{
    public $slug;
    public function mount($slug){
        $this->slug = $slug;
    }
    public function render()
    {
        $product = Product::with('tags')->where('slug',$this->slug)->first();
        //slider product 
        //$sliderProducts=Product::where('sub_category_id',$product->sub_category_id)->inRandomOrder()->limit(10)->get();
        $nporduct=Product::latest()->take(4)->get();
        $images = Image::all();
        return view('livewire.product-detail-component',['product'=>$product,'images'=>$images]);
    }
}
