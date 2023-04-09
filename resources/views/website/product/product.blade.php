@extends('layout.template')

@push('title')
    <title>Product</title>
@endpush
@section('breadcrum')
<nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item " ><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="{{url('/product')}}">Products</a></li>
            
        </ol>
    </div>
</nav>
@endsection


@section('body')
<main class="main py-4">
    <div class="page-header text-center" style="background-image: url('public/files/assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">Cosmetics & Jewelery <span>Products</span></h1>
        </div>
    </div>
   

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="toolbox">
                        <div class="toolbox-left">
                            <div class="toolbox-info">
                                Showing <span>9 of 56</span> Products
                            </div>
                        </div>

                        <div class="toolbox-right">
                            <div class="toolbox-sort">
                                <label for="sortby">Sort by:</label>
                                <div class="select-custom">
                                    <select name="sortby" id="sortby" class="form-control">
                                        <option value="popularity" selected="selected">Most Popular</option>
                                        <option value="rating">Most Rated</option>
                                        
                                    </select>
                                </div>
                            </div><!-- End .toolbox-sort -->
                           
                        </div><!-- End .toolbox-right -->
                    </div><!-- End .toolbox -->

                    <div class="products mb-3">
                        <div class="row justify-content-center">
                            @foreach ($p as $item)
                                
                            
                            <div class="col-6 col-md-4 col-lg-4">
                                <div class="product product-7 text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-new">New</span>
                                        <a href="{{url('/single_product')}}/{{$item->p_id}}">
                                            <img src="public/p_images/{{$item->p_img}}" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            <a href="{{url('/single_product')}}" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href=" {{url('/cart')}}/{{$item->p_id}}" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure>

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="{{url('/single_product')}}/{{$item->p_id}}">Women</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="{{url('/single_product')}}/{{$item->p_id}}">{{$item->p_name}}</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            ${{$item->p_price}}
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 2 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-nav product-nav-thumbs">
                                            <a href="#" class="active">
                                                <img src="public/p_images/{{$item->p_img}}" alt="product desc">
                                            </a>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                    <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Prev
                                </a>
                            </li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item-total">of 6</li>
                            <li class="page-item">
                                <a class="page-link page-link-next" href="#" aria-label="Next">
                                    Next <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <aside class="col-lg-3 order-lg-first">
                    <div class="sidebar sidebar-shop">
                        <div class="widget widget-clean">
                            <label>Filters:</label>
                            <a href="#" class="sidebar-filter-clear">Clean All</a>
                        </div>

                        <div class="widget widget-collapsible">
                                <h2 class=" widget-title text-center py-5 ">Categories of Products</h2>
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-1" role="button" aria-expanded="true" aria-controls="widget-1">
                                    Cosmetics
                                </a>
                            </h3><!-- End .widget-title -->
                           
                            <div class="collapse show" id="widget-1">
                                <div class="widget-body">
                                    <div class="filter-items filter-items-count">

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cat-1">
                                                <label class="custom-control-label" for="cat-1">MakeUp Products</label>
                                            </div>
                                            <span class="item-count">0</span>
                                        </div>

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cat-2">
                                                <label class="custom-control-label" for="cat-2">Skin Care Products</label>
                                            </div>
                                            <span class="item-count">0</span>
                                        </div>
                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cat-3">

                                                <label class="custom-control-label" for="cat-3" >Hair Care Products</label>
                                            </div>
                                            <span class="item-count">0</span>
                                        </div>
                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cat-4" >
                                                <label class="custom-control-label" for="cat-4" >Fragrance Products</label>
                                            </div>
                                            <span class="item-count">0</span>
                                        </div>
                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cat-5">
                                                <label class="custom-control-label" for="cat-5">Nail Products</label>
                                            </div>
                                            <span class="item-count">0</span>
                                        </div>
                                       

                                       

                                      

                                        

                                       

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget widget-collapsible">
                            
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-2" role="button" aria-expanded="true" aria-controls="widget-2">
                                Jewellery
                                </a>
                            </h3><!-- End .widget-title -->
                           
                            <div class="collapse show" id="widget-2">
                                <div class="widget-body">
                                    <div class="filter-items filter-items-count">

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cat-6">
                                                <label class="custom-control-label" for="cat-6">Necklaces Products</label>
                                            </div>
                                            <span class="item-count">0</span>
                                        </div>

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cat-7">
                                                <label class="custom-control-label" for="cat-7">Braclets Products</label>
                                            </div>
                                            <span class="item-count">0</span>
                                        </div>

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cat-8">
                                                <label class="custom-control-label" for="cat-8">Earrings Products</label>
                                            </div>
                                            <span class="item-count">0</span>
                                        </div>
                                       

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cat-9">
                                                <label class="custom-control-label" for="cat-9">Rings Products</label>
                                            </div>
                                            <span class="item-count">0</span>
                                        </div>
                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cat-10">
                                                <label class="custom-control-label" for="cat-10">Anklets Products</label>
                                            </div>
                                            <span class="item-count">0</span>
                                        </div>
                                       

                                       


                                      

                                        

                                       

                                    </div><!-- End .filter-items -->
                                </div><!-- End .widget-body -->
                            </div><!-- End .collapse -->
                        </div>

                  

                     

                    </div>
                </aside>
            </div>
        </div>
    </div>
</main>
@endsection
