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

                            <h5>get all  deals <i class="fa fa-tags" aria-hidden="true"></i></h5>

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

                                <h3><span>coupons</span></h3>

                                <ul class="breadcrumb-list">

                                    <li><a href="/apmax1/client/">home</a></li>

                                    <li><a href="#">coupons</a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- //***Breadcrumb-Section End***// -->

        <!-- //***Coupon-Grid Start***// -->

        <div class="coupons bg padTB60">

            <div class="container">

                <div class="row">
                    
                @foreach ($store as $key=>$val)
                @if(!is_null($store[$key]->store))
                @php

                $imgurl1 = $store[$key]->image;
            @endphp
                    <div class="col-md-4 col-sm-4 col-xs-12 marB30">

                        <div class="box-b">

                            <figure>

                                <img style="height: 270px;width:auto;" src="{{ asset($imgurl1) }}" alt="">

                            </figure>

                        </div>

                        <div class="border"></div>

                        <div class="box-detail details">

                            <div class="col-md-12 col-sm-12 col-xs-12">

                                <div class="row">

                                    <h4 class="hover"><a href="/apmax1/coupon-detail/{{$store[$key]->id}}">{{ $store[$key]->pname }}</a></h4>
                                    <h4 class="hover"><a href="/apmax1/coupon-detail/{{$store[$key]->id}}">{{ substr($store[$key]->detail, 0, 30) }} .. read more</a></h4>

                                    <h4 class="marB20 marT20">Stores <span class="grey-a">- {{$store[$key]->store}}</span></h4>

                                    <h4 class="marB20">expires :<span class="red"> {{ date('Y-m-d',strtotime($store[$key]->valid_till))}}</span></h4>

                                </div>

                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12 marT20 marB10 text-left">

                                <div class="row">

                                    <a href="#" class="itg-btn box-btn black">{{$store[$key]->code}}<span>Get Code</span></a>

                                </div>

                            </div>

                        </div>

                    </div>

                    @endif
                    @endforeach
    


                </div>

            </div>

        </div>

        <!-- //***Coupon-Grid End***// -->

        <div class="clear"></div>

       
        @include('client/master/footer')
        @include('client/master/script/script')

        @yield('script')

    </body>

</html>