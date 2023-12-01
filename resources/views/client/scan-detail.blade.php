<!DOCTYPE html>

<html lang="en">

@include('client/master/header')


   

    <body>
        

        @include('client/master/navigation')
        @yield('content')

        <div class="slider-section">

            <div class="container">

                <div class="categories">

                    <div class="categorie-section">

                        <a href="/apmax1/client">

                            <h5>get all  deals<i class="fa fa-tags" aria-hidden="true"></i></h5>

                        </a>

                    </div>

                </div>

            </div>

        </div>

        <!-- //***Breadcrumb-section Start***// -->

        <div class="breadcrumb-section">

            <div class="breadcrumb-text">

                <div class="container">

                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">

                            <div class="breadcrumb-text padTB50">

                                <h3><span>{{$detail[0]->name}} </span>
                                    @if($coupondata[0]->valid_till <= date('Y-m-d')))
                                    <span>Valid & Verified <img style="height: 95px;" src="https://png.pngtree.com/png-vector/20230523/ourmid/pngtree-verified-stamp-vector-png-image_7105265.png"></span>
                                    @else
                                    <span>Expired <img style="height: 95px;" src="https://www.onlygfx.com/wp-content/uploads/2020/05/expired-stamp-3.png" </span>
                                    @endif
                                </h3>
                                
                                <ul class="breadcrumb-list">

                                    <li><a href="/apmax1/client">home</a></li>

                                    <li><a href="#">{{$detail[0]->name}}</a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- //***Breadcrumb-Section End***// -->

        <!-- //***Deals-Single Start***// -->

        <div class="deals bg padTB60">

            <div class="container">

                <div class="row">

                    <div class="col-md-9 col-sm-8 col-xs-12">

                        <div class="row">

                            <div class="col-md-12 col-sm-12 col-xs-12">

                                <div class="blog marB30">

                                    <div id="blog">

                                        <div class="item">

                                            <div class="col-md-12 col-sm-12 col-xs-12">

                                                <div class="row">
                                                    @php  
                                                        $imgurl=$detail[0]->image; 
                                                        @endphp
                                                    <figure>

                                                        <img style="height: 355px;width:auto;" src="{{ asset($imgurl)}}" alt="">

                                                    </figure>

                                                </div>

                                            </div>

                                        </div>

                                       
                                   

                                    </div>

                                </div>

                                <h4>About  {{$detail[0]->store}}</h4>

                                <p>
                                    {{$detail[0]->detail}}

                                </p>

                                <h4 class="marT30">How Coupon Work ?</h4>

                                <p>
                                    Show the coupon code  {{$detail[0]->code}}
                                    <br>
                                    Get Best Discount on  {{$detail[0]->name}} 

                                </p>

                                

                                <div class="col-md-12 marT20">

                                    <div class="row">

                                        <h4 class="marB20 capital">Location</h4>
                                        
                                            Address: {{$detail[0]->address}} 
                                            <br>
                                            City: {{$detail[0]->city}} 
                                            <br>
                                            State: {{$detail[0]->state}}         
                                            <br>
                                            Country: {{$detail[0]->country}} 
                                            <br>
                                            Zip: {{$detail[0]->zip}} 

                                        <div class="location-map">

                                            <div id='gmap_canvas'></div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-3 col-sm-4 col-xs-12">

                        <div class="awesome-spot">

                            <h3 class="capital marB10">{{$detail[0]->name}}</h3>
                            <h5 class="capital marB10">User: {{$userdata[0]->name}}</h5>

                            <p>{{$detail[0]->detail}}</p>
                          

                            <ul class="stars marB10">

                                @php
                                $coupondetails=json_decode($coupondata[0]->detail,true);
                              
                            
                            @endphp

                            </ul>
                           

                            <div class="col-md-4 col-sm-4 col-xs-4 padL0">
                               
                                <h6 class="capital">price</h6>

                                <p>{{$coupondetails['price']}}$</p>

                            </div>

                            <div class="col-md-4 col-sm-4 col-xs-4 padL0">

                                <h6 class="capital">Sale Price</h6>

                                <p>{{$coupondetails['sale_price']}}$</p>

                            </div>

                            <div class="col-md-4 col-sm-4 col-xs-4">

                                <h6 class="capital">Discount</h6>

                                <p>{{$coupondetails['discount']}}%</p>

                            </div>

                            <h4 class="capital marT10">valid till</h4>

                            <ul class="text">

                                <li>

                                    <h5>{{date('Y-m-d',strtotime($detail[0]->valid_till))}}</h5>

                                </li>

                                
                            </ul>

                            <div class="col-md-12 col-sm-12 col-xs-12 marT10 marB10">

                                <div class="row">
                                 Code <br>
                                    <a href="#" class="itg-btn box-btn black"><span>{{$coupondetails['code']}}</span>{{$coupondetails['code']}}</a>
                               
                                </div>

                            </div>


                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- //***Deals-Single End***// -->

        <div class="clear"></div>

       
        @include('client/master/footer')
        @include('client/master/script/script')

        @yield('script')

    </body>

</html>