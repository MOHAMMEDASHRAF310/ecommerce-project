<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data=Product::paginate(3);// paginate(3): means not all data show just 3
        return view('home.userpage',compact('data'));
    }
    public function redirect(){
        $data=Product::paginate(3); // to show just 3 product 
        $product=Product::all();// for compare between the product num and product num in orders
        $usertype=Auth::user()->usertype;
        $datas=Order::all(); // for compare between the product num and product num in orders
        if($usertype=='1'){
            return view('admin/home',compact('datas','product'));
        }
        else{
            return view('home.userpage',compact('data','product'));
        }


    }
    public function product_details($id)
    {
        $data=Product::find($id);
        return view('home.product_details',compact('data'));
    }

    public function create_order(){
        $data=Product::all();
        return view('home.create_order',compact('data'));
    }


    public function created_order(Request $request)
    {
        $order=new Order();
        $data=Product::all();
        foreach($data as $items){
            if($items->product_code==$request->code){
                $order->fname=$request->fname;
                $order->lname=$request->lname;
                $order->email=$request->email;
                $order->address=$request->houseadd;
                $order->phone=$request->phone;
                $order->city=$request->city;
                $order->product_code=$request->code;
        
        
                $order->save();
                return redirect()->back()->with('message','Order Added Successfully The call center will call you later ');        

            }
        }

        return redirect()->back()->with('error_message','Product code incorrect');;
    }


    public function all_products(){
        $data=Product::all();
        return view('home.all_product',compact('data'));
    }

}
