<!DOCTYPE html>
<html lang="en">
    <base href="/public">
@include('admin.parts.css')
<style type="text/css">
.div_center{
    text-align: center;
    
}

.header_font{
    font-size: 50px;
    margin-bottom: 30px;

}
.color{
    color: black;
    padding-bottom: 25px;
}
label{
    display: inline-block;
    width: 200px;
}
.div_design{

    padding-bottom: 20px;
}
</style>

<body>
    <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.parts.sidebar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.inc.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                @if (session()->has('message'))
                <div class="alert alert-success" >
                    <button type="button" class="close" data-dismiss="alert"
                    aria-hidden="true" >X</button>
                    {{session()->get('message')}}
                </div>
                    
                @endif


                <div class="div_center">
                    <h2 class="header_font">Update Product</h2>
                    <!-- enctype="multipart/form-data": it for image file -->
                    <form action="{{url('/update_prodect_confirm',$product->id)}}"  method="post" enctype="multipart/form-data" >
                        @csrf
                        <div class="div_design">
                        <label for="">Product title</label>
                        <input type="text" value="{{$product->title}}" required class="color" name="title" placeholder="Enter Product title"  id="">
                        </div>
                        <div class="div_design">
                        <label for=""> Product Dsecribtion</label>
                        <input type="text" value="{{$product->describtion}}" required class="color" name="describtion" placeholder="Enter Product Dsecribtion"  id="">
                        </div>
                        <div class="div_design">
                        <label for=""> Product Price</label>
                        <input type="number"value="{{$product->price}}"  required class="color" name="price" placeholder="Enter Product Price"  id="">
                        </div>
                        <div class="div_design">
                        <label for=""> Product Discount Price</label>
                        <input type="number" value="{{$product->discount_price}}" class="color" name="discount_price" placeholder="Enter Product Discount Price"  id="">
                        </div>
                        <div class="div_design">
                        <label for=""> Product Quantity</label>
                        <input type="number" value="{{$product->quantity}}" required class="color" name="quantity" placeholder="Enter Product Quantity"  id="">
                        </div>
                        <div class="div_design">
                        <label for=""> Product Code</label>
                        <input type="text" value="{{$product->product_code}}" required class="color" name="product_code" placeholder="Enter Product Quantity"  id="">
                        </div>

                        <div class="div_design">
                            <label >Product Category</label>
                            <select class="color"  name="category" >
                                <option value="{{$product->category}}" selected="">{{$product->category}}</option>
                                @foreach ($category as $item)
                                    <option value="{{$item->category_name}}">{{$item['category_name']}}</option>
                                @endforeach
                                
                            </select>
                        </div>

                        <div class="div_design">
                        <label for=""> Product Image</label>
                        <input type="file" value="{{$product->image}}"  class="color"  name="image" placeholder="Enter Product Image"  id="">
                        </div>
                        

                        <div>
                            <input type="submit" value="Update Product" class="btn btn-success">
                        </div>
                    </form>
                </div>


            </div>
        </div>

        <!-- container-scroller -->
    <!-- plugins:js -->

    @include('admin.parts.scripts')
    
    </body>
</html>