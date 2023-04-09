<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Anees - Cosmetics and jewelery">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{url('public/files/assets/images/icons/logo.png')}}" type="image/x-icon">
   
    <meta name="apple-mobile-web-app-title" content="Anees">
    <meta name="application-name" content="Anees">
    <meta name="msapplication-TileColor" content="#00000">
    <meta name="theme-color" content="#ffffff">
    
    <link rel="stylesheet" href="{{url('public/files/assets/css/plugins/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('public/files/assets/css/plugins/magnific-popup/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{url('public/files/assets/css/plugins/jquery.countdown.css')}}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{url('public/files/assets/css/skins/skin-demo-5.css')}}">
    <link rel="stylesheet" href="{{url('public/files/assets/css/demos/demo-5.css')}}">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{url('public/files/assets/css/bootstrap.min.css')}}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{url('/public/files/assets/css/style.css')}}">

    {{-- for title --}}
    @stack('title')
</head>

<body>
    <div class="page-wrapper ">
        <header class="header ">
            <div class="header-top ">
                <div class="container">
                    <div class="header-left">
                        <div class="header-dropdown">
                            <a href="#">Usd</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#"></a></li>
                                    <li><a href="#">Usd</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="header-dropdown">
                            <a href="#">Eng</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">Spanish</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="header-right">
                        <ul class="top-menu">
                            <li>
                                <a href="#">Links</a>
                                <ul>
                                    <li><a href="tel:+923072505874"><i class="icon-phone"></i>Call: +92 307 250 5874</a></li>
                                    {{-- <li><a href="{{url('/wishlist')}}"><i class="icon-heart-o"></i>Wishlist <span>(0)</span></a></li> --}}
                                    <li><a href="{{url('/about')}}">About Us</a></li>
                                    <li><a href="{{url('/contact')}}">Contact Us</a></li>
                                    @if (!session()->has('user_email'))
                                        
                                    <li>
                                        <a href="{{url('/login')}}" ><i class="icon-user"></i>Login</a>
                                    <span class="p-3">or</span>
                                    <a href="{{url('/register')}}" ><i class="icon-user"></i>Register</a>

                                    </li>
                                    @else
                                    <li>
                                        <div class="header-left">
                                            <div class="header-dropdown">
                                                <img src="public/user_img/{{session()->get('user_img')}}" width="50" class="m-auto rounded-circle" alt="">
                                                <a href="#">{{session()->get('user_name')}}
                                                </a>
                                                <div class="header-menu">
                                                    <ul>
                                                        <li><a href="{{url('/profile')}}">Profile</a></li>
                                                        <li><a href="{{url('/logout')}}">Logout</a></li>
                                                    </ul>
                                                </div>
                                        </div>
                                    </div>
                                </li>
                                    
                                    
                                    @endif

                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="header-middle sticky-header">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>

                        <a href="{{url('/')}}" class="logo">
                            <img src="{{url('/')}}/files/assets/images/icons/logo.png" alt="logo was not found" width="90" height="25">
                        </a>

                        <nav class="main-nav">
                            <ul class="menu ">
                                <li class="megamenu-container ">
                                    <a href="{{url('/')}}" class="pr-0">Home</a>

                                </li>
                                <li>
                                    <a href="{{url('/products')}}" class="sf-with-ul">Products</a>

                                    <div class="megamenu megamenu-md">
                                        <div class="row no-gutters">
                                            <div class="col-md-8">
                                                <div class="menu-col">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="menu-title">Cosmetics</div>
                                                            <ul>
                                                                <li><a href="#"></a>Fragrance</li>
                                                                <li><a href="#">Hair Care</a></li>
                                                                <li><a href="#">MakeUp</a></li>
                                                                <li><a href="#">Nail</a></li>
                                                                <li><a href="#"><span>Skin Care<span class="tip tip-new">New</span></span></a></li>
                                                            </ul>

                                                            
                                                            {{-- <ul>
                                                                <li><a href="category-boxed.html"><span>Shop Boxed No Sidebar<span class="tip tip-hot">Hot</span></span></a></li>
                                                                <li><a href="category-fullwidth.html">Shop Fullwidth No Sidebar</a></li>
                                                            </ul> --}}
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="menu-title">Jewellery</div>
                                                            <ul>
                                                                <li><a href="#">Anklets</a></li>
                                                                <li><a href="#">Braclets</a></li>
                                                                <li><a href="#">Earring</a></li>
                                                                <li><a href="#">Necklace</a></li>
                                                                <li><a href="#">Anklets</a></li>
                                                            </ul>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="banner banner-overlay">
                                                    <a href="category.html" class="banner banner-menu">
                                                        <img src="{{url('/slider_images/woman.png')}}" alt="Banner">

                                                        <div class="banner-content banner-content-top">
                                                            <div class="banner-title text-white">Anees <br>Beauty<br><span><strong>Gems</strong></span></div><!-- End .banner-title -->
                                                        </div><!-- End .banner-content -->
                                                    </a>
                                                </div><!-- End .banner banner-overlay -->
                                            </div><!-- End .col-md-4 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .megamenu megamenu-md -->
                                </li>
                                
                                <li class="megamenu-container ">
                                    <a href="{{url('/contact')}}" class="pr-0">Contact us</a>
                                    
                                </li>
                                <li class="megamenu-container ">
                                    <a href="{{url('/about')}}" class="pr-0">About us</a>

                                </li>
                                
                                <li>
                                    <a href="{{url('/profile')}}" class="sf-with-ul">Accounts</a>

                                    <ul>
                                        @if (session()->has('user_email'))
                                            <li><a href="{{url('/profile')}}">{{session()->get('user_email')}}</a></li>
                                            <li><a href="{{url('/logout')}}">Logout</a></li>
                                        @else
                                            
                                        <li><a href="{{url('/login')}}">Login </a></li>
                                        <li><a href="{{url('/register')}}">Register </a></li>
                                        @endif
                                        
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{url('/review/insert')}}" class="sf-with-ul">Reviews</a>

                                    <ul>
                                            
                                        <li><a href="{{url('/review/insert')}}">Submit Review </a></li>
                                        <li><a href="{{url('/review')}}">List Reviews </a></li>
                                       
                                        
                                    </ul>
                                </li>



                            </ul>
                        </nav>
                    </div>

                    <div class="header-right">
                        <div class="header-search">
                            <a href="#" class="search-toggle" role="button" title="Search"><i class="icon-search"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <label for="q" class="sr-only">Search</label>
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search in..." required>
                                </div>
                            </form>
                        </div>
                      

                        <div class="dropdown cart-dropdown">
                            
                            <a href="{{url('/cart')}}" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                 <i class="icon-shopping-cart"></i>
                                {{-- add to cart counter --}}
                                <span class="cart-count">
                                    @if (session()->has('cart') )
                                   
                                    @php
                                        $count = count(session()->get('cart'));
                                    @endphp

                                    {{$count}}
                                </span>
                                @else     
                                <span class="cart-count">0</span>
                                    @endif
                            </a>
                            </a>
                            {{-- add to cart  --}}
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-cart-products">
                                    @php
                                        $cart = session()->get('cart')
                                         
                                         
                                    @endphp
                                    @if (session()->has('cart') )
                                    @php
                                
                                    $total = 0;
    
                                @endphp
                                    @foreach ($cart as $item=>$products )
                                    @php
                               
                                    $total = $total + $products['quantity']*$products['price'];
                                @endphp
                                        
                                    
                                        
                                    
                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="product.html">{{$products['name']}}</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">{{$products['quantity']}}</span>
                                                x  {{$products['price']}} 
                                                 
                                                {{-- {{$p}} --}}
                                                {{-- {{ $products['price'] * $products['quantity']}} --}}
                                            </span>
                                        </div>

                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="{{url('/public')}}/p_images/{{$products['img']}}" alt="Product image">
                                            </a>
                                        </figure>
                                        <a href="{{url('/r_cart')}}/{{$item}}" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                    </div>
                                    @php
                                        
                                    @endphp
                                   
                                   
                                   
                                   
                                   @endforeach
                                </div>

                                <div class="dropdown-cart-total">
                                    <span>Total</span>

                                    <span class="cart-total-price">${{$total}}</span>
                                </div>

                                <div class="dropdown-cart-action">
                                    <a href="{{url('/cart')}}" class="btn btn-primary">View Cart</a>
                                    <a href="{{url('/checkout')}}" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                                </div>
                            </div>
                            @else
                            <p class="text-capitalize text-center">no items found in cart</p>
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main class="main">
           @yield('breadcrum')
           
            
            @yield('body')
        	
        </main>

        <footer class="footer">
        	<div class="footer-middle border-0">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-sm-6 col-lg-3">
	            			<div class="widget widget-about ">
	            				<img src="{{url('/')}}/files/assets/images/icons/logo.png" class="footer-logo p-0  " alt="Footer Logo" width="100" height="25">
	            				<p>Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. </p>

	            				<div class="social-icons">
	            					<a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
	            					<a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
	            					<a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
	            					<a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
	            					<a href="#" class="social-icon" target="_blank" title="Pinterest"><i class="icon-pinterest"></i></a>
	            				</div><!-- End .soial-icons -->
	            			</div><!-- End .widget about-widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->

	            		<div class="col-sm-6 col-lg-3">
	            			<div class="widget">
	            				<h4 class="widget-title">Useful Links</h4><!-- End .widget-title -->

	            				<ul class="widget-list">
	            					<li><a href="about.html">About Molla</a></li>
	            					<li><a href="#">How to shop on Molla</a></li>
	            					<li><a href="#">FAQ</a></li>
	            					<li><a href="contact.html">Contact us</a></li>
	            					<li><a href="login.html">Log in</a></li>
	            				</ul><!-- End .widget-list -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->

	            		<div class="col-sm-6 col-lg-3">
	            			<div class="widget">
	            				<h4 class="widget-title">Customer Service</h4><!-- End .widget-title -->

	            				<ul class="widget-list">
	            					<li><a href="#">Payment Methods</a></li>
	            					<li><a href="#">Money-back guarantee!</a></li>
	            					<li><a href="#">Returns</a></li>
	            					<li><a href="#">Shipping</a></li>
	            					<li><a href="#">Terms and conditions</a></li>
	            					<li><a href="#">Privacy Policy</a></li>
	            				</ul><!-- End .widget-list -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->

	            		<div class="col-sm-6 col-lg-3">
	            			<div class="widget">
	            				<h4 class="widget-title">My Account</h4><!-- End .widget-title -->

	            				<ul class="widget-list">
	            					<li><a href="#">Sign In</a></li>
	            					<li><a href="cart.html">View Cart</a></li>
	            					<li><a href="#">My Wishlist</a></li>
	            					<li><a href="#">Track My Order</a></li>
	            					<li><a href="#">Help</a></li>
	            				</ul><!-- End .widget-list -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->
	            	</div><!-- End .row -->
	            </div><!-- End .container -->
	        </div><!-- End .footer-middle -->

	        <div class="footer-bottom">
	        	<div class="container">
	        		<p class="footer-copyright">Copyright © 2023 <a href="{{url('/')}}" class="text-danger"> Anees Beauty Gems </a> .  All Rights Reserved.</p><!-- End .footer-copyright -->
	        		<figure class="footer-payments ">
	        			<img src="{{url('files/assets/images/icons/cashod.png')}}" alt="Payment methods not found" width="100" height="20">
	        		</figure><!-- End .footer-payments -->
	        	</div><!-- End .container -->
	        </div><!-- End .footer-bottom -->
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" class="bg-dark p-2 rouneded" title="Back to Top" ><i class="icon-arrow-up "></i></button>

    <!-- Mobile Menu -->

    {{-- side navbar --}}
    <div class="mobile-menu-overlay"></div>

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>

          <div class="container">
            <h4 class="text-white text-center fw-light">Anees Beauty Gems</h4>
          </div>
            
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li class="">
                        <a href="{{url('/')}}">Home</a>

                      
                    </li>
                    <li>
                        <a href="{{url('/products')}}">Products</a>
                        <ul>
                            <li><a href="category-list.html">Shop List</a></li>
                            <li><a href="category-2cols.html">Shop Grid 2 Columns</a></li>
                            <li><a href="category.html">Shop Grid 3 Columns</a></li>
                            <li><a href="category-4cols.html">Shop Grid 4 Columns</a></li>
                            <li><a href="category-boxed.html"><span>Shop Boxed No Sidebar<span class="tip tip-hot">Hot</span></span></a></li>
                            <li><a href="category-fullwidth.html">Shop Fullwidth No Sidebar</a></li>
                            <li><a href="product-category-boxed.html">Product Category Boxed</a></li>
                            <li><a href="product-category-fullwidth.html"><span>Product Category Fullwidth<span class="tip tip-new">New</span></span></a></li>
                            <li><a href="cart.html">Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                            <li><a href="#">Lookbook</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="product.html" class="sf-with-ul">Contact Us</a>
                        
                    </li>
                    <li>
                        <a href="{{url('/about')}}">About Us</a>
                       
                    </li>
                    <li>
                                    <a href="{{url('/profile')}}" class="sf-with-ul">Accounts</a>

                                    <ul>
                                        @if (session()->has('user_email'))
                                            <li><a href="{{url('/profile')}}">{{session()->get('user_email')}}</a></li>
                                            <li><a href="{{url('/logout')}}">Logout</a></li>
                                        @else
                                            
                                        <li><a href="{{url('/login')}}">Login </a></li>
                                        <li><a href="{{url('/register')}}">Register </a></li>
                                        @endif
                                        
                                    </ul>
                                </li>
                    <li>
                        <a href="elements-list.html">Review</a>
                        <ul>
                            <li><a href="">Submit Review</a></li>
                            <li><a href="elements-typography.html">Review List</a></li>
                            
                        </ul>
                    </li>
                </ul>
            </nav>

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
            </div>
        </div>
    </div>


    <!-- Plugins JS File -->
    <script src="{{url('files/assets/js/jquery.min.js')}}"></script>
    <script src="{{url('files/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('files/assets/js/jquery.hoverIntent.min.js')}}"></script>
    <script src="{{url('files/assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{url('files/assets/js/superfish.min.js')}}"></script>
    <script src="{{url('files/assets/js/owl.carousel.min.js')}}"></script>
    <!-- Main JS File -->
    <script src="{{url('files/assets/js/main.js')}}"></script>
    <script src="{{url('files/assets/js/wNumb.js')}}"></script>
    <script src="{{url('files/assets/js/jquery.elevateZoom.min.js')}}"></script>
    <script src="{{url('files/assets/js/bootstrap-input-spinner.js')}}"></script>
    <script src="{{url('files/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{url('files/assets/js/nouislider.min.js')}}"></script>




</body>



</html>