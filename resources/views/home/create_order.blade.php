<!DOCTYPE html>
<html>
    <head>
    <!-- Basic -->
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
    <link rel="stylesheet" type="text/css" href="home/css/order_form.css" />
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

        <div class="container">
            <div class="title">
                <h2>Product Order Form</h2>
            </div>

            @if (session()->has('message'))
            <div class="alert alert-success" >
                <button type="button" class="close" data-dismiss="alert"
                aria-hidden="true" >x</button>
                {{session()->get('message')}}
            </div>
            @elseif(session()->has('error_message'))
            <div class="alert alert-danger" >
              <button type="button" class="close" data-dismiss="alert"
              aria-hidden="true" >x</button>
              {{session()->get('error_message')}}
            </div>

                
            @endif

            



          <div class="d-flex">
            <form action="{{url('/created_order')}}" method="post">
                @csrf
              <label>
                <span class="fname">First Name <span class="required">*</span></span>
                <input type="text" name="fname" required>
              </label>
              <label>
                <span class="lname">Last Name <span class="required">*</span></span>
                <input type="text" name="lname" required>
              </label>
              <label>
                <span>Street Address <span class="required">*</span></span>
                <input type="text" name="houseadd" placeholder="House number and street name" required>
              </label>
              <label>
                <span>Phone<span class="required">*</span></span>
                <input type="tel" name="phone" required> 
              </label>
              <label>
                <span>Email Address <span class="required">*</span></span>
                <input type="email" name="email" required> 
              </label>
              <label>
                <span>Product code<span class="required">*</span></span>
                <input type="text" name="code" required> 
              </label>
              <label>
                <span>Town / City <span class="required">*</span></span>
                <input type="text" name="city" required> 
              </label>

              <input type="submit" class="btn btn-primary" value="Place Order">
            </form>
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