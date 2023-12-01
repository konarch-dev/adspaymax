


<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Apmax - Login</title>
      
    


      
      <link rel="stylesheet" href="{{ URL::asset('/admin/assets/images/favicon.ico')}}">
         <link rel="stylesheet" href="{{ URL::asset('/admin/assets/css/core/libs.min.css')}}">
         
         <!-- Hope Ui Design System Css -->
         <link rel="stylesheet" href="{{ URL::asset('/admin/assets/css/hope-ui.min.css?v=4.0.0')}}">
         
         <!-- Custom Css -->
         <link rel="stylesheet" href="{{ URL::asset('/admin/assets/css/custom.min.css?v=4.0.0')}}">
         
         <!-- Dark Css -->
         <link rel="stylesheet" href="{{ URL::asset('/admin/assets/css/dark.min.css')}}">
         
         <!-- Customizer Css -->
         <link rel="stylesheet" href="{{ URL::asset('/admin/assets/css/customizer.min.css')}}">
         
         <!-- RTL Css -->
         <link rel="stylesheet" href="{{ URL::asset('/admin/assets/css/rtl.min.css')}}">
         @yield('style')


      
      
  </head>
  <body class=" " data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
    <!-- loader Start -->
    <div id="loading">
      <div class="loader simple-loader">
          <div class="loader-body">
          </div>
      </div>    </div>
    <!-- loader END -->
      <div class="wrapper">
      <section class="login-content">
         <div class="row m-0 align-items-center bg-white vh-100">            
               <div class="col-md-6 d-md-block d-none bg-primary p-0 mt-n1 vh-100 overflow-hidden">
               <img src="{{ URL::asset('/admin/assets/images/auth/05.png')}}" class="img-fluid gradient-main animated-scaleX" alt="images">
            </div>
            <div class="col-md-6">               
               <div class="row justify-content-center">
                  <div class="col-md-10">
                     <div class="card card-transparent auth-card shadow-none d-flex justify-content-center mb-0">
                        <div class="card-body">
                           <a href="../../dashboard/index.html" class="navbar-brand d-flex align-items-center mb-3">
                              
                              <!--Logo start-->
                              <div class="logo-main">
                                  <div class="logo-normal">
                                      <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                                          <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                                          <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                                          <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                                      </svg>
                                  </div>
                                  <div class="logo-mini">
                                      <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                                          <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                                          <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                                          <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                                      </svg>
                                  </div>
                              </div>
                              <!--logo End-->
                              
                              
                              
                              
                              <h4 class="logo-title ms-3">AdsPayMax</h4>
                           </a>
                           <h2 class="mb-2 text-center">Sign In</h2>
                           <p class="text-center">Sign In  As a Seller.</p>
                           <form method="POST" action="{{ route('seller.signIn') }}">
                             @csrf
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <label for="email" class="form-label">Email</label>
                                       <input type="email" class="form-control" name="email" placeholder=" ">
                                    </div>
                                 </div>
                              
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <label for="password" class="form-label">Password</label>
                                       <input type="password" class="form-control" name="password" placeholder=" ">
                                    </div>
                                 </div>
                              
                               
                              </div>
                              <div class="d-flex justify-content-center">
                                 <button type="submit" name="submit" class="btn btn-primary">Sign In</button>
                              </div>

                              @if(Session::has('message'))
                              <br>
                              <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('message') }}</p>
     
                              @endif
                            
                              <p class="mt-3 text-center">
                                 Create New Account <a href="{{ url('/seller/register')}}" class="text-underline">Sign Up</a>
                              </p>
                              <input name="_token" type="hidden" value="{{ csrf_token() }}">
                           </form>
                        </div>
                     </div>    
                  </div>
               </div>           
               <div class="sign-bg sign-bg-right">
                  <svg width="280" height="230" viewBox="0 0 421 359" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <g opacity="0.05">
                        <rect x="-15.0845" y="154.773" width="543" height="77.5714" rx="38.7857" transform="rotate(-45 -15.0845 154.773)" fill="#3A57E8"/>
                        <rect x="149.47" y="319.328" width="543" height="77.5714" rx="38.7857" transform="rotate(-45 149.47 319.328)" fill="#3A57E8"/>
                        <rect x="203.936" y="99.543" width="310.286" height="77.5714" rx="38.7857" transform="rotate(45 203.936 99.543)" fill="#3A57E8"/>
                        <rect x="204.316" y="-229.172" width="543" height="77.5714" rx="38.7857" transform="rotate(45 204.316 -229.172)" fill="#3A57E8"/>
                     </g>
                  </svg>
               </div>
            </div>   
         </div>
      </section>
      </div>
    </form>
      @include('seller/dashboard/master/footer')
    
      @yield('script')
    
    
  </body>
</html>