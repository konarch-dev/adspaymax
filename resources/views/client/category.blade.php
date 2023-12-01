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

                                <h3><span>all categories</span></h3>

                                <ul class="breadcrumb-list">

                                    <li><a href="index.html">home</a></li>

                                    <li><a href="#">all categories</a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- //***Breadcrumb-section End***// -->

        <!-- //***Categories-Section start***// -->

        <div class="categories-section bg padTB60">

            <div class="container">

                <div class="row">

                    <div class="col-md-4 col-sm-4 col-xs-12 marB30">

                        <div class="categorie-box">

                            <figure>

                                <img src="{{ asset('assets/img/all/image7.jpg')}})" alt="">

                                <figcaption>

                                    <a href="#"><i class="flaticon-armchair-silhouette"></i></a>

                                    <h3><a href="#">furnimart</a></h3>

                                </figcaption>

                            </figure>

                        </div>

                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12 marB30">

                        <div class="categorie-box">

                            <figure>

                                <img src="{{ asset('assets/img/all/image7.jpg')}})" alt="">

                                <figcaption>

                                    <a href="#"><i class="flaticon-diamond"></i></a>

                                    <h3><a href="#">fashion</a></h3>

                                </figcaption>

                            </figure>

                        </div>

                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12 marB30">

                        <div class="categorie-box">

                            <figure>

                                <img src="{{ asset('assets/img/all/image7.jpg')}})" alt="">

                                <figcaption>

                                    <a href="#"><i class="flaticon-paintbrush"></i></a>

                                    <h3><a href="#">home & garden</a></h3>

                                </figcaption>

                            </figure>

                        </div>

                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12 marB30">

                        <div class="categorie-box">

                            <figure>

                                <img src="{{ asset('assets/img/all/image7.jpg')}})" alt="">

                                <figcaption>

                                    <a href="#"><i class="flaticon-pc-computer-with-monitor"></i></a>

                                    <h3><a href="#">electronics</a></h3>

                                </figcaption>

                            </figure>

                        </div>

                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12 marB30">

                        <div class="categorie-box">

                            <figure>

                                <img src="{{ asset('assets/img/all/image7.jpg')}})" alt="">

                                <figcaption>

                                    <a href="#"><i class="flaticon-air-transport"></i></a>

                                    <h3><a href="#">travel</a></h3>

                                </figcaption>

                            </figure>

                        </div>

                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12 marB30">

                        <div class="categorie-box">

                            <figure>

                                <img src="{{ asset('assets/img/all/image7.jpg')}})" alt="">

                                <figcaption>

                                    <a href="#"><i class="flaticon-eight-ball"></i></a>

                                    <h3><a href="#">entertainment</a></h3>

                                </figcaption>

                            </figure>

                        </div>

                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12 mr-xs">

                        <div class="categorie-box">

                            <figure>

                                <img src="{{ asset('assets/img/all/image7.jpg')}})" alt="">

                                <figcaption>

                                    <a href="#"><i class="flaticon-dumbbell-for-training"></i></a>

                                    <h3><a href="#">fitness</a></h3>

                                </figcaption>

                            </figure>

                        </div>

                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12 mr-xs">

                        <div class="categorie-box">

                            <figure>

                                <img src="{{ asset('assets/img/all/image7.jpg')}})" alt="">

                                <figcaption>

                                    <a href="#"><i class="flaticon-perfume"></i></a>

                                    <h3><a href="#">beauty</a></h3>

                                </figcaption>

                            </figure>

                        </div>

                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">

                        <div class="categorie-box">

                            <figure>

                                <img src="{{ asset('assets/img/all/image7.jpg')}})" alt="">

                                <figcaption>

                                    <a href="#"><i class="flaticon-dinner"></i></a>

                                    <h3><a href="#">food & drink</a></h3>

                                </figcaption>

                            </figure>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- //***categories-section End***// -->

        <div class="clear"></div>

       
        @include('client/master/footer')
        @include('client/master/script/script')

        @yield('script')

    </body>

</html>