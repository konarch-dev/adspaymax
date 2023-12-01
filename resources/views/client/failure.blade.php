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

        <!-- //***breadcrumb-section Start***// -->

        <div class="breadcrumb-section">

            <div class="breadcrumb-text">

                <div class="container">

                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">

                            <div class="breadcrumb-text padTB50">

                                <h3><span>Sign In</span></h3>

                              

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- //***breadcrumb-section End***// -->

        <!-- //***Blog-List Start***// -->

        <div class="latest-blog bg slidernav padTB60">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12 marB30">

                        <div class="box-x">

                            <div class="col-md-4 col-sm-5 col-xs-12">

                                <div class="row">

                                    <figure>

                                        <img style="height: 300px;width:auto;" src="{{ asset('assets/img/all/login.jpeg')}}" alt="">

                                    </figure>

                                </div>

                            </div>

                            <div class="col-md-8 col-sm-7 col-xs-12">

                                <div class="row">

                                    <div class="box-detail res-width">

                                        <div class="col-md-12">

                                            <div class="row">
                                              Transaction failure
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

        <!-- //***Blog-List End***// -->

        <div class="clear"></div>

       
        @include('client/master/footer')
        @include('client/master/script/script')

        @yield('script')

    </body>

</html>