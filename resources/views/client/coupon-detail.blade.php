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

                                <h3><span>{{$detail[0]->name}} </span></h3>

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

                                    <div id="blog" class="owl-carousel owlCarousel">

                                        <div class="item">

                                            <div class="col-md-12 col-sm-12 col-xs-12">

                                                <div class="row">
                                                    @php  
                                                        $imgurl=$detail[0]->image; 
                                                        @endphp
                                                    <figure>

                                                        <img src="{{ asset($imgurl)}}" alt="">

                                                    </figure>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="item">

                                            <div class="col-md-12 col-sm-12 col-xs-12">

                                                <div class="row">

                                                    <figure>

                                                        <img src="{{ asset($imgurl)}}" alt="">

                                                    </figure>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="item">

                                            <div class="col-md-12 col-sm-12 col-xs-12">

                                                <div class="row">

                                                    <figure>

                                                        <img src="{{ asset($imgurl) }}" alt="">

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

                            <p>{{$detail[0]->detail}}</p>

                            <ul class="stars marB10">

                              

                            </ul>

                            <div class="col-md-4 col-sm-4 col-xs-4 padL0">

                                <h6 class="capital">price</h6>

                                <p>{{$detail[0]->price}}$</p>

                            </div>

                            <div class="col-md-4 col-sm-4 col-xs-4 padL0">

                                <h6 class="capital">Sale Price</h6>

                                <p>{{$detail[0]->sale_price}}$</p>

                            </div>

                            <div class="col-md-4 col-sm-4 col-xs-4">

                                <h6 class="capital">Discount</h6>

                                <p>{{$detail[0]->discount}}%</p>

                            </div>

                            <h4 class="capital marT10">valid till</h4>

                            <ul class="text">

                                <li>

                                    <h5>{{date('Y-m-d',strtotime($detail[0]->valid_till))}}</h5>

                                </li>

                                
                            </ul>

                            <div class="col-md-12 col-sm-12 col-xs-12 marT10 marB10">

                                <div class="row">
                                    @if(Session::get('cid'))

                                    <a href="/apmax1/client/paypalurl/{{$detail[0]->id}}/2.99" class="itg-btn box-btn black">{{$detail[0]->code}}<span>Get Code</span></a>
                                @else
                                    <a href="{{route('client.login')}}" class="itg-btn box-btn black">{{$detail[0]->code}}<span>Get Code</span></a>

                                @endif
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