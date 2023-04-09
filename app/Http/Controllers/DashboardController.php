<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\brand;
use App\Models\category;
use App\Models\order_item;
use App\Models\product;
use App\Models\sub_cates;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    //for dsahboard
  public  function dashboard(){
    $order = DB::select("SELECT * from orders inner join clients on orders.user_id = clients.user_id 
    INNER JOIN  customers on clients.user_id = customers.user_id where orders.status = 0");
    // $cus = DB::select("SELECT * from customers");
    return view('dashboard.dashboard',compact('order'));
  }
 
    //fore register
    public function register_dashboard(){
        return view('dashboard.signup');
    }

    public function register_action(Request $req){
        $req->validate([
            'admin_name' =>'required| max:30',
            'email'=>'required| max:40',
            're_email'=>'required | same:email',
            'pass'=>'required|  max:40 ',
            're_pass'=>'required|  same:pass',
            'gender'=>'required',
            'age'=>'required',
            'img'=>'required | mimes:png,jpeg,jpg'
            

        ]);
        //Four Image
        $img = $req['img'];
        $name = $img->getClientOriginalName();
        $name =  Str::random(5).'__'.$name;
        $img->move('admin_img',$name);



        $login = new admin;
        $login->admin_name = $req->admin_name;
        $login->admin_gmail =  $req->email;
        $login->admin_pass = $req->pass;
        $login->admin_Gender =  $req->gender;
        $login->admin_age = $req->age;
        $login->admin_img = $name;
        $login->save();
        if($login){

            return redirect('/dashboard_login');
        }
        else{
            echo "<script>alert('this is error')</script>";
        }



        
    }
     //for login
  public function login_dahboard(){
    return view('dashboard.logins');
  }

    public function login_action(Request $req){
        $req->validate([
            'admin_email'=>'required',
            'admin_pass'=>'required'
            
        ]);


        $sql = DB::select("SELECT * from `admins` where `admin_gmail`=? and `admin_pass` =? ",[
            $req->admin_email,$req->admin_pass
        ]);
            
        
        
        if ($sql != null){
            
            session()->put('email',$req['admin_email']);
            session()->put('name',$sql[0]->admin_name);
            session()->put('role',$sql[0]->admin_role);
            session()->put('img',$sql[0]->admin_img);
            return redirect('/dashboard');
            
        }

            session()->flush('not_login','PLease Try Again You Are Not Admin');
            return redirect('/dashboard_login');


        

    }
    public function admin_profile(){
        return view('dashboard.profile');
    }
    public function order_list(Request $req,$id){

        $db = DB::update("UPDATE  `orders` set `status` =  1 where order_id = $id ");
        return redirect('/dashboard');
        
   }
    public function admin_logout(){
        session()->forget('email');
        session()->forget('name');
        session()->forget('img');
        session()->forget('role');
        session()->forget('cus_id');
        
        return redirect('/dashboard');
    }
    //for add product in dashboard
    public function add_product(){
        $sub_cate = sub_cates::all();
        return view ('dashboard.product.product_insert',compact('sub_cate'));
    }
    public function product_action(Request $rreq){
        $rreq->validate([
            'p_name'=>'required | max:30' ,
            'short_desc'=>'required | max:50',
            'long_desc'=>'required | max:100',
            'img'=>'required | image | mimes:png,jpg',
            'price'=>'required',
            'sub_cate'=>'required'
        ]);

        $img = $rreq['img'];
        $name = $img->getClientOriginalName();
        $name = Str::random(5).'__'.$name;
        $img->move('p_images',$name);

        $product = new product;
        $product->p_name = $rreq->p_name;
        $product->p_short_desc =$rreq->short_desc;
        $product->p_long_desc = $rreq->long_desc;
        $product->p_price = $rreq->price;
        $product->p_img = $name;
        $product->sub_cate = $rreq->sub_cate;
        $product->save();



        if($product){
            return redirect('/product');

        }
        else{
            return redirect('/product/insert');

        }
        
    }
    public function product_list(){
        $product = DB::select("SELECT * from products INNER JOIN sub_cates on products.sub_cate=sub_cates.sub_cate_id 
        INNER JOIN categories on sub_cates.cate_id = categories.cate_id ");
        return view('dashboard.product.product_list',compact('product'));
    }
    public function product_edit($id){
        $p = product::find($id);
        // $c = category::all();
        $s = sub_cates::all();
        return view('dashboard.product.product_edit',compact('p','s'));
    }
    public function product_update(Request $req,$id){
        $product =  product::find($id);
       if($product){

           
           $img =  $req->img;
        if($img != null){
            $img = $req['img'];
            $name = $img->getClientOriginalName();
            $name = Str::random(5).'__'.$name;
            $img->move('p_images',$name);
            unlink('p_images/'.$req->old_img);
        }
        else{
            $name = $req->old_img;
        }
        $product->p_name = $req->p_name;
        $product->p_short_desc = $req->short_desc;
        $product->p_long_desc = $req->long_desc;
        $product->p_price = $req->price;
        $product->sub_cate = $req->cate;
        $product->p_img = $name;
        $product->save();
        return redirect('/product');
    }
    return redirect('/product');
        


    }
    public function product_delete($id){
        $del = product::find($id);
        $del->delete();
        if(isset($del)){
            return redirect('/product');
        }
        else{
            return redirect('/product');

        }
    }



    //for caegory insert 
    public function cate_insert(){
        return view('dashboard.category.cate_insert');
    }
    //for action methode of  category
    public function cate_action(Request $request){
        $request->validate([
            'cate_name'=>'required | max:20'


        ]);
        $insert = new category;
        $insert->cate_name = $request['cate_name'];
        $insert->save();
        if(isset($insert)){
           
           return redirect('/cate');
        }
        else{
           
           return redirect('/cate/insert');
        }
        
        
    }
    //category list
    public function cate_list(){
        $cate = category::all();
        return view('dashboard.category.cate_list',compact('cate'));
    }
    //for category edit
    public function cate_edit($id){
        $cates = category::find($id);
        return view('dashboard.category.cate_edit',compact('cates'));
    }
    //for cate_update
    public function cate_update($id,Request $req){
        $req->validate([
            'update_cate' => 'required'
    ]);
    $cate = category::find($id);

    $cate->cate_name = $req->update_cate;
    $cate->save();
    if(isset($cate)){
        return redirect('/cate');
    }
    else{
        return redirect('/cate');
    }
    }
    //cate delete
    public function cate_delete($id){
        $del = DB::delete("DELETE from `categories` where  `cate_id` = $id");
        if(isset($del)){
            return redirect('/cate');
        }
        else{
            return redirect('/cate');

        }
    }

    //for sub_Cates

    public function subcate_insert(){
        $cate = category::all();
        
        return view('dashboard.sub_category.sub_cate_insert',compact('cate'));
    }
    public function subcate_action(Request $req){
        $req->validate([
            'subcate' =>'required | max:30',
            'cate' =>'required '
        ]);

        $sub_cate = new sub_cates;
        $sub_cate->sub_cate_name = $req->subcate;
        $sub_cate->cate_id = $req->cate;
        $sub_cate->save();
        if(isset($sub_cate)){
            return redirect('/subcate');
        }
        else{
            return redirect('/subcate');

        }
        
    }
    public function subcate_list(){
        $sub_cate = DB::select("SELECT * from `sub_cates` inner join  `categories` on sub_cates.cate_id = categories.cate_id");
        return view('dashboard.sub_category.subcate_list',compact('sub_cate'));
    }
    public function subcate_edit($id){
        $sub_cate = sub_cates::find($id);
        $cate = category::all();
        return view('dashboard.sub_category.sub_cate_edit',compact('sub_cate','cate','id'));
    }
    public function subcate_update(Request $req,$id){
        $cate = sub_cates::find($id);
        $cate->sub_cate_name = $req->sub_cate;
        $cate->cate_id = $req->cate;
        $cate->save();
        if($cate){
            return redirect('/subcate');
        }
        else{
            return redirect('/subcate');

        }
    }
    public function subcate_delete($id){
        $del = sub_cates::find($id);
        $del->delete();
        if(isset($del)){
            return redirect('/subcate');
        }
        else{
            return redirect('/subcate');

        }
    }


    
}
?>