<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//soft delete
use Illuminate\Database\Eloquent\SoftDeletes;
//user 
use App\Models\User;
//shipping
use App\Models\Shipping;
//transaction
//product
use App\Models\Product;
use App\Models\Transaction;
//order item
use App\Models\OrderItem;


class Order extends Model
{
    use HasFactory;
    //soft delete
    use SoftDeletes;
    protected $table='orders';
    protected $fillable = [
        'user_id',
        'subtotal',
        'discount',
        'tax',
        'total',
        'firstname',
        'lastname',
        'email',
        'phone',
        'line1',
        'line2',
        'city',
        'province',
        'country',
        'zipcode',
        'status',
        'is_shipping_different',
    ];

    //user
    public function user(){
        return $this->belongsTo(User::class);
    }
    //

    public function shipping(){
        return $this->hasOne(Shipping::class);
    }

    public function transaction(){
        return $this->hasOne(Transaction::class);
    }

    public function orderItems(){
        return $this->hasMany(OrderItem::class);
    }
    //product 
    public function products(){
        return $this->belongsToMany(Product::class,'order_items');
    }


}
