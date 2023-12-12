<!DOCTYPE html>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<head>

    <style>
        h5 {
            color: black;
        }

        .col-lg-6 {
            margin-right: -15px;
        }

        body {
            padding-top: 50px;
        }

        .box {
            border-radius: 3px;
            box-shadow: 0 2px 5px 0 rgba(82, 82, 82, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
            padding: 10px 25px;
            text-align: right;
            display: block;
            margin-top: 60px;
        }

        .box-icon span {
            color: #0b0b0b;
            display: table-cell;
            text-align: center;
            vertical-align: middle;
        }


        .featured-section {
            margin-top: 30px;
        }

        * {
            box-sizing: border-box;
        }

        .featured-section h2 {
            font-size: 22px;
            /* font-family: 'Barlow', sans-serif; */
            font-weight: 600;
            padding: 0;
            margin: 0;
        }

        .button-87 {
            margin: 10px;
            margin-left: 120px;
            padding: 14px 30px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;
            border-radius: 10px;
            display: block;
            border: 0px;
            font-weight: 900;
            box-shadow: 0px 0px 14px -7px #6b8a1e;
            background-image: linear-gradient(45deg, #d43818 0%, #2f1e1e 51%, #bd2507 100%);
            cursor: pointer;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }

        .button-87:hover {
            background-position: right center;
            /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
        }

        .button-87:active {
            transform: scale(0.95);
        }

        .vc_btn3.vc_btn3-size-lg .vc_btn3-icon {
            font-size: 20px;

            height: 16px;

            line-height: 16px;
        }
    </style>

</head>
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

                            <h3><span>
                                    What We Offer

                                </span></h3>

                            <ul class="breadcrumb-list">

                                <li><a href="index.html">home</a></li>

                                <li><a href="#">
                                        What We Offer

                                    </a></li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="contact-section bg padTB60">


        <p style="color: #333;font-size: 30px !important; margin-left: 80px;font-family: 'Barlow',sans-serif;">
            Savings and Coupons from AdsPayMAX

        </p>

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="box">

                        <div class="info">
                            <h4 class="text-center">DIGITAL MAGAZINE</h4><br>
                            <img style="max-width: 100%;height: auto;object-fit: contain;display: block;text-align: center"
                                src="{{ asset('/public/assets/img/all/offer1.jpg') }}" alt=""><br>
                            <p
                                style="font-size: 20px;font-family: ABeeZee;color: black;text-align: center;
                ">
                                Simply
                                click on the image
                                above to scroll through our
                                entire Mohave County
                                adspayMAX
                            </p>
                            <a href=""> <button class="button-87" role="button">
                                    FIND OUT MORE</button></a>
                            <i class="fa-solid fa-circle-right"></i>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="box">

                        <h4 class="text-center">ADSPAYMAX・POCKET BOOK COUPONS</h4><br>
                        <img style="max-width: 100%;height: auto;object-fit: contain;display: block;text-align: center"
                            src="{{ asset('/public/assets/img/all/offer2.jpg') }}" alt=""><br>
                        <p
                            style="font-size: 20px;font-family: ABeeZee;color: black;text-align: center;
                            ">
                            Simply
                            click on the image
                            above to scroll through our vast array of deals on food and drink.
                        </p>
                        <a href=""> <button class="button-87" role="button">
                                FIND OUT MORE</button></a><br>
                        <i class="fa-solid fa-circle-right"></i>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col"
                    style="background-color: #ff00008c; font-family: Advent Pro;padding-left: 12px;
                padding-top: 10px;">

                    <p style="font-size: 18px;font-family: 'Barlow',sans-serif;color: rgb(255, 255, 255)"> National
                        Coupons・Now 100%
                        Digital
                    </p>
                </div><br>
                {{-- <div class="col">
                    <x-blogslider />
                </div> --}}
                <div class="col">
                    <x-imgslider />
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div>

                        <img src="{{ url('/public/assets/img/all/p1.jpg') }}" alt=""><br>
                        <br>
                        <a href=""> <button class="button-87" role="button">
                                FIND OUT MORE</button></a>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div>
                        <img src="{{ url('/public/assets/img/all/p2.jpg') }}" alt=""><br>
                        <br>
                        <a href=""> <button class="button-87" role="button">
                                FIND OUT MORE</button></a><br>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div>

                        <img src="{{ url('/public/assets/img/all/p3.jpg') }}" alt=""><br>
                        <br>
                        <a href=""> <button class="button-87" role="button">
                                FIND OUT MORE</button></a>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="box">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <img src="{{ url('/public/assets/img/all/d1.jpg') }}" alt="">
                        <br><br>
                        <h5 class="text-center">DIGITAL MAGAZINE</h5><br>
                        <p
                            style="font-size: 16px;font-family:Source Sans Pro;color: black;text-align: center;
                ">
                            A replica of our original, but with a cool twist in a Digital Format.
                            We have 1 size that fits all.
                            And 1 price that suits all.<br><br>
                            Ads designed to your approval and placed within our Magazine. Remember, if customers can’t
                            find you, get involved. They may start to believe you don’t exist.<br><br>
                            Having a big sale, or a brand new event? Then lets announce it to Smart Phones as we create
                            links to ours and your: WEBSITES・SOCIAL MEDIA PLATFORMS
                        </p>

                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <img src="{{ url('/public/assets/img/all/d2.jpg') }}" alt="">
                        <br><br>
                        <h5 class="text-center">DIGITAL POCKET BOOK・COUPONS</h5><br>
                        <p
                            style="font-size: 16px;font-family:Source Sans Pro;color: black;text-align: center;
                            ">
                            Select Your Category of Business:
                            EATS・PRO SERVICES・CHARITY
                            HEALTH & BEAUTY
                            HOME SERVICES・AUTO & BOAT
                            <br><br>All ads sized as full pages to fit Facebook and all Social Media.<br><br>
                            Advertisers must offer at least 1 awesome deal with a maximum 2 deals per page.
                            unlimited ads per customer per month
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <img src="{{ url('/public/assets/img/all/d3.jpg') }}" alt="">
                        <br><br>
                        <h5 class="text-center">CLASSIC TARGET MAIL</h5><br>
                        <p
                            style="font-size: 16px;font-family:Source Sans Pro;color: black;text-align: center;
                ">
                            Do you believe that your message needs to be in EVERY home and that way you can’t miss a
                            buyer? Did you nod your head? We need to talk!
                            We provided that SATURATION service for 25 years until we saw the light and realized it was
                            time to re-think and time for change, and we did.
                            Today, we offer much more for much less and boldly guarantee growth.<br><br>
                            MAX offers exclusive postcards mailed only to the buyers you’ve never met, on a monthly or
                            weekly affordable basis.
                            NO WASTE・HUGE ROI・EXCLUSIVITY
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <img src="{{ url('/public/assets/img/all/m1.jpg') }}" alt="">
                            <br>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <br><br><br>
                            <h2
                                style="font-size: 16px;color: #000000;text-align: left;font-family:ABeeZee;font-weight:400;font-style:normal">
                                What's It Cost・Here's Our Transparency・Stage 1</h2>
                            <h2
                                style="font-size: 18px;color: #0f0f0f;text-align: left;font-family:ABeeZee;font-weight:400;font-style:normal">
                                DIGITAL ADSPAYMAX COUPON BOOK</h2><br>
                            <h2
                                style="font-size: 14px;color: #dd3333;text-align: left;;font-weight:600;font-style:normal;font-family: serif;">
                                A monthly pre-paid plan at a price less than a cup of coffee per day</h2><br>
                            <ol
                                style="    unicode-bidi: isolate;
                            font-variant-numeric: tabular-nums;
                            text-transform: none;
                            text-indent: 0px !important;
                            text-align: start !important;
                            text-align-last: start !important;">
                                <li>
                                    All ads are Full Pages with Max 2 deals per ad
                                </li>
                                <li>
                                    Distributed monthly in Week 1 and again in Week 3 to 12,500 minimum registered
                                    users.
                                </li>
                                <li>
                                    Distributed monthly on all our web-sites, social media sites, plus links back to
                                    your individual site.
                                </li>
                            </ol><br>
                            <p
                                style="color: #0b0b0b;text-align: left;font-family: Source Sans Pro;    font-size: 16px;">
                                If qualified, your
                                choice to be included
                                within Groucherz on-line
                                voucher system
                                web-site, where we distribute to all users daily and
                                <strong>
                                    we pay you a fixed percentage
                                </strong> of all sales.
                            </p>
                        </div>
                    </div>
                    <br>
                    <div class="row">

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <br><br><br>
                            <h2
                                style="font-size: 16px;color: #000000;text-align: left;font-family:ABeeZee;font-weight:400;font-style:normal">
                                What's It Cost・Here's Our Transparency・Stage 2
                            </h2>
                            <h2
                                style="font-size: 18px;color: #0f0f0f;text-align: left;font-family:ABeeZee;font-weight:400;font-style:normal">
                                DIGITAL ADSPAYMAX MAGAZINE</h2><br>
                            <h2
                                style="font-size: 14px;color: #dd3333;text-align: left;;font-weight:600;font-style:normal;font-family: serif;">
                                A monthly pre-paid plan at a price less than an expresso coffee per day</h2><br>
                            <ol
                                style="    unicode-bidi: isolate;
                            font-variant-numeric: tabular-nums;
                            text-transform: none;
                            text-indent: 0px !important;
                            text-align: start !important;
                            text-align-last: start !important;">
                                <li>
                                    Use for multiple deals, brand awareness, infomercials and potential editorials.
                                </li>
                                <li>
                                    Distributed monthly in Week 1 and again in Week 3 to 12,500 minimum registered
                                    users.
                                </li>

                            </ol><br>
                            <p
                                style="color: #0b0b0b;text-align: left;font-family: Source Sans Pro;    font-size: 16px;">
                                Distributed monthly on all our web-sites, social media sites, plus links back to your
                                individual site.If qualified, your choice to be included within Groucherz on-line
                                voucher system web-site, where we distribute to all users daily and
                                <strong>
                                    we pay you a fixed percentage of all sales.
                                </strong>
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <img src="{{ url('/public/assets/img/all/m2.jpg') }}" alt="">
                            <br>
                        </div>
                    </div>
                    <br>


                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <img src="{{ url('/public/assets/img/all/m3.jpg') }}" alt="">
                            <br>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <br><br><br>
                            <h2
                                style="font-size: 16px;color: #000000;text-align: left;font-family:ABeeZee;font-weight:400;font-style:normal">
                                What's It Cost・Here's Our Transparency・Stage 3</h2>
                            <h2
                                style="font-size: 18px;color: #0f0f0f;text-align: left;font-family:ABeeZee;font-weight:400;font-style:normal">
                                EXCLUSIVE ADSPAYMAX MASS EMAILS</h2><br>
                            <h2
                                style="font-size: 14px;color: #dd3333;text-align: left;;font-weight:600;font-style:normal;font-family: serif;">
                                A monthly pre-paid plan at a price less than 2 cups of coffee per day but a maximum 2
                                mass mailings per month</h2><br>
                            <ol
                                style="    unicode-bidi: isolate;
                            font-variant-numeric: tabular-nums;
                            text-transform: none;
                            text-indent: 0px !important;
                            text-align: start !important;
                            text-align-last: start !important;">
                                <li>
                                    Totally Individual and Exclusive.
                                </li>
                                <li>
                                    Unlimited Information.
                                </li>
                            </ol><br>
                            <p
                                style="color: #0b0b0b;text-align: left;font-family: Source Sans Pro;    font-size: 16px;">
                                If qualified, your choice to be included within Groucherz on-line voucher system
                                web-site, where we distribute to all users daily and
                                <strong>
                                    we pay you a fixed percentage of all sales.
                                </strong>
                            </p>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <br><br>
                            <h2
                                style="font-size: 16px;color: #000000;text-align: left;font-family:ABeeZee;font-weight:400;font-style:normal">
                                What's it Cost・Here's Our Transparency・Stage 4
                            </h2>
                            <h2
                                style="font-size: 18px;color: #0f0f0f;text-align: left;font-family:ABeeZee;font-weight:400;font-style:normal">
                                TARGETED & SATURATION INDIVIDUAL MAIL・WEEKLY OR MONTHLY</h2><br>
                            <h2
                                style="font-size: 14px;color: #dd3333;text-align: left;;font-weight:600;font-style:normal;font-family: serif;">
                                Call for Volume and Rates.</h2><br>
                            <h2 style="font-size: 14px;font-style: normal;color:black;text-align: left">
                                Volumes:
                                1,000・5,000・10,000・20,000 and Pricing per piece varies dependent on your requests.<br>
                                A Top Shelve Eye Opener・ Classic Full Color Cardstock.
                                Max efficiency・Zero Waste.
                            </h2>
                            <ul
                                style="    unicode-bidi: isolate;
                            font-variant-numeric: tabular-nums;
                            text-transform: none;
                            text-indent: 0px !important;
                            text-align: start !important;
                            text-align-last: start !important;list-style-type: circle;  padding-left: 18px;color: #0b0b0b;font-size: 14px;">

                                <li>Buy all card・Target only your buyers.
                                </li>
                                <li>Share Jumbo Card with up to 10 others, and mail to qualified buyers within
                                    your specific
                                    category
                                </li>
                                <li>FOOD & DRINK
                                </li>
                                <li>HEALTH & BEAUTY
                                </li>
                                <li>HOME & GARDEN
                                </li>
                                <li>PRO-SERVICES
                                </li>
                                <li>FUN IN THE SUN
                                </li>
                            </ul>
                            <p style="color: #0b0b0b;text-align: left;font-family: Source Sans Pro;font-size: 16px;">
                                Pricing varies per card per business/mail drop. Additional copies to Hotels and Motels.
                                <strong>
                                    Call for more options
                                </strong>
                                and details and exact pricing.
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <img src="{{ url('/public/assets/img/all/m4.png') }}" alt="">
                            <br>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div><br>
        <p style="text-align: center;color:#050404"> WHAT WE'RE ALL ABOUT・COMMUNITY COMMITMENT</p>
        <div style="font-family: ui-sans-serif;color:#050404;padding-left: 90px"> MOTION GRAPHICS・PART 1 IF YOUR
            MESSAGE MOVES・SO DO THEIR
            EYES</div>
        <br>
        <div style=" display: block;z-index: 10;
        position: relative;text-align: center;">
            <iframe style="    width: 1140px;
            height: 641px"
                src="http://www.youtube.com/embed/oNVaEkuFuiU">
            </iframe>

        </div>
        <br>
        @include('client/master/footer')
        @include('client/master/script/script')

        @yield('script')

</body>

</html>
