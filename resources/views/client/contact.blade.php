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

                                <h3><span>contact</span></h3>

                                <ul class="breadcrumb-list">

                                    <li><a href="index.html">home</a></li>

                                    <li><a href="#">contact</a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- //***Breadcrumb-Section End***// -->

        <!-- //***contact-section  Start***// -->

        <div class="contact-section bg padTB60">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="row">

                            <div class="comments-form">

                                <div class="coments col-md-12 col-sm-12 col-xs-12 marB30">

                                    <h3>contact us</h3>

                                </div>

                                <div class="col-md-6 col-sm-12 col-xs-12 marB30">

                                    <input type="text" name="name" value="" placeholder="Name">

                                </div>

                                <div class="col-md-6 col-sm-12 col-xs-12 marB30">

                                    <input type="text" name="email" value="" placeholder="Email">

                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-12 marB30">

                                    <input type="text" name="subject" value="" placeholder="Subject">

                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-12 marB30">

                                    <textarea placeholder="Message" rows="5"></textarea>

                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-12">

                                    <button type="submit" class="itg-btn subcribes">subcribes now</button>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="location-map marT50">

                            <div id='gmap_canvas'></div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- //***contact-section  End***// -->

        <div class="clear"></div>

      
        @include('client/master/footer')
        @include('client/master/script/script')

        @yield('script')

    </body>

</html>