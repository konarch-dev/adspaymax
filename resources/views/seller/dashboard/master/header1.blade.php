<head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>AdpayMax Seller Account</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{ URL::asset('/admin/assets/images/favicon.ico')}}">
      

  <!-- date time start  -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script> 

  <!-- date time end  -->

      <!-- Library / Plugin Css Build -->
      <link rel="stylesheet" href="{{ URL::asset('/admin/assets/css/core/libs.min.css')}}">
    
      <!-- Aos Animation Css -->
      <link rel="stylesheet" href="{{ URL::asset('/admin/assets/vendor/aos/dist/aos.css')}}">
      
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
  <body class="  ">
    
    <!-- loader Start -->
    <div id="loading">
      <div class="loader simple-loader">
          <div class="loader-body">
          </div>
      </div>  
      </div>
    <!-- loader END -->
    
    <aside class="sidebar sidebar-default sidebar-white sidebar-base navs-rounded-all ">
        <div class="sidebar-header d-flex align-items-center justify-content-start">
            <a href="seller/" class="navbar-brand">
                
                <!--Logo start-->
                <div class="logo-main">
                    <div class="logo-normal">
                        <svg class=" icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                            <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                            <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                            <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                        </svg>
                    </div>
                    <div class="logo-mini">
                        <svg class=" icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                            <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                            <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                            <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                        </svg>
                    </div>
                </div>
                <!--logo End-->
                
                
                
                
                <h4 class="logo-title">Adspaymax</h4>
            </a>
            <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                <i class="icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </i>
            </div>
        </div>
        <div class="sidebar-body pt-0 data-scrollbar">
            <div class="sidebar-list">
                <!-- Sidebar Menu Start -->

                @include('seller/dashboard/master/sidebarmenu')
            
                <!-- Sidebar Menu End -->
                    </div>
        </div>
        <div class="sidebar-footer"></div>
    </aside>   