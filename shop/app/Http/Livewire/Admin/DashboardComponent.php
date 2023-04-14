<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use App\Models\Coupon;
use App\Models\Slider;
use App\Models\Blog;
use App\Models\Setting;
use App\Models\Contact;
use App\Models\Brand;
use App\Models\SubCategory;
use App\Models\Country;
use App\Models\City;
use App\Models\Image;
use App\Models\OrderItem; 
use App\Models\Review;
use App\Models\Shipping;
use App\Models\Sale;
use App\Models\Transaction;



class DashboardComponent extends Component
{
    public $user;
    public function render()
    {
        //gel all user 
        #---------------------------------------------------------------------------------------
        $quantitySale=OrderItem::whereHas('order',function($query){
            $query->where('status','delivered');
        })->sum('quantity');
        #---------------------------------------------------------------------------------------
        $totalSale=Order::where('status','delivered')->sum('total');
        $totalSale=$totalSale/1000;
        $totalSale=substr($totalSale,0,-3);
        #---------------------------------------------------------------------------------------
        $countUser=User::count();
        #---------------------------------------------------------------------------------------
        $totalCancel=Order::where('status','canceled')->sum('total');
        $totalCancel=$totalCancel/1000;
        $totalCancel=substr($totalCancel,0,-3);
        #---------------------------------------------------------------------------------------
        $this->user=User::all();
        #---------------------------------------------------------------------------------------
        //get from orderItem quntity product sale where status delivered
        $products=OrderItem::whereHas('order',function($query){$query->where('status','delivered');})->get();
        $product_id=[];
        //foreach $products get product_id no repeat with all quantity 
        foreach($products as $key=>$product){
            $product_id[$key]['product_id']=$product->product_id;
            $product_id[$key]['quantity']=$product->quantity;
        }
        $product_id2=[];
        for($i=0;$i<count($product_id);$i++){
            for($j=0;$j<count($product_id);$j++){
                if($product_id[$i]['product_id']==$product_id[$j]['product_id']){
                    $product_id2[$i]['product_id']=$product_id[$i]['product_id'];
                    $product_id2[$i]['quantity']=$product_id[$i]['quantity']+$product_id[$j]['quantity'];
                }
            }
        }
        $product_id3=[];
        //i have quantity min and max i will transofm to quantity max 
        for($i=0;$i<count($product_id2);$i++){
            for($j=0;$j<count($product_id2);$j++){
                if($product_id2[$i]['product_id']==$product_id2[$j]['product_id']){
                    if($product_id2[$i]['quantity']>=$product_id2[$j]['quantity']){
                        $product_id3[$i]['product_id']=$product_id2[$i]['product_id'];
                        $product_id3[$i]['quantity']=$product_id2[$i]['quantity'];
                    }
                    else{
                        $product_id3[$i]['product_id']=$product_id2[$j]['product_id'];
                        $product_id3[$i]['quantity']=$product_id2[$j]['quantity'];
                    }
                }
            }
        }
        $product_id3=array_unique($product_id3,SORT_REGULAR);
        $products=collect($product_id3);    
        $dd=[];
        $products=$products->sortByDesc('quantity');
        $products_sale=Product::whereIn('id',$products->pluck('product_id'))->get();
        for($i=0;$i<count($products_sale) - 1;$i++){
            for($j=0;$j<count($products) - 1;$j++){
                if($products_sale[$i]['id']==$products[$j]['product_id']){
                    $products_sale[$i]['quantity']=$products[$j]['quantity'];
                }
            }
        }
        //dd($products_sale);
        #---------------------------------------------------------------------------------------
        return view('livewire.admin.dashboard-component',[
            'user'=>$this->user,
            'quantitySale'=>$quantitySale,
            'totalSale'=>$totalSale,
            'countUser'=>$countUser,
            'totalCancel'=>$totalCancel,
        ])->layout('layouts.base');

    }
}
