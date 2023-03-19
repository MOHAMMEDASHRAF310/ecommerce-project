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
      <title>View All Products</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
   </head>
   <body>
         <!-- header section strats -->
        @include('home.inc.header')
        <!-- end header section -->
      <!-- product section -->




      <section class="product_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Our <span>products</span>
                </h2>
            </div>
            <div class="row">
            @foreach ($data as $item)
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="box">
                        <div class="option_container">
                            <div class="options">
                                <a href="{{url('product_details',$item->id)}}" class="option1">
                                    Product Details
                                </a>
                                <a href="{{url('create_order')}}" class="option2">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                        <div class="img-box">
                        <img class="img_size" src="/image_product/{{$item->image}}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                {{$item->title}}
                            </h5>
                            @if ($item->discount_price>0)
                            <h6 style="color:blue;">
                                {{$item->discount_price}}$
                            </h6>
    
                            <h6 style="text-decoration: line-through; color:red;">
                                {{$item->price}}$
                            </h6>
                                
                            @else
                            <h6 style="color:blue;">
                                {{$item->price}}$
                            </h6>
                                
                            @endif
    
                        </div>
                    </div>
                </div>
                @endforeach                
            </div>
        </div>
    </section>
    




      <!-- end product section -->
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