@extends('layout.template')

@push('title')
    <title>Home / Cosmetics & Jewellery</title>
@endpush

@section('breadcrum')
<nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page"><a href="{{url('/')}}">Home</a></li>
            
        </ol>
    </div>
</nav>
@endsection
@section('body')
<div class="intro-slider-container mb-0">
    <div class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl" data-owl-options='{"nav": false, "dots": false}'>
        <div class="intro-slide" style="background-image: url(slider_images/img_7.png);">
            
            <div class="container intro-content text-center">
                <h3 class="intro-subtitle text-white">Welcome To </h3>
                <h1 class="intro-title text-white">Anees Beauty Gems</h1>
                <div class="intro-text text-white">By Anees Raza</div>
                <a href="category.html" class="btn btn-primary">Explore Now</a>
            </div>
        </div>

        <div class="intro-slide" style="background-image: url(slider_images/img_3.png);">
            <div class="container intro-content text-center">
                <h3 class="intro-subtitle text-white">Limited time only</h3><!-- End .h3 intro-subtitle -->
                <h1 class="intro-title text-white">Treat your self</h1><!-- End .intro-title -->
                <div class="intro-text text-white">Up to 50% off</div><!-- End .intro-text -->
                <a href="category.html" class="btn btn-primary">Shop NOW</a>
            </div><!-- End .intro-content -->
        </div><!-- End .intro-slide -->
        <div class="intro-slide" style="background-image: url(slider_images/img_4.png);">
            <div class="container intro-content text-center">
                <h3 class="intro-subtitle text-white">Limited time only</h3><!-- End .h3 intro-subtitle -->
                <h1 class="intro-title text-white">Treat your self</h1><!-- End .intro-title -->
                <div class="intro-text text-white">Up to 50% off</div><!-- End .intro-text -->
                <a href="category.html" class="btn btn-primary">Shop NOW</a>
            </div>
        </div>
        <div class="intro-slide" style="background-image: url(slider_images/img_5.png);">
            <div class="container intro-content text-center">
                <h3 class="intro-subtitle text-white">Limited time only</h3>
                <h1 class="intro-title text-white">Treat your self</h1>
                <div class="intro-text text-white">Up to 50% off</div>
                <a href="category.html" class="btn btn-primary">Shop NOW</a>
            </div>
        </div>
        <div class="intro-slide" style="background-image: url(slider_images/img_6.png);">
            <div class="container intro-content text-center">
                <h3 class="intro-subtitle text-white">Limited time only</h3>
                <h1 class="intro-title text-white">Treat your self</h1>
                <div class="intro-text text-white">Up to 50% off</div>
                <a href="category.html" class="btn btn-primary">Shop NOW</a>
            </div>
        </div>
    </div>

    <span class="slider-loader text-white"></span>
</div>


<section class="best-sellers py-5">
    <div class="container">
        <div class="heading">
            <p class="heading-cat text-center">favourite from every category</p>
            <h3 class="heading-title text-center p-2">Best Sellers</h3>
        </div>
        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow text-center" data-toggle="owl" 
        data-owl-options='{
            "nav": true, 
            "dots": false,
            "margin": 30,
            "loop": false,
            "responsive": {
                "0": {
                    "items":2
                },
                "768": {
                    "items":3
                },
                "992": {
                    "items":3
                },
                "1200": {
                    "items":4
                }
            }
        }'>
            @foreach ($select as $item )
                

            <div class="product product-10 text-center">
                <figure class="product-media">
                    <a href="single_product/{{$item->p_id}}" >
                        <img src="{{url('/')}}/p_images/{{$item->p_img}}" alt="Product image" class="product-image">
                        <img src="{{url('/')}}/p_images/{{$item->p_img}}" alt="Product image" class="product-image-hover">
                    </a>

                    <div class="product-action-vertical">
                        <a href="single_product/{{$item->p_id}}" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                    </div>
                </figure>

                <div class="product-body">

                    <div class="product-action">
                        <a href="{{url('/cart')}}" class="btn-cart"><span>add to cart</span></a>
                    </div>
                    <div class="product-intro">
                        <h3 class="product-title">
                            <a href="product.html" class="text-capitalize">{{$item->p_name}}</a>
                        </h3>
                        <div class="product-price">
                            ${{$item->p_price}}
                        </div>
                    </div>
                   
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>


  








<div class="video-banner video-banner-bg bg-image text-center" style="background-image: url(slider_images/img_10.jpg)">
    <div class="container">
        <h3 class="video-banner-title h1 text-white"><span>Spring / Summer</span><strong>New & Stylish</strong><br> Collection 2019</h3><!-- End .video-banner-title -->
        <a href="slider_images/img_7.mp4" class="btn-video btn-iframe"><i class="icon-play"></i></a>
    </div><!-- End .container -->
</div><!-- End .video-banner bg-image -->


{{-- for new section  --}}
<div class="pt-2 pb-3">
    <h4 class="p-2 text-center text-dark ">Website category</h4>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="banner banner-overlay">
                    <a href="#" >
                        <img src="files/assets/images/jewelery.png" height="80vh"  alt="Banner">
                    </a>

                    <div class="banner-content banner-content-center">
                        <h4 class="banner-subtitle text-white"><a href="#">New in</a></h4><!-- End .banner-subtitle -->
                        <h3 class="banner-title text-white"><a href="#"><strong>Women’s Cosmetics</strong></h3><!-- End .banner-title -->
                        <a href="#" class="btn btn-outline-white banner-link underline">Explore Now</a>
                    </div><!-- End .banner-content -->
                </div><!-- End .banner -->
            </div><!-- End .col-sm-6 -->

            <div class="col-sm-6">
                <div class="banner banner-overlay">
                    <a href="#">
                        <img src="files/assets/images/cosmetics_girl.png" height="80vh" alt="Banner">
                    </a>

                    <div class="banner-content banner-content-center">
                        <h4 class="banner-subtitle text-white"><a href="#">New in</a></h4><!-- End .banner-subtitle -->
                        <h3 class="banner-title text-white"><a href="#"><strong>Women’s Jewelery</strong></a></h3><!-- End .banner-title -->
                        <a href="#" class="btn btn-outline-white banner-link underline">Explore  Now</a>
                    </div><!-- End .banner-content -->
                </div><!-- End .banner -->
            </div><!-- End .col-sm-6 -->
        </div><!-- End .row -->
        <hr class="mt-0 mb-0">
    </div><!-- End .container -->
</div><!-- End .bg-gray -->

@endsection
