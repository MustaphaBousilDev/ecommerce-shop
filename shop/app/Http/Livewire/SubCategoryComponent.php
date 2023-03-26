<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Category;
use App\Models\Image;
use Cart;
class SubCategoryComponent extends Component{
    use WithPagination;
    //sorting
    public $pageSize=15;
    public $orderBy='Default Sorting'; 
    public $slug;

    //mount 
    public function mount($slug){
        $this->slug=$slug;
    }

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


    public function render(){
        $subbcategory=SubCategory::where('slug',$this->slug)->first();
        $subcategory_id=$subbcategory->id;
        $subcategory_name=$subbcategory->name;
        //get all  
        $products =Product::where('sub_category_id',$subcategory_id)->with('tags')->where('status',1)->paginate($this->pageSize);
        $images = Image::all();
        if($this->orderBy=='Date'){
            $products =Product::where('sub_category_id',$subcategory_id)->with('tags')->where('status',1)->orderBy('created_at','DESC')->paginate($this->pageSize);
        }
        if($this->orderBy=='Price'){
            $products =Product::where('sub_category_id',$subcategory_id)->with('tags')->where('status',1)->orderBy('sale_price','ASC')->paginate($this->pageSize);
        }
        if($this->orderBy=='Price-High-Low'){
            $products =Product::where('sub_category_id',$subcategory_id)->with('tags')->where('status',1)->orderBy('sale_price','DESC')->paginate($this->pageSize);
        }
        if($this->orderBy=='A-Z'){
            $products =Product::where('sub_category_id',$subcategory_id)->with('tags')->where('status',1)->orderBy('name','ASC')->paginate($this->pageSize);
        }
        if($this->orderBy=='Z-A'){
            $products =Product::where('sub_category_id',$subcategory_id)->with('tags')->where('status',1)->orderBy('name','DESC')->paginate($this->pageSize);
        }
        $categories=Category::with('subcategories')->where('status',1)->whereNull('deleted_at')->orderBy('name','ASC')->get();
        return view('livewire.sub-category-component',['products'=>$products,'categories'=>$categories,'subcategory_name'=>$subcategory_name,'images'=>$images]);
    }
}
