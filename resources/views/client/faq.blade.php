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

                        <h5>get all deals <i class="fa fa-tags" aria-hidden="true"></i></h5>

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

                            <h3><span>FAQ</span></h3>

                            <ul class="breadcrumb-list">

                                <li><a href="index.html">home</a></li>

                                <li><a href="#">faq</a></li>

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
            Why・Our favorite Question:<br>
            Since 1996, we have worked with 1,000’s of small Mom and Pops and Corporate<br> Businesses. We are real and
            we
            speak your language because we understand.<br> We started with an idea and a will to win, and we did.<br>
            Our policy of innovation and constant thinking keeps us sharp.<br>
            We may not win every battle but after serious Adversity, Recessions and <br>Pandemics, we are still in the
            fight
            and all because of all those entrepreneurs<br> who stood behind a fellow entrepreneur and expressed their
            loyalty.<br>
            Thank You Guys


        </div>

    </div>

    <!-- //***contact-section  End***// -->

    <div class="clear"></div>


    @include('client/master/footer')
    @include('client/master/script/script')

    @yield('script')

</body>

</html>
