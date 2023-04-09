@extends('layout.template')

@push('title')
    <title>Products / Wishlist</title>
@endpush

@section('breadcrum')
<nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item " ><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item " ><a href="{{url('/product')}}">Products</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="{{url('/wishlist')}}">Wishlist</a></li>
            
        </ol>
    </div>
</nav>
@endsection

@section('body')
<div class="page-header text-center" style="background-image: url('files/assets/images/page-header-bg.jpg')">
    <div class="container">
        <h1 class="page-title">Wishlist<span>Anees Beauty Gems</span></h1>
    </div>
</div>




<div class="page-content">
    <div class="container">
        <table class="table table-wishlist table-mobile">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Stock Status</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
              
                <tr>
                    <td class="product-col">
                        <div class="product">
                            <figure class="product-media">
                                <a href="#">
                                    <img src="assets/images/products/table/product-2.jpg" alt="Product image">
                                </a>
                            </figure>

                            <h3 class="product-title">
                                <a href="#">Blue utility pinafore denim dress</a>
                            </h3><!-- End .product-title -->
                        </div><!-- End .product -->
                    </td>
                    <td class="price-col">$76.00</td>
                    <td class="stock-col"><span class="in-stock">In stock</span></td>
                    <td class="action-col">
                        <a href="#" class="btn btn-block btn-outline-primary-2"><i class="icon-cart-plus"></i>Add to Cart</a>
                    </td>
                    <td class="remove-col"><button class="btn-remove"><i class="icon-close"></i></button></td>
                </tr>
                <tr>
                    <td class="product-col">
                        <div class="product">
                            <figure class="product-media">
                                <a href="#">
                                    <img src="assets/images/products/table/product-3.jpg" alt="Product image">
                                </a>
                            </figure>

                            <h3 class="product-title">
                                <a href="#">Orange saddle lock front chain cross body bag</a>
                            </h3><!-- End .product-title -->
                        </div><!-- End .product -->
                    </td>
                    <td class="price-col">$52.00</td>
                    <td class="stock-col"><span class="out-of-stock">Out of stock</span></td>
                    <td class="action-col">
                        <button class="btn btn-block btn-outline-primary-2 disabled">Out of Stock</button>
                    </td>
                    <td class="remove-col"><button class="btn-remove"><i class="icon-close"></i></button></td>
                </tr>
            </tbody>
        </table>
        
    </div>
</div>
@endsection