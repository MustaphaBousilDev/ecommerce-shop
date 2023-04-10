<?php

namespace App\Http\Livewire;

use Livewire\Component;
//pagination 
use Livewire\WithPagination;
//products
use App\Models\Product;
//images 
use App\Models\Image;
class ShopComponent extends Component
{
    //pagination
    use WithPagination;
    public function render()
    {
        //get all products with tags and status = 1 and paginate 12
        $products =Product::with('tags')->where('status',1)->paginate(16);
        
        //get all images
        $images = Image::all();
        return view('livewire.shop-component',['products'=>$products,'images'=>$images]);
    }
}
