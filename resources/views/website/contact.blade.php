@extends('layout.template')

@push('title')
    <title>Home / Contact</title>
@endpush

@section('breadcrum')
<nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item " ><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="{{url('/contact')}}">Contact</a></li>

            
        </ol>
    </div>
</nav>
@endsection

@section('body')
<div class="container">
    <div class="page-header page-header-big text-center" style="background-image: url('/cosmetics/public/slider_images/img_6.png') ; background-attachment: fixed;">
        <h1 class="page-title text-white">Contact us<span class="text-white">keep in touch with us</span></h1>
    </div>
</div>







<div class="page-content pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-2 mb-lg-0">
                <h2 class="title mb-1">Contact Information</h2><!-- End .title mb-2 -->
                <p class="mb-3">Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="contact-info">
                            <h3>The Office</h3>

                            <ul class="contact-list">
                                <li>
                                    <i class="icon-map-marker"></i>
                                  Korangi no 4 Karachi Pakistan
                                </li>
                                <li>
                                    <i class="icon-phone"></i>
                                    <a href="tel:#">+92 307 250 587 4</a>
                                </li>
                                <li>
                                    <i class="icon-envelope"></i>
                                    <a href="https://anees-clone.netlify.app/" target="_blank">anees.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="title mb-1">Got Any Questions?</h2>
                <p class="mb-2">Use the form below to get in touch with the sales team</p>

                <form action="{{url('/contact/submit')}}"  method="POST" class="contact-form mb-3">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="cname" class="sr-only">Name</label>
                            <input name="con_name" type="text" class="form-control" id="cname" placeholder="Name *" >
                        </div>

                        <div class="col-sm-6">
                            <label for="cemail" class="sr-only">Email</label>
                            <input name="con_email" type="email" class="form-control" id="cemail" placeholder="Email *" >
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <label for="cphone" class="sr-only">Phone</label>
                            <input name="c_phone" type="number" class="form-control" id="cphone" placeholder="Phone">
                        </div>

                        <div class="col-sm-6">
                            <label for="csubject" class="sr-only">Topic</label>
                            <input name="c_topic" type="text" class="form-control" id="csubject" placeholder="Topic">
                        </div>
                    </div>

                    <label for="cmessage" class="sr-only">Message</label>
                    <textarea name="c_message" class="form-control" cols="30" rows="4" id="cmessage"  placeholder="Message *"></textarea>

                    <button type="submit" class="btn btn-outline-primary-2 btn-minwidth-sm">
                        <span>SUBMIT</span>
                        <i class="icon-long-arrow-right"></i>
                    </button>
                </form>
            </div>
        </div>

        <hr class="mt-4 mb-5">

        <div class="stores mb-4 mb-lg-5">
            <h2 class="title text-center mb-3">Our Stores</h2>

            <div class="row">
                <div class="col-lg-6">
                    <div class="store">
                        <div class="row">
                            <div class="col-sm-5 col-xl-6">
                                <figure class="store-media mb-2 mb-lg-0">
                                    <img src="/cosmetics/public/slider_images/korangi.png" alt="image">
                                </figure>
                            </div>
                            <div class="col-sm-7 col-xl-6">
                                <div class="store-content">
                                    <h3 class="store-title">Korangi  Karachi Pakistan</h3>
                                    <address>Korangi No 4 Karachi Pakistan</address>
                                    <div><a href="tel:#">+92 307 250 587 4</a></div>

                                    <h4 class="store-subtitle">Store Hours:</h4>
                                    <div>Monday - Saturday 11am to 7pm</div>
                                    <div>Sunday 11am to 6pm</div>

                                    <a href="#" class="btn btn-link" target="_blank"><span>Visit Shop</span><i class="icon-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="store">
                        <div class="row">
                            <div class="col-sm-5 col-xl-6">
                                <figure class="store-media mb-2 mb-lg-0">
                                    <img src="/cosmetics/public/slider_images/minar e pk.png" alt="image">
                                </figure>
                            </div>

                            <div class="col-sm-7 col-xl-6">
                                <div class="store-content">
                                    <h3 class="store-title">Lahore Pakistan</h3>
                                    <address>Minar e Pakistan Lahore</address>
                                    <div><a href="tel:#">+92 3072505874</a></div>

                                    <h4 class="store-subtitle">Store Hours:</h4>
                                    <div>Monday - Friday 9am to 8pm</div>
                                    <div>Saturday - 9am to 2pm</div>
                                    <div>Sunday - Closed</div>

                                    <a href="#" class="btn btn-link" target="_blank"><span>Visit Shop</span><i class="icon-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3621.1737761285203!2d67.13901711428767!3d24.823730152843794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33baab08c8d17%3A0xf49af856ff8b5508!2sLandhi%20Rd%2C%20Sector%2033%20A%20Korangi%2C%20Karachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1678451331290!5m2!1sen!2s" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
    
    </div>
</div>
@endsection