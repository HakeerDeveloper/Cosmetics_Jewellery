<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;
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


//route for website
//Route for main page 
Route::get('/',[WebsiteController::class,'main']);
//for products
Route::get('/products',[WebsiteController::class,'product']);
//for about
Route::get('/about',[WebsiteController::class,'about']);
//for contact page 
Route::get('/contact',[WebsiteController::class,'contact']);
//profile
Route::get('/profile',[WebsiteController::class,'profile']);
//route for review
Route::get('/review/insert',[WebsiteController::class,'review_insert']);
//route for list 
Route::get('/review',[WebsiteController::class,'review_list']);
//register
//login
Route::get('/login',[WebsiteController::class,'login']);
Route::post('/login/insert',[WebsiteController::class,'insert']);
//register 
Route::get('/register',[WebsiteController::class,'register']);
Route::post('/register/insert',[WebsiteController::class,'submit']);


//logout
Route::get('/logout',[WebsiteController::class,'logout']);


//for cart 
// Route::get('/cart/{products}',[WebsiteController::class,'cart_action']);
Route::get('/cart/{products}',[WebsiteController::class,'cart_action'])->middleware('cart');
Route::get('/cart',[WebsiteController::class,'cart'])->middleware('cart');
Route::get('/r_cart/{id}',[WebsiteController::class,'remove_cart']);
Route::post('/update/cart',[WebsiteController::class,'update_cart']);


Route::post('/submit',[WebsiteController::class,'submit']);

//product
//single product page
Route::get('/single_product/{id}',[WebsiteController::class,'single_product']);
 //for slider single product page 
//  Route::get('p_single/{id}',[WebsiteController::class,'single_product_2']);

//for wishlist
Route::get('/wishlist',[WebsiteController::class,'wishlist']);
//for checkout page

Route::get('/checkout',[WebsiteController::class,'checkout']);
Route::post('/checkout/action',[WebsiteController::class,'checkout_action']);
//route for order
Route::get('/order',[WebsiteController::class,'order'])->middleware('order');
Route::post('/bookorder',[WebsiteController::class,'bookorder']);
Route::get('/slip',[WebsiteController::class,'slip'])->middleware('order');
Route::get('/slip/action',[WebsiteController::class,'slip_action'])->middleware('order');


// Route::get('/dd',function(){
//   session()->forget('cart');

// });


// Route::get('/getdata',function(){
//   print_r(session()->get('cart'));
// });

//route for admin_login
// Route::get('/admin_login',[WebsiteController::class,'admin_login']);


//route for  dashboard

//route for login dashboard
Route::get('/dashboard_login',[DashboardController::class,'login_dahboard']);
//route for register admin
Route::get('/dashboard_register',[DashboardController::class,'register_dashboard']);
//route for admin action method for register
Route::post('/admin_login/insert',[DashboardController::class,'register_action']);
//route for admin action method for login
Route::post('/login/check',[DashboardController::class,'login_action']);
//route for logout admin
Route::get('/logout_admin',[DashboardController::class,'admin_logout']);
//route admin profile
Route::get('/admin_profile',[DashboardController::class,'admin_profile']);

Route::get('/dashboard',[DashboardController::class,'dashboard'])->middleware('dashboardAuth','role');

// route for category  
Route::get('/cate/insert',[DashboardController::class,'cate_insert'])->middleware('dashboardAuth','role');
Route::post('/cate/store',[DashboardController::class,'cate_action']);
Route::get('/cate',[DashboardController::class,'cate_list'])->middleware('dashboardAuth','role');
Route::get('cate/edit/{id}',[DashboardController::class,'cate_edit'])->middleware('dashboardAuth','role');
Route::post('/cate/update/{id}',[DashboardController::class,'cate_update']);
Route::get('/cate/delete/{id}',[DashboardController::class,'cate_delete'])->middleware('dashboardAuth','role');

// route for sub_category  
Route::get('/subcate/insert',[DashboardController::class,'subcate_insert'])->middleware('dashboardAuth','role');
Route::post('/subcate/store',[DashboardController::class,'subcate_action']);
Route::get('/subcate',[DashboardController::class,'subcate_list'])->middleware('dashboardAuth','role');
Route::get('subcate/edit/{id}',[DashboardController::class,'subcate_edit'])->middleware('dashboardAuth','role');
Route::post('/subcate/update/{id}',[DashboardController::class,'subcate_update']);
Route::get('/subcate/delete/{id}',[DashboardController::class,'subcate_delete']);



// route for product  
Route::get('/product/insert',[DashboardController::class,'add_product'])->middleware('dashboardAuth','role');
Route::post('/product/store',[DashboardController::class,'product_action']);
Route::get('/product',[DashboardController::class,'product_list'])->middleware('dashboardAuth','role');
Route::get('product/edit/{id}',[DashboardController::class,'product_edit'])->middleware('dashboardAuth','role');
Route::post('/product/update/{id}',[DashboardController::class,'product_update']);
Route::get('/product/delete/{id}',[DashboardController::class,'product_delete']);





//route for review 
Route::post('/review/store',[WebsiteController::class,'review_action']);
//review for products 
Route::post('/submit/p_r/{id}',[WebsiteController::class,'p_r_update']);

Route::get('/order/edit/{id}',[DashboardController::class,'order_list']);


Route::get('/all',function(){
    echo "<pre>";
  print_r(  session()->all());
})

?>