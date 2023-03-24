<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\ProductDetailComponent;
use App\Http\Livewire\WishlistComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\Auth\LoginComponent;
use App\Http\Livewire\Auth\RegisterComponent;
//Dashboard 
use App\Http\Livewire\Admin\DashboardComponent;
//controller 
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\auth\LoginController;

//category
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\SubCategoryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




 



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//user side routes
Route::get('/',HomeComponent::class)->name('home');
Route::get('/shop',ShopComponent::class)->name('shop');
Route::get('/cart',CartComponent::class)->name('cart');
Route::get('/product-details',ProductDetailComponent::class)->name('product.details');
Route::get('/wishlist',WishlistComponent::class)->name('product.wishlist');
Route::get('/contact',ContactComponent::class)->name('contact');
Route::get('/checkout',CheckoutComponent::class)->name('checkout');
Route::get('/login',LoginComponent::class)->name('login');
Route::post('/login-user',[LoginController::class,'loginUser'])->name('login.user');
Route::get('/register',RegisterComponent::class)->name('register');
Route::post('/register-user',[RegisterController::class,'register_user'])->name('register.user');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');


//dashboard 
Route::get('/admin/dashboard',DashboardComponent::class)->name('admin.dashboard')->middleware('admin.auth');
//category
Route::get('admin/category',[CategoryController::class,'index'])->name('category');
Route::post('admin/add-category',[CategoryController::class,'store'])->name('category-add');
Route::post('admin/category',[CategoryController::class,'show'])->name('category-show');
Route::post('/category-update',[CategoryController::class,'update'])->name('category-update');
Route::post('/category-delete',[CategoryController::class,'delete'])->name('category-delete');
Route::POST('/category',[CategoryController::class,'search'])->name('category-search');

//subcategory
Route::get('admin/subcategory',[SubCategoryController::class,'index'])->name('subcategory');
Route::post('admin/add-subcategory',[SubCategoryController::class,'store'])->name('subcategory-add');
Route::post('admin/subcategory',[SubCategoryController::class,'show'])->name('subcategory-show');
Route::post('/subcategory-update',[SubCategoryController::class,'update'])->name('subcategory-update');
Route::post('/subcategory-delete',[SubCategoryController::class,'delete'])->name('subcategory-delete');
Route::POST('/subcategory',[SubCategoryController::class,'search'])->name('subcategory-search');




