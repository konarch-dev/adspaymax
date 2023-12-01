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

        <!-- //***breadcrumb-section- Start***// -->

        <div class="breadcrumb-section">

            <div class="breadcrumb-text">

                <div class="container">

                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">

                            <div class="breadcrumb-text padTB50">

                                <h3><span>blog</span></h3>

                                <ul class="breadcrumb-list">

                                    <li><a href="index.html">home</a></li>

                                    <li><a href="#">blog grid</a></li>

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

                                <img src="{{ asset('assets/img/blog/image1.jpg')}}" alt="">

                            </figure>

                            <div class="box-detail">

                                <div class="col-md-12">

                                    <div class="row">

                                        <h4 class="hover marB10"><a href="blog-details.html">post title here</a></h4>

                                        <ul class="marB10 fonts">

                                            <li><a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i> MAY 24, 2015</a></li>

                                            <li class="marL10 upper"><a href="#"><i class="fa fa-comment" aria-hidden="true"></i> comments</a></li>

                                        </ul>

                                        <p>Lorem Ipsum is simply dummy text of therinting andey type setting industry lorem Ipsum is simply dummy.</p>

                                        <span><a href="blog-details.html" class="hover">read more</a></span>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="item">

                        <div class="col-md-4 col-sm-4 col-xs-12 marB30">

                            <div class="box-a">

                                <figure>

                                    <img src="{{ asset('assets/img/blog/image2.jpg')}}" alt="">

                                </figure>

                                <div class="box-detail">

                                    <div class="col-md-12">

                                        <div class="row">

                                            <h4 class="hover marB10"><a href="blog-details.html">post title here</a></h4>

                                            <ul class="marB10 fonts">

                                                <li><a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i> MAY 24, 2015</a></li>

                                                <li class="marL10 upper"><a href="#"><i class="fa fa-comment" aria-hidden="true"></i> comments</a></li>

                                            </ul>

                                            <p>Lorem Ipsum is simply dummy text of therinting andey type setting industry lorem Ipsum is simply dummy.</p>

                                            <span><a href="blog-details.html" class="hover">read more</a></span>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="item">

                        <div class="col-md-4 col-sm-4 col-xs-12 marB30">

                            <div class="box-a">

                                <figure>

                                    <img src="{{ asset('assets/img/blog/image3.jpg')}}" alt="">

                                </figure>

                                <div class="box-detail">

                                    <div class="col-md-12">

                                        <div class="row">

                                            <h4 class="hover marB10"><a href="blog-details.html">post title here</a></h4>

                                            <ul class="marB10 fonts">

                                                <li><a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i> MAY 24, 2015</a></li>

                                                <li class="marL10 upper"><a href="#"><i class="fa fa-comment" aria-hidden="true"></i> comments</a></li>

                                            </ul>

                                            <p>Lorem Ipsum is simply dummy text of therinting andey type setting industry lorem Ipsum is simply dummy.</p>

                                            <span><a href="blog-details.html" class="hover">read more</a></span>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12 marB30">

                        <div class="box-a">

                            <figure>

                                <img src="{{ asset('assets/img/blog/image2.jpg')}}" alt="">

                            </figure>

                            <div class="box-detail">

                                <div class="col-md-12">

                                    <div class="row">

                                        <h4 class="hover marB10"><a href="blog-details.html">post title here</a></h4>

                                        <ul class="marB10 fonts">

                                            <li><a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i> MAY 24, 2015</a></li>

                                            <li class="marL10 upper"><a href="#"><i class="fa fa-comment" aria-hidden="true"></i> comments</a></li>

                                        </ul>

                                        <p>Lorem Ipsum is simply dummy text of therinting andey type setting industry lorem Ipsum is simply dummy.</p>

                                        <span><a href="blog-details.html" class="hover">read more</a></span>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="item">

                        <div class="col-md-4 col-sm-4 col-xs-12 marB30">

                            <div class="box-a">

                                <figure>

                                    <img src="{{ asset('assets/img/blog/image3.jpg')}}" alt="">

                                </figure>

                                <div class="box-detail">

                                    <div class="col-md-12">

                                        <div class="row">

                                            <h4 class="hover marB10"><a href="blog-details.html">post title here</a></h4>

                                            <ul class="marB10 fonts">

                                                <li><a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i> MAY 24, 2015</a></li>

                                                <li class="marL10 upper"><a href="#"><i class="fa fa-comment" aria-hidden="true"></i> comments</a></li>

                                            </ul>

                                            <p>Lorem Ipsum is simply dummy text of therinting andey type setting industry lorem Ipsum is simply dummy.</p>

                                            <span><a href="blog-details.html" class="hover">read more</a></span>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="item">

                        <div class="col-md-4 col-sm-4 col-xs-12 marB30">

                            <div class="box-a">

                                <figure>

                                    <img src="{{ asset('assets/img/blog/image1.jpg')}}" alt="">

                                </figure>

                                <div class="box-detail">

                                    <div class="col-md-12">

                                        <div class="row">

                                            <h4 class="hover marB10"><a href="blog-details.html">post title here</a></h4>

                                            <ul class="marB10 fonts">

                                                <li><a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i> MAY 24, 2015</a></li>

                                                <li class="marL10 upper"><a href="#"><i class="fa fa-comment" aria-hidden="true"></i> comments</a></li>

                                            </ul>

                                            <p>Lorem Ipsum is simply dummy text of therinting andey type setting industry lorem Ipsum is simply dummy.</p>

                                            <span><a href="blog-details.html" class="hover">read more</a></span>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12 marB30">

                        <div class="box-a">

                            <figure>

                                <img src="{{ asset('assets/img/blog/image2.jpg')}}" alt="">

                            </figure>

                            <div class="box-detail">

                                <div class="col-md-12">

                                    <div class="row">

                                        <h4 class="hover marB10"><a href="blog-details.html">post title here</a></h4>

                                        <ul class="marB10 fonts">

                                            <li><a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i> MAY 24, 2015</a></li>

                                            <li class="marL10 upper"><a href="#"><i class="fa fa-comment" aria-hidden="true"></i> comments</a></li>

                                        </ul>

                                        <p>Lorem Ipsum is simply dummy text of therinting andey type setting industry lorem Ipsum is simply dummy.</p>

                                        <span><a href="blog-details.html" class="hover">read more</a></span>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="item">

                        <div class="col-md-4 col-sm-4 col-xs-12 marB30">

                            <div class="box-a">

                                <figure>

                                    <img src="{{ asset('assets/img/blog/image3.jpg')}}" alt="">

                                </figure>

                                <div class="box-detail">

                                    <div class="col-md-12">

                                        <div class="row">

                                            <h4 class="hover marB10"><a href="blog-details.html">post title here</a></h4>

                                            <ul class="marB10 fonts">

                                                <li><a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i> MAY 24, 2015</a></li>

                                                <li class="marL10 upper"><a href="#"><i class="fa fa-comment" aria-hidden="true"></i> comments</a></li>

                                            </ul>

                                            <p>Lorem Ipsum is simply dummy text of therinting andey type setting industry lorem Ipsum is simply dummy.</p>

                                            <span><a href="blog-details.html" class="hover">read more</a></span>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="item">

                        <div class="col-md-4 col-sm-4 col-xs-12 marB30">

                            <div class="box-a">

                                <figure>

                                    <img src="{{ asset('assets/img/blog/image2.jpg')}}" alt="">

                                </figure>

                                <div class="box-detail">

                                    <div class="col-md-12">

                                        <div class="row">

                                            <h4 class="hover marB10"><a href="blog-details.html">post title here</a></h4>

                                            <ul class="marB10 fonts">

                                                <li><a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i> MAY 24, 2015</a></li>

                                                <li class="marL10 upper"><a href="#"><i class="fa fa-comment" aria-hidden="true"></i> comments</a></li>

                                            </ul>

                                            <p>Lorem Ipsum is simply dummy text of therinting andey type setting industry lorem Ipsum is simply dummy.</p>

                                            <span><a href="blog-details.html" class="hover">read more</a></span>

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

        <!-- //***latest-blog End***// -->

        <div class="clear"></div>

       
        @include('client/master/footer')
        @include('client/master/script/script')

        @yield('script')

    </body>

</html>