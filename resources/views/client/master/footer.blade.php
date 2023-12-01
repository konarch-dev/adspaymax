 <!-- //***Footer-Section Start***// -->

 <div class="main-footer padT60">

    <div class="container">

        <div class="row">

            <div class="col-md-4 col-sm-4 col-xs-12">

                <div class="footer-logo">

                    <a href=""><img src="assets/img/footer-logo.png" alt=""></a>

                    <p>1850 McCulloch Blvd N, Ste C1-234, Lake Havasu City, AZ. 86403

                    </p>
                    <p>(928) 486-5189

                    </p>
                    <p>
                        info@adspaymax.com

                    </p>

                    <img src="assets/img/all/payment-icon.png" alt="">

                </div>

            </div>

            <div class="col-md-2 col-sm-2 col-xs-12">

                <h4>information</h4>

                <p><a href="/apmax1/about">about Us</a></p>

                <p><a href="">service</a></p>

                <p><a href="">recent</a></p>

                <p><a href="/apmax1/store">seller</a></p>

                <p><a href="">privacy</a></p>

                <p><a href="">policy</a></p>

            </div>

           

            <div class="col-md-2 col-sm-2 col-xs-12">

                <h4>categorie</h4>
                @foreach ($category as $val)
                <p><a href="">{{$val->name}}</a></p>
                @endforeach

               

            </div>

            <div class="col-md-2 col-sm-2 col-xs-12">

                <h4>my account</h4>

                <p><a href="">sign in</a></p>

                <p><a href="">view cart</a></p>

                <p><a href="">my wishlist</a></p>

                <p><a href="">track order</a></p>

                <p><a href="">shipping policy</a></p>

                <p><a href="">help</a></p>

            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="newsletter">

                    <div class="col-md-3 col-sm-3 col-xs-12">

                        <div class="row">

                            <h5>sign up for</h5>

                            <h3>newsletter</h3>

                        </div>

                    </div>

                    <div class="col-md-5 col-sm-5 col-xs-12">

                        <div class="row">

                            <div class="newsletter-bar">

                                <input type="text" placeholder="Enter E-mail address">

                            </div>

                            <div class="submit">

                                <a href="#" class="itg-btn">submit</a>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12 text-right">

                        <div class="row">

                            <ul>

                                <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>

                                <li><a href=""><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>

                                <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

                                <li><a href=""><i class="fa fa-skype" aria-hidden="true"></i></a></li>

                                <li><a href=""><i class="fa fa-pinterest-square" aria-hidden="true"></i></a></li>

                                <li><a href=""><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>

                                <li><a href=""><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>

                                <li><a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<div class="copyright-section">

    <div class="col-md-12 col-sm-12 col-xs-12">

        <p><i class="fa fa-copyright" aria-hidden="true"></i> @php echo date('Y'); @endphp Aspaymax Best Offer and deals.</p>

    </div>

</div>

<!-- //***Footer-Section End***// -->