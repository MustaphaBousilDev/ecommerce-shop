<?php

namespace App\Http\Livewire;

use Livewire\Component;
//pagination 
use Livewire\WithPagination;
//products
use App\Models\Product;
//subcategories
use App\Models\SubCategory;
//category 
use App\Models\Category;
//images 
use App\Models\Image;
use Cart;
class ShopComponent extends Component
{
    //pagination
    use WithPagination;
    //sorting
    public $pageSize=15;
    public $orderBy='Default Sorting'; 


    //store in cart shopping 
    public function store($product_id,$product_name,$product_price){
        Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success_message','Item added in cart');
        return redirect()->route('cart');
    }
    //change page size
    public function changePageSize($size){
        $this->pageSize=$size;
    }
    //sorting
    public function changeOrderBy($orderBy){
        $this->orderBy=$orderBy;
    }
    //render 
    public function render(){
        //get all products with tags and status = 1 and paginate 12
        $products =Product::with('tags')->where('status',1)->paginate($this->pageSize);
        
        //get all images
        $images = Image::all();

        //sorting
        if($this->orderBy=='Date'){
            $products =Product::with('tags')->where('status',1)->orderBy('created_at','DESC')->paginate($this->pageSize);
        }
        if($this->orderBy=='Price'){
            $products =Product::with('tags')->where('status',1)->orderBy('sale_price','ASC')->paginate($this->pageSize);
        }
        if($this->orderBy=='Price-High-Low'){
            $products =Product::with('tags')->where('status',1)->orderBy('sale_price','DESC')->paginate($this->pageSize);
        }
        //sorting alpabet
        if($this->orderBy=='A-Z'){
            $products =Product::with('tags')->where('status',1)->orderBy('name','ASC')->paginate($this->pageSize);
        }
        if($this->orderBy=='Z-A'){
            $products =Product::with('tags')->where('status',1)->orderBy('name','DESC')->paginate($this->pageSize);
        }
        //get all categories status = 1 and deleted_at = null with subcategories order by name ASC
        $categories=Category::with('subcategories')->where('status',1)->whereNull('deleted_at')->orderBy('name','ASC')->get();

        return view('livewire.shop-component',['products'=>$products,'images'=>$images,'categories'=>$categories]);
    }
}
