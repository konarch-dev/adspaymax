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

                            <h5>About Us <i class="fa fa-tags" aria-hidden="true"></i></h5>

                        </a>

                    </div>

                </div>

            </div>

        </div>

        <!-- //***breadcrumb-section- Start***// -->

        <div class="breadcrumb-section">

            <div class="breadcrumb-text">

                <div class="container">

                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">

                            <div class="breadcrumb-text padTB50">

                                <h3><span>About Us</span></h3>

                                <ul class="breadcrumb-list">

                                    <li><a href="index.html">About Us</a></li>


                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- //***breadcrumb-section- Start***// -->

        <!-- //***latest-blog Start***// -->

        <div class="latest-blog bg slidernav padTB60">

            <div class="container">

                <div class="row">

                    <div class="col-md-4 col-sm-4 col-xs-12 marB30">

                        <div class="box-a">

                            <figure>

                                <img src="{{ asset('assets/img/logo.png')}}" alt="">

                            </figure>

                           

                        </div>

                    </div>

                    <p>Since 1996 we published and home delivered magazines to in excess of 20 million households and when we thought about it, multiplied those number by 11” and divided them by 36 we got yards. Then we divided those yards by 1760 we got miles.

                    We went….that enough magazines laid end to end to take us from the London Bridge to the Statue of Liberty and halfway back. It was a winner for years but as Winston Churchill said:  “To Improve is to Change: But to be perfect is to Change Often.”
                    
                    Today, the change is with us as technology and the digital world creates huge consumer reach to audiences who demand ease of accessibility when purchasing goods and services. We understood that as the original innovator of Mailed Magazine in our area, we needed to get a handle on this, so we did.
                    
                    We asked 100's of Mom and Pop businesses what would justify investment into their marketing futures and the top 4 answers were hands down the most in demand:
                    
                    Exclusivity・Target Buyers・Guarantee・Affordability</p>
                    
                    <p>None of this could we offer in the past and the current options on offer still fail to provide any of these requests. We innovated a winner many years ago and we looked at the Powerhouses of recent fame and traced their footsteps:
                    
                    Remember Phone Books, we do as we bought ads in them. Today, where are they? They are almost gone. Change was something they believed they did not need to pursue.
                    
                    Newspapers today are hanging by a thread. Who subscribes? Very few, as they left it too late to accept that digital news would control and for them to STILL ask for fees to subscribe to on-line versions is pretty bold, as 90% of News is digital and FREE.
                    
                    Remember Pagers? But as with all technology, could they adjust and move with the times? Yes, they could, and they did as they innovated better systems and today, we call them SMART PHONES.
                    
                    And guess what, we all have one and so does almost everyone…. even Grandma and Grandpa.</p>
                    <p>
                    
                    So that's a little about us. We have never walked away from a challenge and this new challenge we believe we have got the answers you are looking for. Without accepting change, we guarantee you will be left behind to struggle, because those who accept the change inevitably lead the way.
                    
                    Are we the answer for everyone? Maybe not yet, but we are getting there with a one-on-one approach, and we are winning. Call us, contact us, whatever it takes we are here.
                    
                    info@adspaymax.com   (928) 605-5665</p>
                </div>

            </div>

        </div>

        <!-- //***latest-blog End***// -->

        <div class="clear"></div>

       
        @include('client/master/footer')
        @include('client/master/script/script')

        @yield('script')

    </body>

</html>