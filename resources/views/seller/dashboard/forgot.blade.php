<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ URL::asset('/admin/assets/images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ URL::asset('/admin/assets/css/core/libs.min.css') }}">

    <!-- Hope Ui Design System Css -->
    <link rel="stylesheet" href="{{ URL::asset('/admin/assets/css/hope-ui.min.css?v=4.0.0') }}">

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ URL::asset('/admin/assets/css/custom.min.css?v=4.0.0') }}">

    <!-- Dark Css -->
    <link rel="stylesheet" href="{{ URL::asset('/admin/assets/css/dark.min.css') }}">

    <!-- Customizer Css -->
    <link rel="stylesheet" href="{{ URL::asset('/admin/assets/css/customizer.min.css') }}">

    <!-- RTL Css -->
    <link rel="stylesheet" href="{{ URL::asset('/admin/assets/css/rtl.min.css') }}">
    @yield('style')




</head>

<body class=" " data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body">
            </div>
        </div>
    </div>
    <!-- loader END -->
    <form method="POST" action="{{ route('seller.pass') }}" enctype="multipart/form-data">
        <div class="wrapper">
            <section class="login-content">
                <div class="row m-0 align-items-center bg-white vh-100">

                    <div class="col-md-12">
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <div
                                    class="card card-transparent auth-card shadow-none d-flex justify-content-center mb-0">
                                    <div class="card-body" style="text-align: center">
                                        <a href="../../dashboard/index.html"
                                            class="navbar-brand d-flex align-items-center mb-3"
                                            style="justify-content: center">


                                            <img src="http://localhost/apmax1/public/assets/img/logo.png" height="50px"
                                                width="150px">
                                        </a><br>
                                        <h2 class="mb-2 text-right">Forgot password</h2>

                                        <form>
                                            <div class="row">
                                                <div class="col-lg-2">
                                                </div>
                                                <div class="col-lg-8">



                                                    <div class="form-group">
                                                        <label for="email" class="form-label">Email</label>
                                                        <input type="email" id="email"
                                                            class="form-control                                                        value="{{ old('email') }}"
                                                            name="email" placeholder=" ">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                </div>

                                            </div>


                                            <div class="d-flex justify-content-center">
                                                <button type="submit" class="btn btn-primary">Get
                                                    Password</button>
                                            </div>
                                            <br>
                                            <p>
                                                <a href="{{ url('/seller/login') }}" class="text-underline">Sign
                                                    In</a>
                                            </p>
                                            <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                        </form>
                                        @if (Session::has('message'))
                                            <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">
                                                {{ Session::get('message') }}</p>
                                        @endif

                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sign-bg sign-bg-right">
                            <svg width="280" height="230" viewBox="0 0 421 359" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.05">
                                    <rect x="-15.0845" y="154.773" width="543" height="77.5714" rx="38.7857"
                                        transform="rotate(-45 -15.0845 154.773)" fill="#3A57E8" />
                                    <rect x="149.47" y="319.328" width="543" height="77.5714" rx="38.7857"
                                        transform="rotate(-45 149.47 319.328)" fill="#3A57E8" />
                                    <rect x="203.936" y="99.543" width="310.286" height="77.5714" rx="38.7857"
                                        transform="rotate(45 203.936 99.543)" fill="#3A57E8" />
                                    <rect x="204.316" y="-229.172" width="543" height="77.5714" rx="38.7857"
                                        transform="rotate(45 204.316 -229.172)" fill="#3A57E8" />
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </section>
        </div>


        @include('seller/dashboard/master/footer')

        @yield('script')
        <script>
            $(document).ready(function() {

                /*------------------------------------------
                --------------------------------------------
                Country Dropdown Change Event
                --------------------------------------------
                --------------------------------------------*/
                $('#country-dropdown').on('change', function() {
                    var idCountry = this.value;
                    $("#state-dropdown").html('');
                    $.ajax({
                        url: "{{ url('api/fetch-states') }}",
                        type: "POST",
                        data: {
                            country_id: idCountry,
                            _token: '{{ csrf_token() }}'
                        },
                        dataType: 'json',
                        success: function(result) {
                            $('#state-dropdown').html(
                                '<option value="">-- Select State --</option>');
                            $.each(result.states, function(key, value) {
                                $("#state-dropdown").append('<option value="' + value
                                    .state_id + '">' + value.name + '</option>');
                            });
                            $('#city-dropdown').html('<option value="">-- Select City --</option>');
                        }
                    });
                });

                /*------------------------------------------
                --------------------------------------------
                State Dropdown Change Event
                --------------------------------------------
                --------------------------------------------*/
                $('#state-dropdown').on('change', function() {
                    var idState = this.value;
                    $("#city-dropdown").html('');
                    $.ajax({
                        url: "{{ url('api/fetch-cities') }}",
                        type: "POST",
                        data: {
                            state_id: idState,
                            _token: '{{ csrf_token() }}'
                        },
                        dataType: 'json',
                        success: function(res) {
                            $('#city-dropdown').html('<option value="">-- Select City --</option>');
                            $.each(res.cities, function(key, value) {
                                $.each(res.cities[key], function(keys, values) {

                                    $("#city-dropdown").append('<option value="' +
                                        res.cities[key]['primary_city'] + '">' +
                                        res.cities[key]['primary_city'] +
                                        '</option>');
                                });
                            });
                        }
                    });
                });

            });
        </script>



</body>

</html>
