<!DOCTYPE html>
<html lang="en">
    <style>
        .desing_table{
            margin: auto;
            text-align: center;
            border: 5px solid mediumspringgreen;
            width: 100%;
        }
        .header{
            margin-bottom: 30px;
            text-align: center;
            font-size: 40px;
            margin-top: 30px
        }
        .img_size{
            width: 150px;
            height: 150px;
            margin: auto;
        
        }
        .theader{
            background-color:darkseagreen;
        }
    </style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('admin.parts.css')
    <title>Show Product</title>
</head>
<body>

    <div class="container-scroller">

        {{-- sidebar --}}
        @include('admin.parts.sidebar')
        <div class="container-fluid page-body-wrapper">
        {{-- header --}}
        @include('admin.inc.header')
        <div class="main-panel">
            <div class="content-wrapper">

                @if (session()->has('message'))
                <div class="alert alert-success" >
                    <button onclick="return confirm('are you sure to delete the product ?')" type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}
                </div>
                @endif
                <h2 class="header">View Products</h2>
                <table class="desing_table">
                    <tr class="theader" >
                        <td>Product Code</td>
                        <td>Product title</td>
                        <td>Product Describtion</td>
                        <td>Price</td>
                        <td>Discount Price</td>
                        <td>Category</td>
                        <td>Image</td>
                        <td>Delete</td>
                        <td>Update</td>
                    </tr>
                    @foreach ($data as $item)

                    <tr>
                        <td>{{$item->product_code}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->describtion}}</td>
                        <td>{{$item->price}}$</td>
                        <td>{{$item->discount_price}}$</td>
                        <td>{{$item->category}}</td>
                        <td>
                            <img class="img_size" src="/image_product/{{$item->image}}" alt="">
                        </td>
                        <td><a href="{{url('delete_product',$item->id)}}" class="btn btn-danger">Delete</a></td>
                        <td><a href="{{url('update_product',$item->id)}}" class="btn btn-primary">Update</a></td>


                    </tr>
                        
                    @endforeach


                </table>


            </div>
        </div>
        </div>
    </div>
    

    

    {{-- Scripts --}}
    @include('admin.parts.scripts')
</body>
</html>