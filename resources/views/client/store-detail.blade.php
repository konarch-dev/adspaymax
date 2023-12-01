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

                        <a href="deals-grid.html">

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
                                @php
                                    $img=$store['logo'];
                                @endphp
                                <h3><span>{{$store['name']}}&nbsp;&nbsp;&nbsp;&nbsp;
                                    @if($img!="")
                                    <img style="width:105px;height:55px;" src={{asset($img)}}>
                                @endif
                            </span></h3>

                                <ul class="breadcrumb-list">

                                    <li><a href="/apmax1/client/">home</a></li>

                                    <li><a href="#">{{$store['name']}}</a></li>

                                </ul>
                                
                               <a href="#">{{$store['address']}} <br>{{$store['city']}} {{$store['state']}}, {{$store['country']}}, {{$store['zip']}}</a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- //***Breadcrumb-Section End***// -->

        <!-- //***Deals-Grid Start***// -->
             
        <div class="col-md-12 col-sm-12 col-xs-12">

            <div class="pagination-box text-center">

           
            </div>

        </div>


        <div class="deals bg padTB60">
            

            <div class="container">

   


                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="pagination-box text-center" style="margin-bottom:25px;">
                            <span>Offer Available in {{$store['name']}} right now</span>
                       
                        </div>

                    </div>

                    
                    @foreach ($product as $val)

                    <div class="col-md-3 col-sm-3 col-xs-12 marB30">

                        <div class="box-a">

                            <figure>

                                <img src="{{ asset($val->image)}}" alt="">

                            </figure>

                            <div class="box-detail">

                                <h4 class="hover marB5"><a href="/apmax1/coupon-detail/{{$val->id}}">{{$val->name}}</a></h4>

                               

                                <p>{{substr($val->detail,0,50)}}</p>
                                @if($val->sale_price!="")
                                <h4><span class="red"><i class="fa fa-usd" aria-hidden="true"></i>{{$val->sale_price}}</span>  <del><span class="grey">
                                    <i class="fa fa-usd" aria-hidden="true"></i>{{$val->price}}</span></del></h4>
                                @else
                                <h4><span class="red"><i class="fa fa-usd" aria-hidden="true"></i>{{$val->price}}</span></h4>
                                @endif
                                {{$val->cname}}
                            </div>

                        </div>

                    </div>


                    @endforeach

                 



                  

                </div>

            </div>

        </div>

        <!-- //***Deals-Grid End***// -->

        <div class="clear"></div>

       
        @include('client/master/footer')
        @include('client/master/script/script')

        @yield('script')

    </body>

</html>