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
            <span style="padding-top: 20px;">{!! $data->withQueryString()->links('pagination::bootstrap-5') !!}</span>
            
        </div>
        <div class="btn-box">
            <a href="{{url('all_product')}}">
            View All products
            </a>
    </div>
    </div>
</section>
