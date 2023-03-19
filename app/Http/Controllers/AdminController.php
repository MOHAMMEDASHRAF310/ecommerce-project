<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view_category(){

        $data=Category::all();

        return view('admin.category',compact('data'));
    }
    public function add_category(Request $request){
        $data=new Category();
        $data->category_name=$request->name;
        $data->save();
        return redirect()->back()->with('message','Category Name Added Successfully');
    }
    public function delete_category($id){
        $data=Category::find($id);
        $data->delete();
        return redirect()->back()->with('message','Category Name Deleted Successfully');

    }

    public function Product(){
        $category=Category::all();
        return view('admin.product',compact('category'));
    }





    public function Add_Product(Request $request){
        $product=new Product();
        $product->title=$request->title;
        $product->describtion=$request->describtion;
        $product->price=$request->price;
        $product->discount_price=$request->discount_price;
        $product->quantity=$request->quantity;
        $product->category=$request->category;
        $product->product_code=$request->product_code;



        // for save image in database
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('image_product',$imagename);

        $product->image=$imagename;

        $product->save();
        
        return redirect()->back()->with('message','Product Added Successfully');
    }



    public function show_product(){
        $data=Product::all();

        return view('admin.show_product',compact('data'));
    }




    public function delete_product($id){
        $data=Product::find($id);
        $data->delete();
        return redirect()->back()->with('message','Product Deleted Successfully');
    }
    public function update_product(Request $request,$id){
        $product=Product::find($id);
        $category=Category::all();
        return view('admin.update_product',compact('product','category'));
    }

    public function update_prodect_confirm(Request $request,$id){
        $product=Product::find($id);
        $product->title=$request->title;
        $product->describtion=$request->describtion;
        $product->price=$request->price;
        $product->discount_price=$request->discount_price;
        $product->quantity=$request->quantity;
        $product->category=$request->category;
        $product->product_code=$request->product_code;

        $image=$request->image;
        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('image_product',$imagename);
    
            $product->image=$imagename;
        }


        $product->save();
        return redirect()->back()->with('message','Product Updated Successfully');
    }
    public function admin_body(){
        $data=Order::all();
        return view('admin.parts.body',compact('data'));
    }
}
