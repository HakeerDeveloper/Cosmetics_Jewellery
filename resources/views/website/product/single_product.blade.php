@extends('layout.template')

@push('title')
    <title>Product / Details</title>
@endpush
@section('breadcrum')
<nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item " ><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item "><a href="{{url('/products')}}">Product</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="{{url('/single_product')}}">Product_Details</a></li>
            
        </ol>
    </div>
</nav>
@endsection


@section('body')
<div class="page-content">
    <div class="container">
        <div class="product-details-top">
            <div class="row">
                <div class="col-md-6">
                    <div class="product-gallery product-gallery-vertical">
                        <div class="row">
                            <figure class="product-main-image">
                                <img id="product-zoom" src="{{url('/')}}/p_images/{{$product->p_img}}" data-zoom-image="{{url('/')}}/p_images/{{$product->p_img}}" alt="product image was not found">

                                <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                    <i class="icon-arrows"></i>
                                </a>
                            </figure>

                            
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="product-details">
                        <h1 class="product-title text-capitalize">{{$product->p_name}}</h1><!-- End .product-title -->

                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <a class="ratings-text" href="#product-review-link" id="review-link">( 2 Reviews )</a>
                        </div><!-- End .rating-container -->

                        <div class="product-price">
                            {{-- ${{$product->p_price}} --}}
                        </div><!-- End .product-price -->

                        <div class="product-content">
                            {{-- <p> {{$product->p_long_desc}}</p> --}}
                        </div><!-- End .product-content -->

                       

                        <div class="details-filter-row details-row-size">
                           

                            
                        <div class="details-filter-row details-row-size">
                            <label for="qty">Qty:</label>
                            <div class="product-details-quantity">
                                <input type="number" id="qty" class="form-control" min="1" value="1">
                            </div>
                        </div>

                        <div class="product-details-action m-auto pb-2">
                            <a href="{{url('/cart')}}" class="btn-product btn-cart"><span>add to cart</span></a>

                           
                        </div>

                        <div class="product-details-footer">
                            <div class="product-cat">
                                <span>Category:</span>
                                <a href="#">Women</a>,
                                <a href="#">Dresses</a>,
                                <a href="#">Yellow</a>
                            </div><!-- End .product-cat -->
<hr>
                            <div class="social-icons social-icons-sm">
                                <span class="social-label">Share:</span>
                                <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                <a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                            </div>
                        </div><!-- End .product-details-footer -->
                    </div><!-- End .product-details -->
                </div><!-- End .col-md-6 -->
            </div><!-- End .row -->
        </div><!-- End .product-details-top -->

        <div class="product-details-tab">
            <ul class="nav nav-pills justify-content-center" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab" role="tab" aria-controls="product-desc-tab" aria-selected="true">Description</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="product-info-link" data-toggle="tab" href="#product-info-tab" role="tab" aria-controls="product-info-tab" aria-selected="false">Additional information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="product-shipping-link" data-toggle="tab" href="#product-shipping-tab" role="tab" aria-controls="product-shipping-tab" aria-selected="false">Shipping & Returns</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="product-review-link" data-toggle="tab" href="#product-review-tab" role="tab" aria-controls="product-review-tab" aria-selected="false">Reviews (0)</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
                    <div class="product-desc-content">
                        <h3>Product Information</h3>
                        <p class="text-capitalize">{{$product->p_long_desc}}</p>                        

                    </div><!-- End .product-desc-content -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane fade" id="product-info-tab" role="tabpanel" aria-labelledby="product-info-link">
                    <div class="product-desc-content">
                        <h3>Information</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>

                        <h3>Fabric & care</h3>
                        <ul>
                            <li>Faux suede fabric</li>
                            <li>Gold tone metal hoop handles.</li>
                            <li>RI branding</li>
                            <li>Snake print trim interior </li>
                            <li>Adjustable cross body strap</li>
                            <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>
                        </ul>

                        <h3>Size</h3>
                        <p>one size</p>
                    </div><!-- End .product-desc-content -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane fade" id="product-shipping-tab" role="tabpanel" aria-labelledby="product-shipping-link">
                    <div class="product-desc-content">
                        <h3>Delivery & returns</h3>
                        <p>We deliver to over 100 countries around the world. For full details of the delivery options we offer, please view our <a href="#">Delivery information</a><br>
                        We hope you’ll love every purchase, but if you ever need to return an item you can do so within a month of receipt. For full details of how to make a return, please view our <a href="#">Returns information</a></p>
                    </div><!-- End .product-desc-content -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane fade" id="product-review-tab" role="tabpanel" aria-labelledby="product-review-link">
                    <div class="container  my-5 ">
                        <div class="row">
                            <div class="col-md-6 col-sm-6  ">

                                <form action="{{url('/submit/p_r')}}/{{$product->p_id}}" method="POST">
                                    @csrf
                                    <div class="mb-3 ">
                                        <span class="d-flex align-items-center "><img class=" py-3 rounded rounded-circle" src="{{url('/')}}/user_img/{{session()->get('user_img')}}" width="40" alt="image">
                                            &nbsp;{{session()->get('user_name')}}</span>
                                            <div>
                    
                                                <textarea name="p_r" id="" cols="30" rows="10" class="form-control border rounded" placeholder="Please Enter You Review About These Products"></textarea>
                                                @error('review')
                                                    <span class="text-danger">Please Fill the Review </span>
                                                @enderror
                                            </div>
                                        {{-- <img src="{{url('/')}}/user_img/{{session()->get('user_img')}}" alt="">
                                        <label  class="form-label">Your Name</label> --}}
                                    </div>
                                    <button type="submit" class="btn btn-primary mb-3">Submit Review </button>
                                </form>
                            </div>
                            {{-- <div class="col-md-6 col-sm-6 ">
                                <img class="m-auto" src="{{url('/')}}/p_images/{{$product->p_img}}" alt="">
                               
                        </div> --}}
                    </div>
                    <div class="reviews">
                        <h3>Reviews (2)</h3>
                        <div class="review">
                            <div class="row no-gutters">
                                <div class="col-auto">
                                    <h4><a href="#">Samanta J.</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                    </div><!-- End .rating-container -->
                                    <span class="review-date">6 days ago</span>
                                </div><!-- End .col -->
                                <div class="col">
                                    <h4>Good, perfect size</h4>

                                    <div class="review-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus cum dolores assumenda asperiores facilis porro reprehenderit animi culpa atque blanditiis commodi perspiciatis doloremque, possimus, explicabo, autem fugit beatae quae voluptas!</p>
                                    </div><!-- End .review-content -->

                                    <div class="review-action">
                                        <a href="#"><i class="icon-thumbs-up"></i>Helpful (2)</a>
                                        <a href="#"><i class="icon-thumbs-down"></i>Unhelpful (0)</a>
                                    </div><!-- End .review-action -->
                                </div><!-- End .col-auto -->
                            </div><!-- End .row -->
                        </div><!-- End .review -->

                        <div class="review">
                            <div class="row no-gutters">
                                <div class="col-auto">
                                    <h4><a href="#">John Doe</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                    </div><!-- End .rating-container -->
                                    <span class="review-date">5 days ago</span>
                                </div><!-- End .col -->
                                <div class="col">
                                    <h4>Very good</h4>

                                    <div class="review-content">
                                        <p>Sed, molestias, tempore? Ex dolor esse iure hic veniam laborum blanditiis laudantium iste amet. Cum non voluptate eos enim, ab cumque nam, modi, quas iure illum repellendus, blanditiis perspiciatis beatae!</p>
                                    </div><!-- End .review-content -->

                                    <div class="review-action">
                                        <a href="#"><i class="icon-thumbs-up"></i>Helpful (0)</a>
                                        <a href="#"><i class="icon-thumbs-down"></i>Unhelpful (0)</a>
                                    </div><!-- End .review-action -->
                                </div><!-- End .col-auto -->
                            </div><!-- End .row -->
                        </div><!-- End .review -->
                    </div><!-- End .reviews -->
                </div><!-- .End .tab-pane -->
            </div><!-- End .tab-content -->
        </div><!-- End .product-details-tab -->

        {{-- <h2 class="title text-center mb-4">You May Also Like</h2><!-- End .title text-center --> --}}

        {{-- <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
            data-owl-options='{
                "nav": false, 
                "dots": true,
                "margin": 20,
                "loop": false,
                "responsive": {
                    "0": {
                        "items":1
                    },
                    "480": {
                        "items":2
                    },
                    "768": {
                        "items":3
                    },
                    "992": {
                        "items":4
                    },
                    "1200": {
                        "items":4,
                        "nav": true,
                        "dots": false
                    }
                }
            }'>
            <div class="product product-7 text-center">
                <figure class="product-media">
                    <span class="product-label label-new">New</span>
                    <a href="product.html">
                        <img src="assets/images/products/product-4.jpg" alt="Product image" class="product-image">
                    </a>

                    <div class="product-action-vertical">
                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                        <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                        <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                    </div><!-- End .product-action-vertical -->

                    <div class="product-action">
                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                    </div><!-- End .product-action -->
                </figure><!-- End .product-media -->

                <div class="product-body">
                    <div class="product-cat">
                        <a href="#">Women</a>
                    </div><!-- End .product-cat -->
                    <h3 class="product-title"><a href="product.html">Brown paperbag waist <br>pencil skirt</a></h3><!-- End .product-title -->
                    <div class="product-price">
                        $60.00
                    </div><!-- End .product-price -->
                    <div class="ratings-container">
                        <div class="ratings">
                            <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                        </div><!-- End .ratings -->
                        <span class="ratings-text">( 2 Reviews )</span>
                    </div><!-- End .rating-container -->

                    <div class="product-nav product-nav-thumbs">
                        <a href="#" class="active">
                            <img src="assets/images/products/product-4-thumb.jpg" alt="product desc">
                        </a>
                        <a href="#">
                            <img src="assets/images/products/product-4-2-thumb.jpg" alt="product desc">
                        </a>

                        <a href="#">
                            <img src="assets/images/products/product-4-3-thumb.jpg" alt="product desc">
                        </a>
                    </div><!-- End .product-nav -->
                </div><!-- End .product-body -->
            </div><!-- End .product -->

            <div class="product product-7 text-center">
                <figure class="product-media">
                    <span class="product-label label-out">Out of Stock</span>
                    <a href="product.html">
                        <img src="assets/images/products/product-6.jpg" alt="Product image" class="product-image">
                    </a>

                    <div class="product-action-vertical">
                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                        <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                        <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                    </div><!-- End .product-action-vertical -->

                    <div class="product-action">
                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                    </div><!-- End .product-action -->
                </figure><!-- End .product-media -->

                <div class="product-body">
                    <div class="product-cat">
                        <a href="#">Jackets</a>
                    </div><!-- End .product-cat -->
                    <h3 class="product-title"><a href="product.html">Khaki utility boiler jumpsuit</a></h3><!-- End .product-title -->
                    <div class="product-price">
                        <span class="out-price">$120.00</span>
                    </div><!-- End .product-price -->
                    <div class="ratings-container">
                        <div class="ratings">
                            <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                        </div><!-- End .ratings -->
                        <span class="ratings-text">( 6 Reviews )</span>
                    </div><!-- End .rating-container -->
                </div><!-- End .product-body -->
            </div><!-- End .product -->

            <div class="product product-7 text-center">
                <figure class="product-media">
                    <span class="product-label label-top">Top</span>
                    <a href="product.html">
                        <img src="assets/images/products/product-11.jpg" alt="Product image" class="product-image">
                    </a>

                    <div class="product-action-vertical">
                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                        <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                        <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                    </div><!-- End .product-action-vertical -->

                    <div class="product-action">
                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                    </div><!-- End .product-action -->
                </figure><!-- End .product-media -->

                <div class="product-body">
                    <div class="product-cat">
                        <a href="#">Shoes</a>
                    </div><!-- End .product-cat -->
                    <h3 class="product-title"><a href="product.html">Light brown studded Wide fit wedges</a></h3><!-- End .product-title -->
                    <div class="product-price">
                        $110.00
                    </div><!-- End .product-price -->
                    <div class="ratings-container">
                        <div class="ratings">
                            <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                        </div><!-- End .ratings -->
                        <span class="ratings-text">( 1 Reviews )</span>
                    </div><!-- End .rating-container -->

                    <div class="product-nav product-nav-thumbs">
                        <a href="#" class="active">
                            <img src="assets/images/products/product-11-thumb.jpg" alt="product desc">
                        </a>
                        <a href="#">
                            <img src="assets/images/products/product-11-2-thumb.jpg" alt="product desc">
                        </a>

                        <a href="#">
                            <img src="assets/images/products/product-11-3-thumb.jpg" alt="product desc">
                        </a>
                    </div><!-- End .product-nav -->
                </div><!-- End .product-body -->
            </div><!-- End .product -->

            <div class="product product-7 text-center">
                <figure class="product-media">
                    <a href="product.html">
                        <img src="assets/images/products/product-10.jpg" alt="Product image" class="product-image">
                    </a>

                    <div class="product-action-vertical">
                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                        <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                        <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                    </div><!-- End .product-action-vertical -->

                    <div class="product-action">
                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                    </div><!-- End .product-action -->
                </figure><!-- End .product-media -->

                <div class="product-body">
                    <div class="product-cat">
                        <a href="#">Jumpers</a>
                    </div><!-- End .product-cat -->
                    <h3 class="product-title"><a href="product.html">Yellow button front tea top</a></h3><!-- End .product-title -->
                    <div class="product-price">
                        $56.00
                    </div><!-- End .product-price -->
                    <div class="ratings-container">
                        <div class="ratings">
                            <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                        </div><!-- End .ratings -->
                        <span class="ratings-text">( 0 Reviews )</span>
                    </div><!-- End .rating-container -->
                </div><!-- End .product-body -->
            </div><!-- End .product -->

            <div class="product product-7 text-center">
                <figure class="product-media">
                    <a href="product.html">
                        <img src="assets/images/products/product-7.jpg" alt="Product image" class="product-image">
                    </a>

                    <div class="product-action-vertical">
                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                        <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                        <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                    </div><!-- End .product-action-vertical -->

                    <div class="product-action">
                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                    </div><!-- End .product-action -->
                </figure><!-- End .product-media -->

                <div class="product-body">
                    <div class="product-cat">
                        <a href="#">Jeans</a>
                    </div><!-- End .product-cat -->
                    <h3 class="product-title"><a href="product.html">Blue utility pinafore denim dress</a></h3><!-- End .product-title -->
                    <div class="product-price">
                        $76.00
                    </div><!-- End .product-price -->
                    <div class="ratings-container">
                        <div class="ratings">
                            <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                        </div><!-- End .ratings -->
                        <span class="ratings-text">( 2 Reviews )</span>
                    </div><!-- End .rating-container -->
                </div><!-- End .product-body -->
            </div><!-- End .product -->
        </div><!-- End .owl-carousel --> --}}
    </div><!-- End .container -->
</div><!-- End .page-content -->
@endsection