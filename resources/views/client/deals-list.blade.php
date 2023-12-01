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
                                <h3><span>deals</span></h3>
                                <ul class="breadcrumb-list">
                                    <li><a href="index.html">home</a></li>
                                    <li><a href="#">deals list</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //***Breadcrumb-Section End***// -->
        <!-- //***Deals-list Start***// -->
        <div class="deals bg padTB60">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 marB30">
                        <div class="deals">
                            <div class="col-md-4 col-sm-5 col-xs-12 box-r">
                                <div class="row">
                                    <figure>
                                        <img src="{{ asset('assets/img/all/image1.jpg')}}" alt="">
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-7 col-xs-12 box-l">
                                <div class="box-detail description res-width">
                                    <div class="col-md-9 col-sm-9 col-xs-7 sm-b">
                                        <div class="row">
                                            <h4 class="hover marB20"><a href="deals-single.html">title goes here</a></h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem  Ipsum has been the industry's standard dummy text ever since</p>
                                            <h4 class="marT20"><span class="red"><i class="fa fa-usd" aria-hidden="true"></i>190</span>  <del><span class="grey"><i class="fa fa-usd" aria-hidden="true"></i>250</span></del></h4>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-5 text-right">
                                        <div class="row">
                                            <ul class="stars">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li class="grey-a"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="border"></div>
                                    <div class="box-detail description orange-bg">
                                        <div class="col-md-10 col-sm-10 col-xs-10">
                                            <div class="row">
                                                <div class="demo1" data-expiry="aug 6, 2020 15:37:25">
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <div class="timer">000<span>d.</span></div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <div class="timer">00<span>h.</span></div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <div class="timer">00<span>m.</span></div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <div class="timer">00<span>s.</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                            <div class="cart-icon">
                                                <a href="#"><i class="flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 marB30">
                        <div class="deals">
                            <div class="col-md-4 col-sm-5 col-xs-12 box-r">
                                <div class="row">
                                    <figure>
                                        <img src="{{ asset('assets/img/all/image2.jpg')}}" alt="">
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-7 col-xs-12 box-l">
                                <div class="box-detail description res-width">
                                    <div class="col-md-9 col-sm-9 col-xs-7 sm-b">
                                        <div class="row">
                                            <h4 class="hover marB20"><a href="deals-single.html">title goes here</a></h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem  Ipsum has been the industry's standard dummy text ever since</p>
                                            <h4 class="marT20"><span class="red"><i class="fa fa-usd" aria-hidden="true"></i>190</span>  <del><span class="grey"><i class="fa fa-usd" aria-hidden="true"></i>250</span></del></h4>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-5 text-right">
                                        <div class="row">
                                            <ul class="stars">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li class="grey-a"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="border"></div>
                                    <div class="box-detail description orange-bg">
                                        <div class="col-md-10 col-sm-10 col-xs-10">
                                            <div class="row">
                                                <div class="demo1" data-expiry="july 10, 2020 15:37:25">
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <div class="timer">000<span>d.</span></div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <div class="timer">00<span>h.</span></div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <div class="timer">00<span>m.</span></div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <div class="timer">00<span>s.</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                            <div class="cart-icon">
                                                <a href="#"><i class="flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 marB30">
                        <div class="deals">
                            <div class="col-md-4 col-sm-5 col-xs-12 box-r">
                                <div class="row">
                                    <figure>
                                        <img src="{{ asset('assets/img/all/image3.jpg')}}" alt="">
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-7 col-xs-12 box-l">
                                <div class="box-detail description res-width">
                                    <div class="col-md-9 col-sm-9 col-xs-7 sm-b">
                                        <div class="row">
                                            <h4 class="hover marB20"><a href="deals-single.html">title goes here</a></h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem  Ipsum has been the industry's standard dummy text ever since</p>
                                            <h4 class="marT20"><span class="red"><i class="fa fa-usd" aria-hidden="true"></i>190</span>  <del><span class="grey"><i class="fa fa-usd" aria-hidden="true"></i>250</span></del></h4>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-5 text-right">
                                        <div class="row">
                                            <ul class="stars">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li class="grey-a"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="border"></div>
                                    <div class="box-detail description orange-bg">
                                        <div class="col-md-10 col-sm-10 col-xs-10">
                                            <div class="row">
                                                <div class="demo1" data-expiry="may 1, 2020 15:37:25">
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <div class="timer">000<span>d.</span></div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <div class="timer">00<span>h.</span></div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <div class="timer">00<span>m.</span></div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <div class="timer">00<span>s.</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                            <div class="cart-icon">
                                                <a href="#"><i class="flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 marB30">
                        <div class="deals">
                            <div class="col-md-4 col-sm-5 col-xs-12 box-r">
                                <div class="row">
                                    <figure>
                                        <img src="{{ asset('assets/img/all/image4.jpg')}}" alt="">
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-7 col-xs-12 box-l">
                                <div class="box-detail description res-width">
                                    <div class="col-md-9 col-sm-9 col-xs-7 sm-b">
                                        <div class="row">
                                            <h4 class="hover marB20"><a href="deals-single.html">title goes here</a></h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem  Ipsum has been the industry's standard dummy text ever since</p>
                                            <h4 class="marT20"><span class="red"><i class="fa fa-usd" aria-hidden="true"></i>190</span>  <del><span class="grey"><i class="fa fa-usd" aria-hidden="true"></i>250</span></del></h4>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-5 text-right">
                                        <div class="row">
                                            <ul class="stars">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li class="grey-a"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="border"></div>
                                    <div class="box-detail description orange-bg">
                                        <div class="col-md-10 col-sm-10 col-xs-10">
                                            <div class="row">
                                                <div class="demo1" data-expiry="feb 3, 2020 15:37:25">
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <div class="timer">000<span>d.</span></div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <div class="timer">00<span>h.</span></div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <div class="timer">00<span>m.</span></div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <div class="timer">00<span>s.</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                            <div class="cart-icon">
                                                <a href="#"><i class="flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 marB30">
                        <div class="deals">
                            <div class="col-md-4 col-sm-5 col-xs-12 box-r">
                                <div class="row">
                                    <figure>
                                        <img src="{{ asset('assets/img/all/image5.jpg')}}" alt="">
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-7 col-xs-12 box-l">
                                <div class="box-detail description res-width">
                                    <div class="col-md-9 col-sm-9 col-xs-7 sm-b">
                                        <div class="row">
                                            <h4 class="hover marB20"><a href="deals-single.html">title goes here</a></h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem  Ipsum has been the industry's standard dummy text ever since</p>
                                            <h4 class="marT20"><span class="red"><i class="fa fa-usd" aria-hidden="true"></i>190</span>  <del><span class="grey"><i class="fa fa-usd" aria-hidden="true"></i>250</span></del></h4>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-5 text-right">
                                        <div class="row">
                                            <ul class="stars">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li class="grey-a"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="border"></div>
                                    <div class="box-detail description orange-bg">
                                        <div class="col-md-10 col-sm-10 col-xs-10">
                                            <div class="row">
                                                <div class="demo1" data-expiry="jan 7, 2020 15:37:25">
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <div class="timer">000<span>d.</span></div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <div class="timer">00<span>h.</span></div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <div class="timer">00<span>m.</span></div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <div class="timer">00<span>s.</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                            <div class="cart-icon">
                                                <a href="#"><i class="flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 marB30">
                        <div class="deals">
                            <div class="col-md-4 col-sm-5 col-xs-12 box-r">
                                <div class="row">
                                    <figure>
                                        <img src="{{ asset('assets/img/all/image6.jpg')}}" alt="">
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-7 col-xs-12 box-l">
                                <div class="box-detail description res-width">
                                    <div class="col-md-9 col-sm-9 col-xs-7 sm-b">
                                        <div class="row">
                                            <h4 class="hover marB20"><a href="deals-single.html">title goes here</a></h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem  Ipsum has been the industry's standard dummy text ever since</p>
                                            <h4 class="marT20"><span class="red"><i class="fa fa-usd" aria-hidden="true"></i>190</span>  <del><span class="grey"><i class="fa fa-usd" aria-hidden="true"></i>250</span></del></h4>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-5 text-right">
                                        <div class="row">
                                            <ul class="stars">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li class="grey-a"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="border"></div>
                                    <div class="box-detail description orange-bg">
                                        <div class="col-md-10 col-sm-10 col-xs-10">
                                            <div class="row">
                                                <div class="demo1" data-expiry="march 9, 2020 15:37:25">
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <div class="timer">000<span>d.</span></div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <div class="timer">00<span>h.</span></div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <div class="timer">00<span>m.</span></div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <div class="timer">00<span>s.</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                            <div class="cart-icon">
                                                <a href="#"><i class="flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 marB30">
                        <div class="deals">
                            <div class="col-md-4 col-sm-5 col-xs-12 box-r">
                                <div class="row">
                                    <figure>
                                        <img src="{{ asset('assets/img/all/image8.jpg')}}" alt="">
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-7 col-xs-12 box-l">
                                <div class="box-detail description res-width">
                                    <div class="col-md-9 col-sm-9 col-xs-7 sm-b">
                                        <div class="row">
                                            <h4 class="hover marB20"><a href="deals-single.html">title goes here</a></h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem  Ipsum has been the industry's standard dummy text ever since</p>
                                            <h4 class="marT20"><span class="red"><i class="fa fa-usd" aria-hidden="true"></i>190</span>  <del><span class="grey"><i class="fa fa-usd" aria-hidden="true"></i>250</span></del></h4>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-5 text-right">
                                        <div class="row">
                                            <ul class="stars">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li class="grey-a"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="border"></div>
                                    <div class="box-detail description orange-bg">
                                        <div class="col-md-10 col-sm-10 col-xs-10">
                                            <div class="row">
                                                <div class="demo1" data-expiry="june 3, 2020 15:37:25">
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <div class="timer">000<span>d.</span></div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <div class="timer">00<span>h.</span></div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <div class="timer">00<span>m.</span></div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <div class="timer">00<span>s.</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                            <div class="cart-icon">
                                                <a href="#"><i class="flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="pagination-box text-center">
                            <a href="#"><span><i class="fa fa-arrow-left" aria-hidden="true"></i></span></a>
                            <a href="#"><span>1</span></a>
                            <a href="#"><span>2</span></a>
                            <a href="#"><span>3</span></a>
                            <a href="#"><span>4</span></a>
                            <a href="#"><span>5</span></a>
                            <a href="#"><span><i class="fa fa-arrow-right" aria-hidden="true"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //***Deals-List End***// -->
        <div class="clear"></div>

       
        @include('client/master/footer')
        @include('client/master/script/script')

        @yield('script')

    </body>

</html>