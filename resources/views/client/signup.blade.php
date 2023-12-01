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

                                <h3><span>Sign Up</span></h3>

                              

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

                            <div class="col-md-2 col-sm-3 col-xs-6">

                                <div class="row">

                                    <figure>

                                    
                                    </figure>

                                </div>

                            </div>

                            <div class="col-md-8 col-sm-7 col-xs-12">

                                <div class="row">

                                    <div class="box-detail res-width">

                                        <div class="col-md-12">

                                            <div class="row">

                                                <h4 class="hover marB10"><a href="#">Sign Up</a></h4>
                                                
                                                <form method="POST" action="{{ route('client.register') }}" enctype="multipart/form-data">
                                               
                              <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                                    <span>
                                                    <label for="Name" class="form-label">Name</label>
                                                    <input type="text" class="form-control" name="name" placeholder="Enter Name" required></span>
                                                <p>&nbsp;</p>
                                                <span>
                                                    <label for="Email" class="form-label">Email</label>
                                                    <input type="email" class="form-control" name="email" placeholder="Enter Email Address" required></span>
                                                <p>&nbsp;</p>
                                                <span>
                                                    
                                                    <label for="Password" class="form-label">Password</label>
                                                    <input type="password" class="form-control" name="password" placeholder="Enter Password" required></span>
                                                <p>&nbsp;</p>
                           

                                                <span>
                                                    <label for="Address" class="form-label">Address</label>
                                                       <textarea  class="form-control" name="address" placeholder="Enter Address"  required></textarea>
                                                
                                                </span>
                                                <p>&nbsp;</p>
                           
                                                
                                                <span>
                                                    <label for="Country" class="form-label">Country</label>
                                                    <select  id="country-dropdown" name="country" class="form-control" required>
                                                        <option value="">-- Select Country --</option>
                                                        @foreach ($data as $val)
                                                        <option value="{{$val->id}}">
                                                            {{$val->name}}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                             </span>
                
                                                  
                                             <p>&nbsp;</p>
                             
                
                                                 <span>
                                                       <label for="state" class="form-label">State</label>
                                                       <select id="state-dropdown"  name="state"  class="form-control" required>
                                                       </select>
                                                   
                                                 </span>
                                                 <p>&nbsp;</p>
                           
                
                                                 <span>
                                                       <label for="city" class="form-label">City</label>
                                                       <select id="city-dropdown"  name="city"  class="form-control" required>
                                                       </select>
                                                    </span>
                                                    <p>&nbsp;</p>
                           
                                                 <span>
                                                       <input type="text" id="zip" placeholder="ZIp COde" class="form-control" value="{{ old('zip') }}"" name="zip" placeholder="Enter zip code" required>
                                                    </span>

                                                    <p>&nbsp;</p>
                           
                                                    <span><input type="submit" class="btn btn-primary" value="Sign Up">&nbsp;&nbsp;&nbsp;<a href="login">Existing User? Sign In Now</a></span>


                                                </form>

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
        <script>
           $(document).ready(function () {
     
               /*------------------------------------------
               --------------------------------------------
               Country Dropdown Change Event
               --------------------------------------------
               --------------------------------------------*/
               $('#country-dropdown').on('change', function () {
                   var idCountry = this.value;
                   $("#state-dropdown").html('');
                   $.ajax({
                       url: "{{url('api/fetch-states')}}",
                       type: "POST",
                       data: {
                           country_id: idCountry,
                           _token: '{{csrf_token()}}'
                       },
                       dataType: 'json',
                       success: function (result) {
                           $('#state-dropdown').html('<option value="">-- Select State --</option>');
                           $.each(result.states, function (key, value) {
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
               $('#state-dropdown').on('change', function () {
                   var idState = this.value;
                   $("#city-dropdown").html('');
                   $.ajax({
                       url: "{{url('api/fetch-cities')}}",
                       type: "POST",
                       data: {
                           state_id: idState,
                           _token: '{{csrf_token()}}'
                       },
                       dataType: 'json',
                       success: function (res) {
                           $('#city-dropdown').html('<option value="">-- Select City --</option>');
                           $.each(res.cities, function (key, value) {
                             $.each(res.cities[key], function (keys, values) {
                                
                               $("#city-dropdown").append('<option value="' + res.cities[key]['primary_city'] + '">'
                                 + res.cities[key]['primary_city'] + '</option>');
                             });
                           });
                       }
                   });
               });
     
           });
       </script>

    </body>

</html>