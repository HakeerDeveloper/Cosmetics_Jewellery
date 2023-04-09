@extends('layout.template')

@push('title')
    <title>Home / About </title>
@endpush
@section('breadcrum')
<nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item " ><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="{{url('/about')}}">About</a></li>

            
        </ol>
    </div>
</nav>
@endsection


@section('body')
<div class="container">
    <div class="page-header page-header-big text-center" style="background-image: url('/cosmetics/public/slider_images/img_3.png') ; background-attachment: fixed;">
        <h1 class="page-title text-white">About us<span class="text-white">Who we are</span></h1>
    </div><!-- End .page-header -->
</div>


<div class="page-content pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-3 mb-lg-0">
                <h2 class="title">Our Vision</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. </p>
            </div>
            
            <div class="col-lg-6">
                <h2 class="title">Our Mission</h2>
                <p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. <br>Praesent elementum hendrerit tortor. Sed semper lorem at felis. </p>
            </div>
        </div>

        <div class="mb-5"></div>
    </div>

    

    <div class="container">
      

        <hr class="mt-4 mb-6">

        <h2 class="title text-center mb-4">Meet Our Team</h2>

        <div class="row">
            <div class="col-md-4 m-auto">
                <div class="member member-anim text-center">
                    <figure class="member-media">
                        <img src="files/assets/images/team/hassan.png" height="50" alt="member photo">

                        <figcaption class="member-overlay">
                            <div class="member-overlay-content">
                                <h3 class="member-title">Hassan Ali <span>Partner of <b>Anees Beauty Gems</b></span></h3><!-- End .member-title -->
                                <p>Sed pretium, ligula sollicitudin viverra, tortor libero sodales leo, eget blandit nunc.</p> 
                                <div class="social-icons social-icons-simple">
                                    <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                    <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                    <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                </div><!-- End .soial-icons -->
                            </div><!-- End .member-overlay-content -->
                        </figcaption><!-- End .member-overlay -->
                    </figure><!-- End .member-media -->
                    <div class="member-content">
                        <h3 class="member-title">Samanta Grey<span>Founder & CEO</span></h3><!-- End .member-title -->
                    </div><!-- End .member-content -->
                </div><!-- End .member -->
            </div>

           
        </div>
    </div>

    <div class="mb-2"></div>

    <div class="about-testimonials bg-light-2 pt-6 pb-6">
        <div class="container">
            <h2 class="title text-center mb-3">What Customer Say About Us</h2>

            <div class="owl-carousel owl-simple owl-testimonials-photo" data-toggle="owl" 
                data-owl-options='{
                    "nav": false, 
                    "dots": true,
                    "margin": 20,
                    "loop": false,
                    "responsive": {
                        "1200": {
                            "nav": true
                        }
                    }
                }'>
                <blockquote class="testimonial text-center">
                    <img src="files/assets/images/testimonials/user-1.jpg" alt="user">
                    <p>“ Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque aliquet nibh nec urna. <br>In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti. ”</p>
                    <cite>
                        Jenson Gregory
                        <span>Customer</span>
                    </cite>
                </blockquote>

                <blockquote class="testimonial text-center">
                    <img src="files/assets/images/testimonials/user-2.jpg" alt="user">
                    <p>“ Impedit, ratione sequi, sunt incidunt magnam et. Delectus obcaecati optio eius error libero perferendis nesciunt atque dolores magni recusandae! Doloremque quidem error eum quis similique doloribus natus qui ut ipsum.Velit quos ipsa exercitationem, vel unde obcaecati impedit eveniet non. ”</p>

                    <cite>
                        Victoria Ventura
                        <span>Customer</span>
                    </cite>
                </blockquote>
            </div>
        </div>
    </div>
</div>
@endsection