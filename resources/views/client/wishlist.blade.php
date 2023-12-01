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

                                <h3><span>wishlist</span></h3>

                                <ul class="breadcrumb-list">

                                    <li><a href="index.html">home</a></li>

                                    <li><a href="#">wishlist</a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- //***breadcrumb-section End***// -->

        <!-- //***Whishlist-Section Start***// -->

        <div class="shopcart-section bg padTB60">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="shopcart-box marB20">

                            <div class="col-md-8 col-sm-7 col-xs-12">

                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    <h4>product</h4>

                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    <div class="row">

                                        <h4 class="text-right">total</h4>

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-4 col-sm-5 col-xs-12">

                                <h4>stock status</h4>

                            </div>

                        </div>

                    </div>

                    <div class="cart-details marT30 marB30 cart-xs cart-mr">

                        <div class="col-md-8 col-sm-7 col-xs-12">

                            <div class="col-md-6 col-sm-8 col-xs-12">

                                <div class="cart-detail marB30">

                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        <figure>

                                            <img src="{{ asset('assets/img/all/cart1.jpg')}}" alt="">

                                        </figure>

                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        <div class="row">

                                            <h4 class="capital">Flate 25% OFF on Men’s Clothing</h4>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-6 col-sm-4 col-xs-12">

                                <div class="cart-input text-right">

                                    <h3>$55</h3>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-4 col-sm-5 col-xs-12">

                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <h3 class="cart-price capital">in stock</h3>

                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12 text-right">

                                <div class="status marT50">

                                    <a href="#" class="itg-btn cart-btn wishlist">add to cart</a>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="cart-details marT30 marB30 cart-xs cart-mr">

                        <div class="col-md-8 col-sm-7 col-xs-12">

                            <div class="col-md-6 col-sm-8 col-xs-12">

                                <div class="cart-detail marB30">

                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        <figure>

                                            <img src="{{ asset('assets/img/all/cart2.jpg')}}" alt="">

                                        </figure>

                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        <div class="row">

                                            <h4 class="capital">Flate 25% OFF on Men’s Clothing</h4>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-6 col-sm-4 col-xs-12">

                                <div class="cart-input text-right">

                                    <h3>$55</h3>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-4 col-sm-5 col-xs-12">

                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <h3 class="cart-price capital">in stock</h3>

                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12 text-right">

                                <div class="status marT50">

                                    <a href="#" class="itg-btn cart-btn wishlist">add to cart</a>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="cart-details marT30 cart-xs cart-mr">

                        <div class="col-md-8 col-sm-7 col-xs-12">

                            <div class="col-md-6 col-sm-8 col-xs-12">

                                <div class="cart-detail marB30">

                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        <figure>

                                            <img src="{{ asset('assets/img/all/cart2.jpg')}}" alt="">

                                        </figure>

                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        <div class="row">

                                            <h4 class="capital">Flate 25% OFF on Men’s Clothing</h4>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-6 col-sm-4 col-xs-12">

                                <div class="cart-input text-right">

                                    <h3>$55</h3>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-4 col-sm-5 col-xs-12">

                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <h3 class="cart-price capital">in stock</h3>

                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12 text-right">

                                <div class="status marT50">

                                    <a href="#" class="itg-btn cart-btn wishlist">add to cart</a>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- //***Whishlist-Section End***// -->

        <div class="clear"></div>

       
        @include('client/master/footer')
        @include('client/master/script/script')

        @yield('script')

    </body>

</html>