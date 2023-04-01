<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//order 
use App\Models\Order;
class Shipping extends Model
{
    use HasFactory;
    protected $table='shippings';
    //$fillable 
    protected $fillable = [
        'order_id',
        'firstname',
        'lastname',
        'email',
        'phone',
        'line1',
        'line2',
        'province',
        'country',
        'zipcode',
    ];


    public function order(){
        return $this->belongsTo(Order::class);
    }

}
