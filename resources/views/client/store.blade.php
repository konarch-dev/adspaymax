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

        <!-- //***breadcrumb-section Start***// -->

        <div class="breadcrumb-section">

            <div class="breadcrumb-text">

                <div class="container">

                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">

                            <div class="breadcrumb-text padTB50">

                                <h3><span>store search</span></h3>

                                <ul class="breadcrumb-list">

                                    <li><a href="/apmax1/client/">home</a></li>

                                    <li><a href="#">store search</a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- //***breadcrumb-section End***// -->

        <!-- //***Store-Search Start***// -->

        <div class="Store-Search bg padTB60">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="store">

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <div class="">

                                    <h3>view coupon by store</h3>

                                </div>

                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <div class="col-md-10 col-sm-6 col-xs-6">

                                    <select name="coupon">

                                        <option value="a">a</option>

                                        <option value="b">b</option>

                                        <option value="c">c</option>

                                        <option value="d">d</option>

                                        <option value="e">e</option>

                                        <option value="f">f</option>

                                    </select>

                                </div>

                                <div class="col-md-2 col-sm-6 col-xs-6 text-right">

                                    <h3 class="orange"><a href="">all</a></h3>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="search marT40">

                            <h3 class="orange">a</h3>

                        </div>
                       @foreach ($store['a'] as $val)
                               
                        <div class="coupon-detail">

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4>{{$val->store}}</h4>

                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4 class="capital"><a href="">{{$val->address}}, {{$val->city}}, {{$val->state}}, {{$val->country}}, {{$val->zip}}</a></h4>

                            </div>

                        </div>
                        @endforeach

                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="search marT30">

                            <h3 class="orange">b</h3>

                        </div>
                        @foreach ($store['b'] as $val)
                               
                        <div class="coupon-detail">

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4>{{$val->store}}</h4>

                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4 class="capital"><a href="">{{$val->address}}, {{$val->city}}, {{$val->state}}, {{$val->country}}, {{$val->zip}}</a></h4>

                            </div>

                        </div>
                        @endforeach
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="search marT30">

                            <h3 class="orange">c</h3>

                        </div>
                        @foreach ($store['c'] as $val)
                               
                        <div class="coupon-detail">

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4>{{$val->store}}</h4>

                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4 class="capital"><a href="">{{$val->address}}, {{$val->city}}, {{$val->state}}, {{$val->country}}, {{$val->zip}}</a></h4>

                            </div>

                        </div>
                        @endforeach
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="search marT30">

                            <h3 class="orange">d</h3>

                        </div>
                        @foreach ($store['d'] as $val)
                               
                        <div class="coupon-detail">

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4>{{$val->store}}</h4>

                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4 class="capital"><a href="">{{$val->address}}, {{$val->city}}, {{$val->state}}, {{$val->country}}, {{$val->zip}}</a></h4>

                            </div>

                        </div>
                        @endforeach
                    </div>


                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="search marT30">

                            <h3 class="orange">e</h3>

                        </div>
                        @foreach ($store['e'] as $val)
                               
                        <div class="coupon-detail">

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4>{{$val->store}}</h4>

                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4 class="capital"><a href="">{{$val->address}}, {{$val->city}}, {{$val->state}}, {{$val->country}}, {{$val->zip}}</a></h4>

                            </div>

                        </div>
                        @endforeach
                    </div>


                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="search marT30">

                            <h3 class="orange">f</h3>

                        </div>
                        @foreach ($store['f'] as $val)
                               
                        <div class="coupon-detail">

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4>{{$val->store}}</h4>

                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4 class="capital"><a href="">{{$val->address}}, {{$val->city}}, {{$val->state}}, {{$val->country}}, {{$val->zip}}</a></h4>

                            </div>

                        </div>
                        @endforeach
                    </div>


                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="search marT30">

                            <h3 class="orange">g</h3>

                        </div>
                        @foreach ($store['g'] as $val)
                               
                        <div class="coupon-detail">

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4>{{$val->store}}</h4>

                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4 class="capital"><a href="">{{$val->address}}, {{$val->city}}, {{$val->state}}, {{$val->country}}, {{$val->zip}}</a></h4>

                            </div>

                        </div>
                        @endforeach
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="search marT30">

                            <h3 class="orange">h</h3>

                        </div>
                        @foreach ($store['h'] as $val)
                               
                        <div class="coupon-detail">

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4>{{$val->store}}</h4>

                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4 class="capital"><a href="">{{$val->address}}, {{$val->city}}, {{$val->state}}, {{$val->country}}, {{$val->zip}}</a></h4>

                            </div>

                        </div>
                        @endforeach
                    </div>






                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="search marT30">

                            <h3 class="orange">i</h3>

                        </div>
                        @foreach ($store['i'] as $val)
                               
                        <div class="coupon-detail">

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4>{{$val->store}}</h4>

                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4 class="capital"><a href="">{{$val->address}}, {{$val->city}}, {{$val->state}}, {{$val->country}}, {{$val->zip}}</a></h4>

                            </div>

                        </div>
                        @endforeach
                    </div>


                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="search marT30">

                            <h3 class="orange">j</h3>

                        </div>
                        @foreach ($store['j'] as $val)
                               
                        <div class="coupon-detail">

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4>{{$val->store}}</h4>

                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4 class="capital"><a href="">{{$val->address}}, {{$val->city}}, {{$val->state}}, {{$val->country}}, {{$val->zip}}</a></h4>

                            </div>

                        </div>
                        @endforeach
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="search marT30">

                            <h3 class="orange">k</h3>

                        </div>
                        @foreach ($store['k'] as $val)
                               
                        <div class="coupon-detail">

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4>{{$val->store}}</h4>

                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4 class="capital"><a href="">{{$val->address}}, {{$val->city}}, {{$val->state}}, {{$val->country}}, {{$val->zip}}</a></h4>

                            </div>

                        </div>
                        @endforeach
                    </div>



                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="search marT30">

                            <h3 class="orange">l</h3>

                        </div>
                        @foreach ($store['l'] as $val)
                               
                        <div class="coupon-detail">

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4>{{$val->store}}</h4>

                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4 class="capital"><a href="">{{$val->address}}, {{$val->city}}, {{$val->state}}, {{$val->country}}, {{$val->zip}}</a></h4>

                            </div>

                        </div>
                        @endforeach
                    </div>


                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="search marT30">

                            <h3 class="orange">m</h3>

                        </div>
                        @foreach ($store['m'] as $val)
                               
                        <div class="coupon-detail">

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4>{{$val->store}}</h4>

                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4 class="capital"><a href="">{{$val->address}}, {{$val->city}}, {{$val->state}}, {{$val->country}}, {{$val->zip}}</a></h4>

                            </div>

                        </div>
                        @endforeach
                    </div>



                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="search marT30">

                            <h3 class="orange">n</h3>

                        </div>
                        @foreach ($store['n'] as $val)
                               
                        <div class="coupon-detail">

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4>{{$val->store}}</h4>

                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4 class="capital"><a href="">{{$val->address}}, {{$val->city}}, {{$val->state}}, {{$val->country}}, {{$val->zip}}</a></h4>

                            </div>

                        </div>
                        @endforeach
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="search marT30">

                            <h3 class="orange">o</h3>

                        </div>
                        @foreach ($store['o'] as $val)
                               
                        <div class="coupon-detail">

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4>{{$val->store}}</h4>

                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4 class="capital"><a href="">{{$val->address}}, {{$val->city}}, {{$val->state}}, {{$val->country}}, {{$val->zip}}</a></h4>

                            </div>

                        </div>
                        @endforeach
                    </div>


                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="search marT30">

                            <h3 class="orange">p</h3>

                        </div>
                        @foreach ($store['p'] as $val)
                               
                        <div class="coupon-detail">

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4>{{$val->store}}</h4>

                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4 class="capital"><a href="">{{$val->address}}, {{$val->city}}, {{$val->state}}, {{$val->country}}, {{$val->zip}}</a></h4>

                            </div>

                        </div>
                        @endforeach
                    </div>



                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="search marT30">

                            <h3 class="orange">q</h3>

                        </div>
                        @foreach ($store['q'] as $val)
                               
                        <div class="coupon-detail">

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4>{{$val->store}}</h4>

                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4 class="capital"><a href="">{{$val->address}}, {{$val->city}}, {{$val->state}}, {{$val->country}}, {{$val->zip}}</a></h4>

                            </div>

                        </div>
                        @endforeach
                    </div>



                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="search marT30">

                            <h3 class="orange">r</h3>

                        </div>
                        @foreach ($store['r'] as $val)
                               
                        <div class="coupon-detail">

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4>{{$val->store}}</h4>

                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4 class="capital"><a href="">{{$val->address}}, {{$val->city}}, {{$val->state}}, {{$val->country}}, {{$val->zip}}</a></h4>

                            </div>

                        </div>
                        @endforeach
                    </div>



                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="search marT30">

                            <h3 class="orange">s</h3>

                        </div>
                        @foreach ($store['s'] as $val)
                               
                        <div class="coupon-detail">

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4>{{$val->store}}</h4>

                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4 class="capital"><a href="">{{$val->address}}, {{$val->city}}, {{$val->state}}, {{$val->country}}, {{$val->zip}}</a></h4>

                            </div>

                        </div>
                        @endforeach
                    </div>



                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="search marT30">

                            <h3 class="orange">t</h3>

                        </div>
                        @foreach ($store['t'] as $val)
                               
                        <div class="coupon-detail">

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4>{{$val->store}}</h4>

                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4 class="capital"><a href="">{{$val->address}}, {{$val->city}}, {{$val->state}}, {{$val->country}}, {{$val->zip}}</a></h4>

                            </div>

                        </div>
                        @endforeach
                    </div>



                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="search marT30">

                            <h3 class="orange">u</h3>

                        </div>
                        @foreach ($store['u'] as $val)
                               
                        <div class="coupon-detail">

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4>{{$val->store}}</h4>

                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4 class="capital"><a href="">{{$val->address}}, {{$val->city}}, {{$val->state}}, {{$val->country}}, {{$val->zip}}</a></h4>

                            </div>

                        </div>
                        @endforeach
                    </div>


                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="search marT30">

                            <h3 class="orange">v</h3>

                        </div>
                        @foreach ($store['v'] as $val)
                               
                        <div class="coupon-detail">

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4>{{$val->store}}</h4>

                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4 class="capital"><a href="">{{$val->address}}, {{$val->city}}, {{$val->state}}, {{$val->country}}, {{$val->zip}}</a></h4>

                            </div>

                        </div>
                        @endforeach
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="search marT30">

                            <h3 class="orange">w</h3>

                        </div>
                        @foreach ($store['w'] as $val)
                               
                        <div class="coupon-detail">

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4>{{$val->store}}</h4>

                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4 class="capital"><a href="">{{$val->address}}, {{$val->city}}, {{$val->state}}, {{$val->country}}, {{$val->zip}}</a></h4>

                            </div>

                        </div>
                        @endforeach
                    </div>


                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="search marT30">

                            <h3 class="orange">x</h3>

                        </div>
                        @foreach ($store['x'] as $val)
                               
                        <div class="coupon-detail">

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4>{{$val->store}}</h4>

                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4 class="capital"><a href="">{{$val->address}}, {{$val->city}}, {{$val->state}}, {{$val->country}}, {{$val->zip}}</a></h4>

                            </div>

                        </div>
                        @endforeach
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="search marT30">

                            <h3 class="orange">y</h3>

                        </div>
                        @foreach ($store['y'] as $val)
                               
                        <div class="coupon-detail">

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4>{{$val->store}}</h4>

                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4 class="capital"><a href="">{{$val->address}}, {{$val->city}}, {{$val->state}}, {{$val->country}}, {{$val->zip}}</a></h4>

                            </div>

                        </div>
                        @endforeach
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="search marT30">

                            <h3 class="orange">z</h3>

                        </div>
                        @foreach ($store['z'] as $val)
                               
                        <div class="coupon-detail">

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4>{{$val->store}}</h4>

                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <h4 class="capital"><a href="">{{$val->address}}, {{$val->city}}, {{$val->state}}, {{$val->country}}, {{$val->zip}}</a></h4>

                            </div>

                        </div>
                        @endforeach
                    </div>


                </div>

            </div>

        </div>

        <!-- //***Store-Search End***// -->

        <div class="clear"></div>

  
        <!-- //***contact-section  End***// -->

        <div class="clear"></div>

      
        @include('client/master/footer')
        @include('client/master/script/script')

        @yield('script')

    </body>

</html>