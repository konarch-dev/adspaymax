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

                    <a href="/apmax1-ddbkp/client">

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

                            <h3><span>coupons</span></h3>

                            <ul class="breadcrumb-list">

                                <li><a href="/apmax1-ddbkp/client/">home</a></li>

                                <li><a href="#">coupons</a></li>
                                <li><a href="#">{{ $category1->name }}</a></li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- //***Breadcrumb-Section End***// -->

    <!-- //***Coupon-Grid Start***// -->

    <div class="coupons bg padTB60">

        <div class="container">

            <div class="row">

                @foreach ($product as $key => $val)
                    @if (!is_null($product[$key]->image))
                        @php

                            $imgurl1 = $product[$key]->image;
                        @endphp
                        <div class="col-md-4 col-sm-4 col-xs-12 marB30">

                            <div class="box-b">

                                <figure>

                                    <img style="height: 270px;width:auto;" src="{{ asset($imgurl1) }}" alt="">

                                </figure>

                            </div>

                            <div class="border"></div>

                            <div class="box-detail details">

                                <div class="col-md-12 col-sm-12 col-xs-12">

                                    <div class="row">

                                        <h4 class="hover"><a
                                                href="/apmax1-ddbkp/coupon-detail/{{ $product[$key]->pid }}">{{ $product[$key]->pname }}</a>
                                        </h4>
                                        <h4 class="hover"><a
                                                href="/apmax1-ddbkp/coupon-detail/{{ $product[$key]->pid }}">{{ substr($product[$key]->detail, 0, 30) }}
                                                .. read more</a></h4>

                                        <h4 class="marB20 marT20">Stores <span class="grey-a">-<a
                                                    href="/apmax1-ddbkp/store-detail/{{ $product[$key]->id }}">
                                                    {{ $product[$key]->store }}</a></span></h4>

                                        <h4 class="marB20">expires :<span class="red">
                                                {{ date('Y-m-d', strtotime($product[$key]->valid_till)) }}</span></h4>

                                    </div>

                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-12 marT20 marB10 text-left">

                                    <div class="row">

                                        <a href="/apmax1-ddbkp/coupon-detail/{{ $product[$key]->pid }}"
                                            class="itg-btn box-btn black">{{ $product[$key]->code }}<span>Get
                                                Code</span></a>
                                    </div>

                                </div>

                            </div>

                        </div>
                    @endif
                @endforeach



            </div>

        </div>

    </div>

    <!-- //***Coupon-Grid End***// -->

    <div class="clear"></div>


    @include('client/master/footer')
    @include('client/master/script/script')

    @yield('script')

</body>

</html>
