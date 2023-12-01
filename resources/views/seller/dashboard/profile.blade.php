<!doctype html>
<html lang="en" dir="ltr">





@include('seller/dashboard/master/header1')


<!--   add coupon form -->

<main class="main-content">
    @include('seller/dashboard/master/navigation')
    <br> <br> <br>
    <div class="conatiner-fluid content-inner mt-n5 py-0">
      <div>
         <div class="row">
           
            <div class="col-xl-9 col-lg-8">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Vendor Information</h4>
                     </div>
                  </div>

                    @if ($message = Session::get('success'))
                   

                    @if ($message != "Payment success") 
                        <div class="alert alert-success alert-dismissible fade show mb-2" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                      
                    @endif
                    @endif

                  @php
                    
                    $userdata=json_decode($user,true);
                  @endphp
                  <div class="card-body">
                     <div class="new-user-info">
                        <form action="{{ route('seller.coupon.editprofile') }}"  method="POST" enctype="multipart/form-data">
                          
                            @csrf
                             <div class="row">
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="fname">Logo:</label>
                              <img style="height:100px;width:100px" src="{{url('/public/'.$userdata[0]['logo'])}}">
                                     <input type="file" name="image"> 
                              </div>

                              <div class="form-group col-md-6">
                                 <label class="form-label" for="fname">Full Name:</label>
                                 <input type="text" class="form-control" value="{{$userdata[0]['name']}}" name="fname" id="fname" placeholder="Full Name">
                       
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="lname">Address:</label>
                                 <input type="text" class="form-control" value="{{$userdata[0]['address']}}" id="address" name="address" placeholder="Address">
                              </div>
                            
                      
                              <div class="form-group col-md-12">
                                 <label class="form-label" for="store">Store Name:</label>
                                 <input type="text" class="form-control" id="store"  value="{{$userdata[0]['store']}}" name="store" placeholder="Store Name">
                              </div>
                              <div class="form-group col-sm-12">
                                 <label class="form-label">Country:</label>
                                 <select  id="country-dropdown" name="country"  class="selectpicker form-control" data-style="py-0">
                                     <option value="1">
                                            {{$userdata[0]['country']}}
                                          </option>
                                  <option value="">-- Select Country --</option>
                                          @foreach ($countries as $data)
                                          <option value="{{$data->id}}">
                                              {{$data->name}}
                                          </option>
                                          @endforeach
                                 </select>
                              </div>

                               <div class="form-group col-sm-12">
                                 <label class="form-label">State:</label>
                                 <select id="state-dropdown" name="state"  class="selectpicker form-control" data-style="py-0">
                           <option value="{{$userdata[0]['state']}}">
                                            {{$userdata[0]['state']}}
                                          </option>
                                 </select>
                              </div>
   <div class="form-group col-sm-12">
                                 <label class="form-label">City:</label>
                                 <select id="city-dropdown" name="city"  class="selectpicker form-control" data-style="py-0">
                           <option value="{{$userdata[0]['city']}}">
                                            {{$userdata[0]['city']}}
                                          </option>
                                 </select>
                              </div>

                              <div class="form-group col-md-6">
                                 <label class="form-label" for="mobno">Business Detail:</label>
                                 <textarea  class="form-control" name="detail"  id="detail">{{$userdata[0]['detail']}}</textarea>
                              </div>

                              
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="zip">Zipcode:</label>
                                 <input type="text" class="form-control" id="zip" name="zip"  value="{{$userdata[0]['zip']}}" placeholder="zip code">
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="email">Email:</label>
                                 <input type="email" class="form-control"  value="{{$userdata[0]['email']}}" id="email" name="email" placeholder="Email" disabled>
                              </div>
                             
                          
                           </div>
                       
                      
                           <input type="submit" class="btn btn-primary" value="Update Profile">
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
      
      <!-- Footer Section Start -->
      <footer class="footer">
          <div class="footer-body">
              <ul class="left-panel list-inline mb-0 p-0">
                  <li class="list-inline-item"><a href="../../dashboard/extra/privacy-policy.html">Privacy Policy</a></li>
                  <li class="list-inline-item"><a href="../../dashboard/extra/terms-of-service.html">Terms of Use</a></li>
              </ul>
              <div class="right-panel">
                  ©<script>document.write(new Date().getFullYear())</script> Hope UI, Made with
                  <span class="">
                      <svg class="icon-15" width="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M15.85 2.50065C16.481 2.50065 17.111 2.58965 17.71 2.79065C21.401 3.99065 22.731 8.04065 21.62 11.5806C20.99 13.3896 19.96 15.0406 18.611 16.3896C16.68 18.2596 14.561 19.9196 12.28 21.3496L12.03 21.5006L11.77 21.3396C9.48102 19.9196 7.35002 18.2596 5.40102 16.3796C4.06102 15.0306 3.03002 13.3896 2.39002 11.5806C1.26002 8.04065 2.59002 3.99065 6.32102 2.76965C6.61102 2.66965 6.91002 2.59965 7.21002 2.56065H7.33002C7.61102 2.51965 7.89002 2.50065 8.17002 2.50065H8.28002C8.91002 2.51965 9.52002 2.62965 10.111 2.83065H10.17C10.21 2.84965 10.24 2.87065 10.26 2.88965C10.481 2.96065 10.69 3.04065 10.89 3.15065L11.27 3.32065C11.3618 3.36962 11.4649 3.44445 11.554 3.50912C11.6104 3.55009 11.6612 3.58699 11.7 3.61065C11.7163 3.62028 11.7329 3.62996 11.7496 3.63972C11.8354 3.68977 11.9247 3.74191 12 3.79965C13.111 2.95065 14.46 2.49065 15.85 2.50065ZM18.51 9.70065C18.92 9.68965 19.27 9.36065 19.3 8.93965V8.82065C19.33 7.41965 18.481 6.15065 17.19 5.66065C16.78 5.51965 16.33 5.74065 16.18 6.16065C16.04 6.58065 16.26 7.04065 16.68 7.18965C17.321 7.42965 17.75 8.06065 17.75 8.75965V8.79065C17.731 9.01965 17.8 9.24065 17.94 9.41065C18.08 9.58065 18.29 9.67965 18.51 9.70065Z" fill="currentColor"></path>
                      </svg>
                  </span> by <a href="https://iqonic.design/">IQONIC Design</a>.
              </div>
          </div>
      </footer>
      <!-- Footer Section End -->    </main>
<script type="text/javascript">  
    $('.date').datepicker({    
       format: 'dd-mm-yyyy'  
     });    
</script>  

@include('seller/dashboard/master/footer')


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
