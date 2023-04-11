<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\SubCategoryComponent;
use App\Http\Livewire\ProductDetailComponent;
use App\Http\Livewire\WishlistComponent;
use App\Http\Livewire\ThankYouComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\Auth\LoginComponent;
use App\Http\Livewire\Admin\AdminSaleComponent;
use App\Http\Livewire\Auth\RegisterComponent;
use App\Http\Livewire\User\UserOrderDetailsComponent;
use App\Http\Livewire\User\UserOrdersComponent;
use App\Http\Livewire\Admin\DashboardComponent;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Livewire\Admin\AdminCouponsComponent;
use App\Http\Livewire\Admin\AdminAddCouponsComponent;
use App\Http\Livewire\Admin\AdminEditCouponsComponent;
use App\Http\Livewire\Admin\AdminOrderComponent;
use App\Http\Livewire\Admin\AdminOrderDetailsComponent;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\SubCategoryController;
use App\Http\Controllers\admin\BrandsController;
use App\Http\Controllers\admin\CountryController;
use App\Http\Controllers\admin\CityController;
use App\Http\Controllers\admin\SizeController;
use App\Http\Controllers\admin\ColorController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\ImagesController;
use App\Http\Controllers\admin\SliderComponent;
use App\Http\Livewire\SliderProductComponent;
use App\Http\Livewire\OffresProductsComponent;
use App\Http\Livewire\User\UserChangePasswordComponent;
//review
use App\Http\Livewire\User\UserReviewComponent;
//contact admin 
use App\Http\Livewire\Admin\AdminContactComponent;
//setting 
use App\Http\Livewire\Admin\AdminSettingComponent;
//offre 
use App\Http\Controllers\admin\OffreController;
//profile 
use App\Http\Livewire\User\ProfileComponent;
//users admin 
use App\Http\Livewire\admin\UsersComponent;
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
Route::get('/product-subcategory/{slug}',SubCategoryComponent::class)->name('product.subcategory');
Route::get('/search',SearchComponent::class)->name('search.products');
Route::get('/thankyou',ThankYouComponent::class)->name('thankyou');
//route product detail with slug but parametre not required 
Route::get('/product-details/{slug?}',ProductDetailComponent::class)->name('product.details');
Route::get('/wishlist',WishlistComponent::class)->name('product.wishlist');
Route::get('/contact',ContactComponent::class)->name('contact');
Route::get('/checkout',CheckoutComponent::class)->name('checkout');
Route::get('/login',LoginComponent::class)->name('login');
Route::post('/login-user',[LoginController::class,'loginUser'])->name('login.user');
Route::get('/register',RegisterComponent::class)->name('register');
Route::post('/register-user',[RegisterController::class,'register_user'])->name('register.user');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');


//slider products 
Route::get('/slider-products/{slug}',SliderProductComponent::class)->name('slider.products');


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

//brands
Route::get('admin/brands',[BrandsController::class,'index'])->name('brands');
Route::post('admin/add-brands',[BrandsController::class,'store'])->name('brands-add');
Route::post('/brands',[BrandsController::class,'show'])->name('brands-show');
Route::post('/brands-update',[BrandsController::class,'update'])->name('brands-update');
Route::post('/brands-delete',[BrandsController::class,'delete'])->name('brands-delete');
Route::POST('admin/brands',[BrandsController::class,'search'])->name('brandss-search');
 


//country 
Route::get('admin/country',[CountryController::class,'index'])->name('country');
Route::post('admin/add-country',[CountryController::class,'store'])->name('country-add');
Route::post('admin/country',[CountryController::class,'show'])->name('country-show');
Route::post('/country-update',[CountryController::class,'update'])->name('country-update');
Route::post('/country-delete',[CountryController::class,'delete'])->name('country-delete');
Route::POST('/country',[CountryController::class,'search'])->name('country-search');

//city 
Route::get('admin/city',[CityController::class,'index'])->name('city');
Route::post('admin/add-city',[CityController::class,'store'])->name('city-add');
Route::post('admin/city',[CityController::class,'show'])->name('city-show');
Route::post('/city-update',[CityController::class,'update'])->name('city-update');
Route::post('/city-delete',[CityController::class,'delete'])->name('city-delete');
Route::POST('/city',[CityController::class,'search'])->name('city-search');

//size 
Route::get('admin/size',[SizeController::class,'index'])->name('size');
Route::post('admin/add-size',[SizeController::class,'store'])->name('size-add');
Route::post('admin/size',[SizeController::class,'show'])->name('size-show');
Route::post('/size-update',[SizeController::class,'update'])->name('size-update');
Route::post('/size-delete',[SizeController::class,'delete'])->name('size-delete');
Route::POST('/size',[SizeController::class,'search'])->name('size-search');

//color
Route::get('admin/color',[ColorController::class,'index'])->name('color');
Route::post('admin/add-color',[ColorController::class,'store'])->name('color-add');
Route::post('admin/color',[ColorController::class,'show'])->name('color-show');
Route::post('/color-update',[ColorController::class,'update'])->name('color-update');
Route::post('/color-delete',[ColorController::class,'delete'])->name('color-delete');
Route::POST('/color',[ColorController::class,'search'])->name('color-search');


//product   
Route::get('admin/product',[ProductController::class,'index'])->name('product');
Route::post('admin/add-product',[ProductController::class,'store'])->name('product-add');
Route::post('admin/product/show',[ProductController::class,'show'])->name('product-show');
Route::post('admin/product',[ProductController::class,'show'])->name('product-show');
Route::post('/product-update',[ProductController::class,'update'])->name('product-update');
Route::post('/product-delete',[ProductController::class,'delete'])->name('product-delete');
Route::POST('/product',[ProductController::class,'search'])->name('product-search');

//images
Route::get('admin/images',[ImagesController::class,'index'])->name('images');
Route::post('admin/add-images',[ImagesController::class,'store'])->name('images-add');


//sliders
Route::get('admin/sliders',[SliderComponent::class,'index'])->name('sliders');
Route::post('admin/add-sliders',[SliderComponent::class,'store'])->name('sliders-add');
Route::post('admin/sliders',[SliderComponent::class,'show'])->name('sliders-show');
Route::post('/sliders-update',[SliderComponent::class,'update'])->name('sliders-update');
Route::post('/sliders-delete',[SliderComponent::class,'delete'])->name('sliders-delete');

//Sale
Route::get('admin/sale',AdminSaleComponent::class)->name('admin.sale');



//coupons 
Route::get('admin/coupons',AdminCouponsComponent::class)->name('admin.coupons');
Route::get('admin/add-coupons',AdminAddCouponsComponent::class)->name('admin.add.coupons');
Route::get('admin/edit-coupons/{coupon_id}',AdminEditCouponsComponent::class)->name('admin.edit.coupons');

//orders
Route::get('admin/orders',AdminOrderComponent::class)->name('admin.orders');

//order details
Route::get('admin/order-details/{order_id}',AdminOrderDetailsComponent::class)->name('admin.order.details');

//order user 
Route::get('/user/orders',UserOrdersComponent::class)->name('user.orders');
Route::get('/user/orders/{order_id}',UserOrderDetailsComponent::class)->name('user.order.details');
//review
Route::get('user/review/{order_item_id}',UserReviewComponent::class)->name('user.review');
//change password
Route::get('/user/change-password',UserChangePasswordComponent::class)->name('user.change.password');


//admin contact 
Route::get('admin/contact-us',AdminContactComponent::class)->name('admin.contact-us');

//admin setting 
Route::get('admin/setting',AdminSettingComponent::class)->name('admin.setting');

//offre product 
Route::get('admin/offre',[OffreController::class,"index"])->name('admin.offre');
Route::post('admin/add-offre',[OffreController::class,'store'])->name('offre-add');
Route::post('admin/offre-show',[OffreController::class,'show'])->name('offre-show');
Route::post('/offre-update',[OffreController::class,'update'])->name('offre-update');
Route::post('/offre-delete',[OffreController::class,'delete'])->name('offre-delete');
Route::POST('/offre-search',[OffreController::class,'search'])->name('offre-search');


//offre product
Route::get('offre/product/{offre}',OffresProductsComponent::class)->name('offre.products');
//profile 
Route::get('user/profile',ProfileComponent::class)->name('user.profile');


//users dashboard management 
Route::get('admin/users',UsersComponent::class)->name('admin.users');
