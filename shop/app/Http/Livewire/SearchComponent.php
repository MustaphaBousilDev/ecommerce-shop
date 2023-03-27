<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Category;
use App\Models\Image;
use Cart;

class SearchComponent extends Component
{
    use WithPagination;
    public $pageSize=15;
    public $orderBy='Default Sorting'; 
    public $q;
    public $search;
    public function mount(){
        //explain this code 
        //$this->fill($request->only('q') is using for search 
        $this->fill(request()->only('q'));
        $this->search='%'.$this->q.'%';
    }


    //store in cart shopping 
    public function store($product_id,$product_name,$product_price){
        Cart::instance('cart')->add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
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
        $products =Product::with('tags')
          ->where('status',1)
            ->where('name','like',$this->search)
              ->paginate($this->pageSize);
        $images = Image::all();
        //sorting
        if($this->orderBy=='Date'){
            $products =Product::with('tags')->where('status',1)->where('name','like',$this->search)->orderBy('created_at','DESC')->paginate($this->pageSize);
        }
        if($this->orderBy=='Price'){
            $products =Product::with('tags')->where('status',1)->where('name','like',$this->search)->orderBy('sale_price','ASC')->paginate($this->pageSize);
        }
        if($this->orderBy=='Price-High-Low'){
            $products =Product::with('tags')->where('status',1)->where('name','like',$this->search)->orderBy('sale_price','DESC')->paginate($this->pageSize);
        }
        //sorting alpabet
        if($this->orderBy=='A-Z'){
            $products =Product::with('tags')->where('status',1)->where('name','like',$this->search)->orderBy('name','ASC')->paginate($this->pageSize);
        }
        if($this->orderBy=='Z-A'){
            $products =Product::with('tags')->where('status',1)->where('name','like',$this->search)->orderBy('name','DESC')->paginate($this->pageSize);
        }
        $categories=Category::with('subcategories')->where('status',1)->where('name','like',$this->search)->whereNull('deleted_at')->orderBy('name','ASC')->get();

        return view('livewire.search-component',['products'=>$products,'images'=>$images,'categories'=>$categories]);
    }
}
