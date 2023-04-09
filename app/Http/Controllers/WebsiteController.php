<?php

namespace App\Http\Controllers;

use App\Models\client;
use App\Models\customer;
use App\Models\p_review;
use App\Models\product;
use App\Models\review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class WebsiteController extends Controller
{
    public function main(){
        $select = DB::select("SELECT * from `products` WHERE `p_price` LIKE 100 ;");
        return view('website.main',compact('select'));
    }
    
    //for login system
    public function login(){
        return view('website.login');
    }

    //for user_Login
    


    public function insert(Request $req){
        $req->validate([
            'user_email'=>'required',
            'user_pass'=>'required'
        ]);

        $login = DB::select('SELECT * from `clients` where `user_email`=? and `user_password`=?',[
            $req->user_email,$req->user_pass
        ]);
        if($login != null){
            session()->put('user_id',$login[0]->user_id);
            session()->put('user_email',$req->user_email);
            session()->put('user_name',$login[0]->user_name);
            session()->put('user_img',$login[0]->user_img);
            return redirect('/');
        }
        else{
            session()->flash('error','Your Password and Email are Incorrect!');
            return redirect('/login');


            
        }
        
    }
    //for register 
    public function register(){
        return view('website.register');
    }
    public function submit(Request $req){
        
        $req->validate(
           [
            'reg_f_name'=>'required| max:30',
            'reg_l_name'=>'required| max:30',
           'reg_username'=>'required | max:30',
           'reg_email'=>'required | max:50',
           'reg_con_email'=>'required | same:reg_email',
           'reg_pass'=>'required | max:45',
           'reg_con_pass'=>'required | same:reg_pass',
           'reg_country'=> 'required ',
           'reg_mobile'=>'required | max:45',
           'reg_gender'=> 'required ',
           'reg_img'=>'required | mimes:jpg,png,jpeg  ',
           'reg_address'=>'required | max:100'
   
   
       ]);
       //for image 
       $img = $req->reg_img;
       $name = $img->getClientOriginalName();
       $name = Str::random(5).$name;
       $img->move('user_img',$name);
   
       $user = new client;
       $user->first_name = $req->reg_f_name;
       $user->last_name = $req->reg_l_name;
       $user->user_name = $req->reg_username;
       $user->user_email = $req->reg_email;
       $user->user_password = $req->reg_pass;
       $user->user_country = $req->reg_country;
       $user->user_mobile_no = $req->reg_mobile;
       $user->user_Address = $req->reg_address;
       $user->user_Gender = $req->reg_gender;
       $user->user_img = $name;
       $user->user_token = $req->_token;
       $user->save();
     
    return redirect('/login');
   
   
         
       

   }


   //for logout
   public function logout(){
        session()->forget('user_email');
        session()->forget('user_name');
        session()->forget('user_img');
        session()->forget('cart');
        session()->forget('c_id');
        return redirect('/');
   }

   //for profile
   public function profile(){
    return view('website.profile');
   }


   //for about page
   public function about(){
    return view('website.about');
   }

   //for contact page
   public function contact(){
    return view('website.contact');
   }


  



   //product
   public function product(){
    $p = product::all();
    return view('website.product.product',compact('p'));
   }
   //single product
   public function single_product($id){
    $product = product::find($id);
    return view('website.product.single_product',compact('product'));
   }
//    public function single_product_2($id){
//     $product = product::find()
//    }


   //for wishlist page of products
   public function wishlist(){
    return view('website.product.wishlist');
   }
    //for cart
    public function cart_action(product $products){
       
        $cart = session()->get('cart');

        if(!$cart){
            $cart = [
                $products->p_id =>[
                    'name'=> $products->p_name,    
                    'img'=> $products->p_img,    
                    'price'=> $products->p_price,    
                    'quantity'=> 1,    
                ]
                
            ];
            session()->put('cart',$cart);
            return redirect('/cart');
            
        }

        if(isset($cart[$products->p_id])){
            $cart[$products->p_id]['quantity']++;
            session()->put('cart',$cart);
            return redirect('/cart');
        }

            $cart[$products->p_id] = [
            'name'=> $products->p_name,    
            'img'=> $products->p_img,    
            'price'=> $products->p_price,    
            'quantity'=> 1,    
            ];



        session()->put('cart',$cart);
        return redirect('/cart');

        // return view('website.product.cart',compact('id'));
       }
    
       public function cart(){

            // session()->flush();
            $cart = session()->get('cart');
            return view('website.product.cart',compact('cart'));
            // print_r(session()->get('cart'));
            
            // return view('website.product.cart',compact('cart'));
       }
       public function remove_cart($id){
        
            $cart = session()->get('cart');
            if(isset($cart[$id])){

                unset($cart[$id]);
            session()->put('cart',$cart);
            return redirect('/cart');
            }
       }

       public function checkout(){
        $id = session()->get('user_id');
        
        $c = DB::select("SELECT * from customers where user_id = $id");

        // $c =  customer::find($id);
        // session()->put('cus_id',$c['cus_id']);
       

        
               
              

        
        
        return view('website.product.checkout',compact('c'));
        
        // $c_id = session()->put('cid',$checkout->cus_id);

       }
       public function checkout_action(Request $req){
        
        $req->validate([
            'f_name'=>'required',
            'l_name'=>'required',
            'email'=>'required',
            'city'=>'required',
            'country'=>'required',
            'address'=>'required',
            'phone'=>'required'
        ]);
        
        $id = session()->get('user_id');    
        $d = DB::select("SELECT * from customers where user_id = $id");
        if($d){
            $sel = customer::find($id);
            // if(!session()->has('cus_id')){

            //      session()->put('cus_id',$sel->cus_id);
            // }
            // $update = DB::update("UPDATE `customers` set `cus_f_name` ='$req->f_name',`cus_l_name` = '$req->l_name',`cus_email` = '$req->email',`cus_country` = '$req->country',`cus_address` = $req->address,`cus_city` = $req->city,`cus_phone` = $req->phone,`user_id` = $id where user_id = $id");
            $insert = new customer;
            $insert->cus_f_name = $req->f_name;
            $insert->cus_l_name = $req->l_name;
            $insert->cus_email = $req->email;
            $insert->cus_country = $req->country;
            $insert->cus_address = $req->address;
            $insert->cus_city = $req->city;
            $insert->cus_phone = $req->phone;
            $insert->user_id = $id;
            $insert->save();
            if($insert){
                
                return redirect('/order    ');
                
               }
            
        }
        else{

            
            
             $insert = new customer;
             $insert->cus_f_name = $req->f_name;
             $insert->cus_l_name = $req->l_name;
             $insert->cus_email = $req->email;
             $insert->cus_country = $req->country;
             $insert->cus_address = $req->address;
             $insert->cus_city = $req->city;
             $insert->cus_phone = $req->phone;
             $insert->user_id = session()->get('user_id');
             $insert->save();
             if($insert){
                 
                 return redirect('/order    ');
                 
                 
                }
            }
                
                
            }

            //dor order
            public function order(){
        $customer = customer::all();
        // session()->put('cus_id',$customer[0]->cus_id);
        $cart = session()->get('cart');
        return view('website.product.order',compact('cart'));
       }

       public function bookorder(Request $req){

       $orderstatus =  DB::insert("insert into orders(total,user_id) values(?,?)",[
                session()->get('total'),session()->get('user_id') ]);

                if($orderstatus){

                    $order = Db::select("select * from orders order by order_id DESC limit 1");

                    $cart = session()->get('cart');

                    foreach ($cart as $item => $products){
                        
            Db::insert("insert into order_items(order_item_quantity,order_item_price,order_id,product_id) values(?,?,?,?)",[
                $products['quantity'],$products['price'],$order[0]->order_id,$item]);
            }
            
            session()->flash('submit',
            'Your Order is Booked
            And Your Order Will be Deliever in  5 Working Days
            '
        );
           



                }
                return redirect('/slip');

       }
       public function slip(){
           return view('website.product.slip');
        }
        public function slip_action(){
            session()->forget('cart');
            return redirect('/');
        }

       //for reviews
       public function review_insert(){
        return view('website.review.review_insert');
       }
       //for P_r
       public function p_r_update(Request $req,$id){
            $id = product::find($id);
            session()->put('r_p', $id->p_id);
              
            echo session()->get('r_p');
            // $req->validate([
            //     'p_r'=>'required'
            // ]);

            // $insert = new p_review;
            // $insert->p_id = session()->get('r_p');
            // $insert->name = session()->get('user_name');
            // $insert->img = session()->get('user_img');
            // $insert->review = $req->p_r;
            // if($insert){
            //     return redirect('/single_product/{id}');
            // }
            // else{
            //     return redirect('/single_product/{id}');

            // }

            
       }
     
       public function review_action(Request $req){
            $req->validate([
                'review'=>'required '
            ]);
        $email=   session()->get('user_email');
        $name =     session()->get('user_name');
        $img =    session()->get('user_img');

        $insert = new review;
        $insert->user_name = $name;
        $insert->user_email = $email;
        $insert->user_img = $img;
        $insert->review = $req->review;
        $insert->save();
        if($insert){
            return redirect('/review');
        }
        else{
            return redirect('/review/insert');

        }
     
       }
       public function review_list(){
        $review = review::all();
        return view('website.review.review_list',compact('review'));
       }
       public function order_list(Request $req, $id){
            $db = DB::update("UPDATE table `order_items` set `order_item_quantity` = 1 ");
            if($db){
                return redirect('/dashboard');
            }
       }

       //for update the cart in the webiste
       public function update_cart(Request $req){
        $cart = session()->get('cart');
        $i= 0;
        foreach ($cart as $item => $products) {
            
            $cart[$item]['quantity'] = $req['quantity'][$i];
            $i++;
        }

            session()->put('cart',$cart);
            return redirect('/cart');
       }
    }
    
?>