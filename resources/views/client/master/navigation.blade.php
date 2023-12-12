@section('content')
    <div class='preloader'>

        <div class='loader-center'>

            <div class='loader'>

                <div class='circle circle-1'></div>

                <div class='circle circle-2'></div>

                <div class='circle circle-3'></div>

                <div class='circle circle-4'></div>

            </div>

        </div>

    </div>

    <!-- //***Header-section Start***// -->

    <style>
        @media screen and (min-width: 30em) and (orientation: landscape) {


            #category2 {
                display: none;
            }

            #category1 {
                display: inline-block;
            }
        }

        @media (min-height: 680px),
        screen and (orientation: portrait) {

            #category1 {
                display: none;
            }

            #category2 {
                display: inline;
            }

        }
    </style>


    <!-- //***Header-section Start***// -->

    <div class="main-header">

        <div class="top-bar" id="top-bar-sec">

            <div class="container">

                <div class="row">

                    <div class="col-md-6 col-sm-6 col-xs-12">


                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12 text-right">
                        @if (Session::get('cid'))
                            <a href="#" style="color: white"><i class="fa fa-user"
                                    aria-hidden="true"></i>&nbsp;&nbsp;Hello {{ Session::get('cusername') }} !!</a>
                            &nbsp;&nbsp;<a href="{{ route('client.logout') }}" style="color: white">Logout</a>
                        @else
                            <div class="contacts">



                                <ul>
                                    <li><a href="{{ route('client.login') }}"><i class="fa fa-user" aria-hidden="true"></i>
                                            login</a></li>

                                    <li class="marL30"><a href="{{ route('client.signup') }}"><i class="fa fa-lock"
                                                aria-hidden="true"></i> signup</a></li>
                                </ul>



                            </div>
                        @endif

                    </div>

                </div>

            </div>

        </div>

        <div class="middle">

            <div class="container">

                <div class="row">

                    <div class="col-md-3 col-sm-3 col-xs-12">

                        <a class="navbar-brand" href="{{ url(route('client.home')) }}">

                            <img class="site_logo" style="width: 65%" alt="Site Logo"
                                src="{{ asset('assets/img/logo.png') }}" /></a>

                    </div>

                    <div class="col-md-7 col-sm-7 col-xs-12">

                        <div class="header-searchbar">

                            <select name="Categories">

                                <option value="#">All Categories</option>
                                @foreach ($category as $val)
                                    <option value="{{ $val->id }}"><a
                                            href="/category-list/{{ $val->id }}">{{ $val->name }}</a></option>
                                @endforeach



                            </select>

                            <input type="text" name="search" placeholder="Enter Key Words Here..">

                            <button type="submit" class="search-btn"><i class="fa fa-search"
                                    aria-hidden="true"></i></button>

                        </div>

                    </div>

                    <div class="col-md-2 col-sm-2 col-xs-12">

                        <ul class="shopping-cart">

                            <li class="marL20"><a href="#"><i class="flaticon-shopping-cart"></i><sup>2</sup></a></li>

                            <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

        <div id="main-menu" class="wa-main-menu main-menu">

            <!-- Menu -->

            <div class="wathemes-menu relative">

                <!-- navbar -->

                <div class="navbar navbar-default theme-bg mar0" role="navigation">

                    <div class="container">

                        <div class="row">

                            <div class="col-md-12 col-sm-12 col-xs-12">

                                <div class="navbar-header">

                                    <!-- Button For Responsive toggle -->

                                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target=".navbar-collapse">

                                        <span class="sr-only">Toggle navigation</span>

                                        <span class="icon-bar"></span>

                                        <span class="icon-bar"></span>

                                        <span class="icon-bar"></span>

                                    </button>

                                    <!-- Logo -->

                                </div>

                                <!-- Navbar Collapse -->

                                <div class="navbar-collapse collapse">

                                    <div class="row">

                                        <!-- nav -->

                                        <ul class="nav navbar-nav">

                                            <li class="marR20"><a href="{{ url('/client') }}">home</a></li>





                                            <li>

                                                <a href="#">blog <i class="fa fa-angle-down"
                                                        aria-hidden="true"></i></a>

                                                <ul class="dropdown-menu">

                                                    <li><a href="{{ url('/blog') }}">blog grid</a></li>

                                                    <li><a href="{{ url('/blog-list') }}">blog grid sidebar</a></li>

                                                    <li><a href="{{ url('/blog-list') }}">blog list</a></li>

                                                    <li><a href="{{ url('/blog-list') }}">blog list sidebar</a></li>

                                                    <li><a href="{{ url('/blog-list') }}">blog details</a></li>

                                                </ul>

                                            </li>

                                            <li id="category1">

                                                <a href="/apmax1-ddbkp/category">Categories <i class="fa fa-angle-down"
                                                        aria-hidden="true"></i></a>


                                                <ul class="dropdown-menu">
                                                    @foreach ($category as $key => $val)
                                                        <li>

                                                            <a href="/apmax1-ddbkp/category-list/{{ $val->id }}">{{ $val->name }}
                                                                <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                            @php
                                                                $tmp = $val->id;
                                                            @endphp

                                                            <ul class="dropdown-menu">

                                                                @foreach ($menu['menu'] as $key => $val)
                                                                    @foreach ($menu['menu'][$key] as $keys => $vals)
                                                                        @if ($menu['menu'][$key][$keys]['primary'] == $tmp)
                                                                            <li>
                                                                                <a
                                                                                    href="/apmax1-ddbkp/category-list/{{ $menu['menu'][$key][$keys]['id'] }}">{{ $menu['menu'][$key][$keys]['name'] }}</a>
                                                                            </li>
                                                                        @endif
                                                                    @endforeach
                                                                @endforeach


                                                            </ul>

                                                        </li>
                                                    @endforeach



                                                </ul>

                                            </li>

                                            <li id="category2">
                                                <a href="/apmax1-ddbkp/category">Category</a>

                                            </li>

                                            <li>

                                                <a href="{{ url('/store') }}">stores</a>

                                            </li>

                                            <li>

                                                <a href="{{ url('/about') }}">about us</a>

                                            </li>

                                            <li class="contact-menu marL20">

                                                <a href="{{ url('/contact') }}">contact us</a>

                                            </li>
                                            <li class="contact-menu marL20">

                                                <a href="{{ url('/faq') }}">FAQ</a>

                                            </li>
                                            <li class="contact-menu marL20">

                                                <a href="{{ url('/offer') }}">What We Offer</a>

                                            </li>
                                        </ul>

                                        <!-- navbar-collapse -->

                                    </div>

                                </div>

                            </div>

                            <!-- col-md-12 -->

                        </div>

                        <!-- row -->

                    </div>

                    <!-- container -->

                </div>

                <!-- navbar -->

            </div>

            <!--  Menu -->

        </div>

    </div>

    <!-- //***Header-section End***// -->
@endsection
