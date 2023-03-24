<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
//category
use App\Models\Category;
//subcategory 
use App\Models\SubCategory;
//brands
use App\Models\Brands;


class User extends Model
{
    use HasFactory;
    //fullable 
    protected $fillable=['username','email','password','phone'];
    //hidden
    protected $hidden=['password'];
    
    //one to many relationship with brands
    public function brands(){
        return $this->hasMany(Brands::class,'user_id','id');
    }
    //one to many relationship with category
    public function category(){
        return $this->hasMany(Category::class,'user_id','id');
    }
    //one to many relationship with subcategory
    public function subcategory(){
        return $this->hasMany(SubCategory::class,'user_id','id');
    }
    

}
