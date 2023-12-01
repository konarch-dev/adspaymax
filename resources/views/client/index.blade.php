<!DOCTYPE html>
<html lang="en">
@include('client/master/header')

<body>
    @include('client/master/navigation')
    @yield('content')
    <div class="slider-section bg padB60">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <!-- nav -->
                    <div class="categoriess">
                        <div class="categorie-section">
                            <h5>all categories <i class="fa fa-bars" aria-hidden="true"></i></h5>
                        </div>

                        <ul class="nav navbar-nav vertical-menu">
                            @foreach ($category as $key => $val)
                                <li>

                                    <a href="/category-list/{{$val->id}}">{{ $val->name }} <i class="fa fa-angle-right"
                                            aria-hidden="true"></i></a>
                                    @php
                                        $tmp = $val->id;
                                    @endphp

                                    <ul class="dropdown-menu">

                                        @foreach ($menu['menu'] as $key => $val)
                                            @foreach ($menu['menu'][$key] as $keys => $vals)
                                                @if ($menu['menu'][$key][$keys]['primary'] == $tmp)
                                                    <li>
                                                        <a
                                                            href="/apmax1/category-list/{{$menu['menu'][$key][$keys]['id']}}">{{ $menu['menu'][$key][$keys]['name'] }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        @endforeach


                                    </ul>

                                </li>
                            @endforeach



                        </ul>

                        <!-- navbar-collapse -->

                    </div>

                </div>

                <div class="col-md-9 col-sm-9 col-xs-12">

                    <div id="slider" class="owl-carousel owlCarousel">

                        <div class="item">

                            <figure>

                                <img src="{{ asset('assets/img/slider/slider-img.jpg') }}" alt="">

                                <figcaption>

                                    <div class="col-md-9 col-sm-12 col-xs-12">

                                        <h4>Colorful Furnimart With High Rated Products Up To

                                            70% Discount On All Stores

                                        </h4>

                                        <div class="stars">

                                            <ul class="stars">

                                               

                                                <li>

                                                    <h5>Expires in: <span class="red">10 days</span></h5>

                                                </li>

                                            </ul>

                                        </div>

                                    </div>

                                    <div class="col-md-3 col-sm-3 col-xs-12">

                                        <div class="slider-btn text-right">

                                            <a href="/apmax1/coupon-detail/26" class="itg-btn box-btn white">5566778<span>Get
                                                    coupon</span></a>

                                        </div>

                                    </div>

                                </figcaption>

                            </figure>

                        </div>

                        <div class="item">

                            <figure>

                                <img src="{{ asset('assets/img/slider/slider-img2.jpg') }}" alt="">

                                <figcaption>

                                    <div class="col-md-9 col-sm-12 col-xs-12">

                                        <h4>Colorful Furnimart With High Rated Products Up To

                                            70% Discount On All Stores

                                        </h4>

                                        <div class="stars">

                                            <ul class="stars">

                                              

                                                <li>

                                                    <h5>Expires in: <span class="red">10 days</span></h5>

                                                </li>

                                            </ul>

                                        </div>

                                    </div>

                                    <div class="col-md-3 col-sm-3 col-xs-12">

                                        <div class="slider-btn text-right">

                                            <a href="/apmax1/coupon-detail/26" class="itg-btn box-btn white">5566778<span>Get
                                                    coupon</span></a>

                                        </div>

                                    </div>

                                </figcaption>

                            </figure>

                        </div>

                        <div class="item">

                            <figure>

                                <img src="{{ asset('assets/img/slider/slider-img3.jpg') }}" alt="">

                                <figcaption>

                                    <div class="col-md-9 col-sm-12 col-xs-12">

                                        <h4>Colorful Furnimart With High Rated Products Up To

                                            70% Discount On All Stores

                                        </h4>

                                       

                                    </div>

                                    <div class="col-md-3 col-sm-3 col-xs-12">

                                        <div class="slider-btn text-right">

                                            <a href="/apmax1/coupon-detail/26" class="itg-btn box-btn white">5566778<span>Get
                                                    coupon</span></a>

                                        </div>

                                    </div>

                                </figcaption>

                            </figure>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- //***slider-section End***// -->

    <div class="clear"></div>

    <!-- //***latest-deals Start***// -->

    <div class="latest-deals bg">

        <div class="container padB60">

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12 box1 marB30">

                    <div class="section-box">

                        <div class="col-md-6 col-sm-6 col-xs-12">

                            <div class="boxbg">

                                <h3><a href="#"><i class="flaticon-label"></i></a> latest deals</h3>

                            </div>

                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                            <div class="symbol">

                                <h5>view all<a href="{{ url('/coupon-grid') }}"><i
                                            class="flaticon-external-link-symbol"></i></a></h5>

                            </div>

                        </div>

                    </div>

                </div>

                @foreach ($product as $key => $val)
                    <x-CouponCard pid="{{ $product[$key]->id }}" detail="{{ $product[$key]->detail }}" pname="{{ $product[$key]->name }}"
                        imgurl="{{ $product[$key]->image }}" price="{{ $product[$key]->price }}"
                        saleprice="{{ $product[$key]->sale_price }}" />
                @endforeach
            </div>

        </div>

    </div>

    <!-- //***latest-deals End***// -->

    <!-- //***Offers-section Start***// -->

    <div class="slider-second slidernav padTB60">

        <div class="container">

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12 marB30">

                    <div class="section-box text-left">

                        <h3><i class="flaticon-stars-couple-of-different-sizes"></i> today's trending offers</h3>

                    </div>

                </div>

            </div>

        </div>

        <div class="container-fluid">

            <div class="row">

                <div id="slidersecond" class="owl-carousel owlCarousel">
                    @foreach ($product as $key => $val)
                        @php

                            $imgurl1 = $product[$key]->image;
                        @endphp
                        <div class="item">

                            <div class="col-md-12 col-sm-12 col-xs-12">

                                <div class="box-a">

                                    <figure>

                                        <img style="aspect-ratio: 16/9; object-fit: cover;"
                                            src="{{ asset($imgurl1) }}" alt="">

                                    </figure>

                                    <div class="box-detail box-details">

                                        <div class="col-md-12 col-sm-12 col-xs-12">

                                            <div class="row">

                                                <h4 class="hover marB20"><a href="coupon-detail/{{$product[$key]->id}}">Get Offer on  {{$product[$key]->name}}</a></h4>

                                            </div>

                                        </div>



                                        <div class="col-md-7 col-sm-7 col-xs-7">

                                            <div class="row">

                                                <h5>Expires in: <span class="red">{{ date('Y-m-d',strtotime($product[$key]->valid_till))}}</span></h5>

                                            </div>

                                        </div>



                                        <div class="col-md-12 col-sm-12 col-xs-12 marT20 marB10 text-left">

                                            <div class="row">

                                                <a href="#"
                                                    class="itg-btn box-btn black">{{ $product[$key]->code }}<span>Get
                                                        Code</span></a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                    @endforeach



                </div>

            </div>

        </div>

    </div>

    <!-- //***Offers-section End***// -->

    <!-- //***popular-stores Start***// -->

    <div class="popular-stores bg padTB60">

        <div class="container">

            <div class="row">

                @if(count($nearstore)>0)
                <div class="col-md-12 col-sm-12 col-xs-12 marB30">

                    <div class="section-box">

                        <div class="col-md-6 col-sm-6 col-xs-12">

                            <div class="boxbg">

                                <h3><i class="flaticon-commerce"></i> stores near you </h3>

                            </div>

                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                            <div class="symbol">

                                <h5>view all<a href="/apmax1/store"><i
                                            class="flaticon-external-link-symbol"></i></a></h5>

                            </div>

                        </div>

                    </div>

                </div>


                @foreach ($nearstore as $key=>$val)
                @if(!is_null($nearstore[$key]->store))

                <div class="col-md-3 col-sm-3 col-xs-6 marB30">

                <div class="brand-img">

                    <figure>
                        @php

                        $imgurl1n = $nearstore[$key]->logo;
                    @endphp
                        <img style="width: 100%;height: 140px;object-fit: contain;" src="{{ asset($imgurl1n) }}" alt="">

                        <figcaption>

                            <h4><a href="/apmax1/store-detail/{{$nearstore[$key]->id}}">{{$nearstore[$key]->store}}</a></h4>

                        </figcaption>

                    </figure>

                </div>
            </div>
            @endif
                @endforeach
                @endif



                <div class="col-md-12 col-sm-12 col-xs-12 marB30">

                    <div class="section-box">

                        <div class="col-md-6 col-sm-6 col-xs-12">

                            <div class="boxbg">

                                <h3><i class="flaticon-commerce"></i> popular stores</h3>

                            </div>

                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                            <div class="symbol">

                                <h5>view all<a href="/apmax1/store"><i
                                            class="flaticon-external-link-symbol"></i></a></h5>

                            </div>

                        </div>

                    </div>

                </div>


                @foreach ($store as $key=>$val)
                @if(!is_null($store[$key]->store))

                <div class="col-md-3 col-sm-3 col-xs-6 marB30">

                <div class="brand-img">

                    <figure>
                        @php

                        $imgurl1 = $store[$key]->logo;
                    @endphp
                    @if($imgurl1!="")
                        <img style="width: 100%;height: 140px;object-fit: contain;" src="{{ asset($imgurl1) }}" alt="">
                        @else
                        <img style="width: 100%;height: 140px;object-fit: contain;" src="{{ asset('/assets/img/logo.png') }}" alt="">
@endif
                        <figcaption>

                            <h4><a href="/apmax1/store-detail/{{$store[$key]->id}}">{{$store[$key]->store}}</a></h4>

                        </figcaption>

                    </figure>

                </div>
            </div>
            @endif
                @endforeach


                

            </div>

        </div>

    </div>

    <!-- //***Offers-section End***// -->

    <!-- //***coupons-section Start***// -->

    <div class="coupons-section couponnav padTB60">

        <div class="container">

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12 marB30">

                    <div class="section-box">

                        <div class="box-bg pull-right">

                            <h3>over 400+ coupons available <i class="flaticon-coupon"></i></h3>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="container-fluid">

            <div class="row">

                <div id="sliderthird" class="owl-carousel owlCarousel">
                    @foreach ($seller as $key=>$val)
                  @php
                      $imgurl2 = $seller[$key]->image;
                  @endphp

                    <div class="item">

                        <div class="col-md-12 col-sm-12 col-xs-12">

                            <div class="box-b">

                                <figure>

                                    <img src="{{ asset($imgurl2) }}" alt="">

                                </figure>

                                <div class="border"></div>

                                <div class="box-detail details">

                                    <div class="col-md-12 col-sm-12 col-xs-12">

                                        <div class="row">

                                            <h4 class="hover"><a href="coupon-detail/{{ $seller[$key]->id }}"> {{ $seller[$key]->name }}</a></h4>

                                            <h4 class="marB10 marT10">Stores <span class="grey-a">-  {{$seller[$key]->city}}, {{$seller[$key]->state}}, {{$seller[$key]->country}}</span></h4>

                                            <h4 class="marB10">expires :<span class="red">{{date('Y-m-d',strtotime($seller[$key]->valid_till))}} </span></h4>

                                        </div>

                                    </div>

                                    <div class="col-md-12 col-sm-12 col-xs-12 marT10">

                                        <div class="row">

                                            <a href="#" class="itg-btn box-btn black">{{ $seller[$key]->code }}<span>Get
                                                    Code</span></a>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                          
                    @endforeach


                </div>

            </div>

        </div>

    </div>

    <!-- //***coupons-section End***// -->

    <!-- //***latest-blog Start***// -->

    <div class="latest-blog bg blognav padTB60">

        <div class="container">

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12 marB30">

                    <div class="section-box text-left">

                        <div class="boxbgg">

                            <h3><i class="flaticon-blogger-logotype"></i> latest blog</h3>

                        </div>

                    </div>

                </div>

                <div id="sliderfourth" class="owl-carousel owlCarousel">

                    <div class="item">

                        <div class="col-md-12 col-sm-12 col-xs-12">

                            <div class="box-a">

                                <figure>

                                    <img src="{{ asset('assets/img/blog/image1.jpg') }}" alt="">

                                </figure>

                                <div class="box-detail">

                                    <div class="col-md-12 col-sm-12 col-xs-12">

                                        <div class="row">

                                            <h4 class="hover marB10"><a href="blog-details.html">post title here</a>
                                            </h4>

                                            <ul class="marB10 fonts">

                                                <li><a href="#"><i class="fa fa-calendar-o"
                                                            aria-hidden="true"></i> MAY 24, 2015</a></li>

                                                <li class="marL10 upper"><a href="#"><i class="fa fa-comment"
                                                            aria-hidden="true"></i> comments</a></li>

                                            </ul>

                                            <p>Lorem Ipsum is simply dummy text of therinting andey type setting
                                                industry lorem Ipsum is simply dummy.</p>

                                            <span><a href="blog-details.html" class="hover">read more</a></span>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="item">

                        <div class="col-md-12 col-sm-12 col-xs-12">

                            <div class="box-a">

                                <figure>

                                    <img src="{{ asset('assets/img/blog/image2.jpg') }}" alt="">

                                </figure>

                                <div class="box-detail">

                                    <div class="col-md-12 col-sm-12 col-xs-12">

                                        <div class="row">

                                            <h4 class="hover marB10"><a href="blog-details.html">post title here</a>
                                            </h4>

                                            <ul class="marB10 fonts">

                                                <li><a href="#"><i class="fa fa-calendar-o"
                                                            aria-hidden="true"></i> MAY 24, 2015</a></li>

                                                <li class="marL10 upper"><a href="#"><i class="fa fa-comment"
                                                            aria-hidden="true"></i> comments</a></li>

                                            </ul>

                                            <p>Lorem Ipsum is simply dummy text of therinting andey type setting
                                                industry lorem Ipsum is simply dummy.</p>

                                            <span><a href="blog-details.html" class="hover">read more</a></span>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="item">

                        <div class="col-md-12 col-sm-12 col-xs-12">

                            <div class="box-a">

                                <figure>

                                    <img src="{{ asset('assets/img/blog/image3.jpg') }}" alt="">

                                </figure>

                                <div class="box-detail">

                                    <div class="col-md-12 col-sm-12 col-xs-12">

                                        <div class="row">

                                            <h4 class="hover marB10"><a href="blog-details.html">post title here</a>
                                            </h4>

                                            <ul class="marB10 fonts">

                                                <li><a href="#"><i class="fa fa-calendar-o"
                                                            aria-hidden="true"></i> MAY 24, 2015</a></li>

                                                <li class="marL10 upper"><a href="#"><i class="fa fa-comment"
                                                            aria-hidden="true"></i> comments</a></li>

                                            </ul>

                                            <p>Lorem Ipsum is simply dummy text of therinting andey type setting
                                                industry lorem Ipsum is simply dummy.</p>

                                            <span><a href="blog-details.html" class="hover">read more</a></span>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="item">

                        <div class="col-md-12 col-sm-12 col-xs-12">

                            <div class="box-a">

                                <figure>

                                    <img src="{{ asset('assets/img/blog/image2.jpg') }}" alt="">

                                </figure>

                                <div class="box-detail">

                                    <div class="col-md-12 col-sm-12 col-xs-12">

                                        <div class="row">

                                            <h4 class="hover marB10"><a href="blog-details.html">post title here</a>
                                            </h4>

                                            <ul class="marB10 fonts">

                                                <li><a href="#"><i class="fa fa-calendar-o"
                                                            aria-hidden="true"></i> MAY 24, 2015</a></li>

                                                <li class="marL10 upper"><a href="#"><i class="fa fa-comment"
                                                            aria-hidden="true"></i> comments</a></li>

                                            </ul>

                                            <p>Lorem Ipsum is simply dummy text of therinting andey type setting
                                                industry lorem Ipsum is simply dummy.</p>

                                            <span><a href="blog-details.html" class="hover">read more</a></span>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

   

    <!-- //***latest-blog End***// -->

    <!-- //***Services Start***// -->

    <div class="service-section">

        <div class="container padTB60">

            <div class="col-md-4 col-sm-4 col-xs-12 mr-xs">

                <div class="box">

                    <figure>

                        <img src="{{ asset('assets/img/all/bg.jpg') }}" alt="">

                        <figcaption>

                            <div class="boxes">

                                <div class="col-md-2 col-sm-2 col-xs-2">

                                    <div class="box-icon">

                                        <a href="#"><i class="fa fa-gift" aria-hidden="true"></i></a>

                                    </div>

                                </div>

                                <div class="col-md-10 col-sm-10 col-xs-10">

                                    <div class="box-text">

                                        <h3>reacive a gift</h3>

                                        <h5>reacive gift over order $125</h5>

                                    </div>

                                </div>

                            </div>

                        </figcaption>

                    </figure>

                </div>

            </div>

            <div class="col-md-4 col-sm-4 col-xs-12 mr-xs">

                <div class="box">

                    <figure>

                        <img src="{{ asset('assets/img/all/bg.jpg') }}" alt="">

                        <figcaption>

                            <div class="boxes">

                                <div class="col-md-2 col-sm-2 col-xs-2">

                                    <div class="box-icon">

                                        <a href="#"><i class="fa fa-rocket" aria-hidden="true"></i></a>

                                    </div>

                                </div>

                                <div class="col-md-10 col-sm-10 col-xs-10">

                                    <div class="box-text pull-right">

                                        <h3>free shipping</h3>

                                        <h5> more than order $25</h5>

                                    </div>

                                </div>

                            </div>

                        </figcaption>

                    </figure>

                </div>

            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">

                <div class="box">

                    <figure>

                        <img src="{{ asset('assets/img/all/bg.jpg') }}" alt="">

                        <figcaption>

                            <div class="boxes">

                                <div class="col-md-2 col-sm-2 col-xs-2">

                                    <div class="box-icon">

                                        <a href="#"><i class="fa fa-headphones" aria-hidden="true"></i></a>

                                    </div>

                                </div>

                                <div class="col-md-10 col-sm-10 col-xs-10">

                                    <div class="box-text pull-right">

                                        <h3>24/7 support</h3>

                                        <h5>fell free to contact</h5>

                                    </div>

                                </div>

                            </div>

                        </figcaption>

                    </figure>

                </div>

            </div>

        </div>

    </div>

    <!-- //***Services End***// -->

    <div class="clear"></div>


    @include('client/master/footer')
    @include('client/master/script/script')

    @yield('script')


</body>

</html>
