<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <base href="/public">
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />


      <style>
         .img_size{
            width: 90%;
            margin: auto;
         }
      </style>
   </head>
   <body>
         <!-- header section strats -->
      <div class="hero_area">
        @include('home.inc.header')
        <!-- end header section -->

        <div class="col-sm-6 col-md-4 col-lg-4" style="margin:auto;width:50%;padding:30px;">
             <div class="img-box">
             <img class="img_size" src="/image_product/{{$data->image}}" alt="">
             </div>
             <div class="detail-box">
                 <h5>
                     <b>Product name :   </b> {{$data->title}}
                 </h5>
                 @if ($data->discount_price>0)
                 <h6 style="color:blue;">
                  <b>Price after Discount :</b>  {{$data->discount_price}}$
                 </h6>

                 <h6 style="text-decoration: line-through; color:red;">
                  <b>Price :</b> {{$data->price}}$
                 </h6>
                     
                 @else
                 <h6 style="color:blue;">
                     <b>Price :</b>  {{$data->price}}$
                 </h6>
                     
                 @endif
               <h6>
                  <b>Product Code :</b>  {{$data->product_code}}
               </h6>
               <h6>
                  <b>Category :</b>  {{$data->category}}
               </h6>
               <h6>
                  <b>Product Details :</b>  {{$data->describtion}}
               </h6>

               @if ($data->quantity>0)
               <h6>
                  <b>Available :</b>  {{$data->quantity}}
               </h6>
               <a href="{{url('create_order')}}"class="btn btn-primary">Add to Card</a>
               @else
               <h5> out of <b>Stock</b> </h5>
                   
               @endif



             </div>
         </div>
     </div>

      <!-- footer start -->
      @include('home.inc.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>