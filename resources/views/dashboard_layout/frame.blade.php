<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  @stack('title')
  <!-- loader-->
  <link href="{{url('assets/css/pace.min.css')}}" rel="stylesheet"/>
  <script src="{{url('assets/js/pace.min.js')}}"></script>
  <!--favicon-->
  <link rel="icon" href="{{url('public/files/assets/images/icons/logo.png')}}" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="{{url('public/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="{{url('public/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="{{url('public/assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{url('public/assets/css/animate.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{url('public/assets/css/icons.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="{{url('public/assets/css/sidebar-menu.css')}}" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="{{url('public/assets/css/app-style.css')}}" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme1">
 
<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.html">
       <img src="{{url('/')}}/files/assets/images/icons/logo.png"   class="logo-icon" alt="logo icon">
       <h5 class="logo-text">Anees Beauty Gems</h5>
     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">Dashboard</li>
      <li>
        <a href="{{url('/dashboard')}}">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>

      <li>
        <a href="{{url('/cate')}}">
          <i class="zmdi zmdi-format-list-bulleted"></i> <span>Category</span>
        </a>
      </li>

      <li>
        <a href="{{url('/cate/insert')}}">
          <i class="zmdi zmdi-invert-colors"></i> <span>Add Category</span>
        </a>
      </li>

      <li>
        <a href="{{url('/subcate')}}">
          <i class="zmdi zmdi-format-list-bulleted"></i> <span>Sub Category</span>
        </a>
      </li>
      <li>
        <a href="{{url('/subcate/insert')}}">
          <i class="zmdi zmdi-invert-colors"></i> <span>Add Sub Category</span>
        </a>
      </li>
      <li>
        <a href="{{url('/product')}}">
          <i class="zmdi zmdi-format-list-bulleted"></i><span>Products</span>
        </a>
      </li>
      <li>
        <a href="{{url('/product/insert')}}">
          <i class="zmdi zmdi-invert-colors"></i> <span>Add Products</span>
        </a>
      </li>

     
      <li class="sidebar-header">Accounts</li>
      @if (session()->has('email'))
      <li>
        <a href="{{url('/admin_profile')}}">
          <i class="zmdi zmdi-face"></i> <span>{{session()->get('email')}}</span>
        </a>
      </li>
      <li>
        <a href="{{url('/logout_admin')}}">
          <i class="icon-power mr-2"></i><span>Logout</span></a>
      </li>
     
      @else
      <li>
        <a href="{{url('/dashboard_login')}}" >
          <i class="zmdi zmdi-lock"></i> <span>Login</span>
        </a>
      </li>

       <li>
        <a href="{{url('/dashboard_register')}}" >
          <i class="zmdi zmdi-account-circle"></i> <span>Sign_up</span>
        </a>
      </li>
         
      
        
      @endif


    </ul>
   
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <li class="nav-item">
      @stack('page')
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    @if (session()->has('name'))
    <p class="text-capitalize mt-1" > {{session()->get('name')}}</p>
    @else
      <p class="text-white text-capitalize">no <span class="text-danger"> Admin </span> found in dashboard! &nbsp;</p>
    @endif
    
    @if (session()->has('email'))
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="admin_img/{{session()->get('img')}}" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="admin_img/{{session()->get('img')}}"  alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title">{{session()->get('name')}}</h6>
            <p class="user-subtitle">{{session()->get('email')}}</p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><a href="{{url('/admin_profile')}}"><i class="icon-wallet mr-2"></i> Profile</li></a>
        
        
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"> <a href="{{url('/logout_admin')}}"><i class="icon-power mr-2"></i>Logout </li></a> 
      </ul>
    @else
      <a href="{{url('/dashboard_register')}}" class="btn btn-danger" >Sign_up</a>
      <a href="{{url('/dashboard_login')}}"    class="btn btn-primary" >Login</a>
    @endif
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

  <!--Start Dashboard Content-->

@yield('body')
      <!--End Dashboard Content-->
	  
	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->
		
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          
            
          Copyright © 2023 Admin <span class="font-weight-bold text-capitalize text-white">{{session()->get('name')}}</span>
          
        </div>
      </div>
    </footer>
	<!--End footer-->
	
  <!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		<li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
   
  </div><!--End wrapper-->

  <!-- Bootstrap core JavaScript-->
  <script src="{{url('assets/js/jquery.min.js')}}"></script>
  <script src="{{url('assets/js/popper.min.js')}}"></script>
  <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
	
 <!-- simplebar js -->
  <script src="{{url('assets/plugins/simplebar/js/simplebar.js')}}"></script>
  <!-- sidebar-menu js -->
  <script src="{{url('assets/js/sidebar-menu.js')}}"></script>
  <!-- loader scripts -->
  <script src="{{url('assets/js/jquery.loading-indicator.js')}}"></script>
  <!-- Custom scripts -->
  <script src="{{url('assets/js/app-script.js')}}"></script>
  <!-- Chart js -->
  
  <script src="{{{url('assets/plugins/Chart.js/Chart.min.js')}}}"></script>
 
  <!-- Index js -->
  <script src="{{url('assets/js/index.js')}}"></script>

  
</body>
</html>
