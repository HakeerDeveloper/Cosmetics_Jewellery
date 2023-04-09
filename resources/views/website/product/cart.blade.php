@extends('layout.template')

@push('title')
    <title>Product / Cart</title>
@endpush

@section('body')
<div class="page-header text-center" style="background-image: url('slider_images/img_4.png') ; background-attachment: fixed; ">
    <div class="container">
        <h1 class="page-title text-light">Shopping Cart<span>Anees Beauty Gems</span></h1>
    </div>
</div>



<div class="page-content py-4">
    <div class="cart">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-9">
                    @if (session()->has('cart'))
                    <table class="table table-cart table-mobile">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                               
                                <th></th>
                            </tr>
                        </thead>
                        

                        <tbody>
                           
                                
                            @php
                                
                                $total = 0;

                            @endphp
                           
                           @foreach ($cart as $item => $products )
                           @php
                               
                               $total = $total + $products['quantity']*$products['price'];

                               session()->put('total',$total);
                           @endphp
                           <tr>
                            <form action="{{url('/update/cart')}}" method="post">
                                @csrf
                                <td class="product-col">
                                    
                                    <div class="product">
                                    <figure class="product-media">
                                        <a href="#">
                                            <img src="{{url('/')}}/p_images/{{$products['img']}}" alt="Product image">
                                        </a>
                                    </figure>

                                    <h3 class="product-title">
                                        
                                        <a href="#" class="text-capitalize">{{$products['name']}}</a>
                                    </h3>
                                </div>
                            </td>
                            <td class="price-col">${{$products['price']}}</td>
                            <td class="quantity-col">
                                <div class="cart-product-quantity">
                                    <input name="quantity[]" type="number" min="1" class="form-control" value="{{$products['quantity']}}" >
                                </div>
                            </td>
                            <td class="remove-col"><a href= "{{url('/r_cart')}}/{{$item}}" class="btn-remove"><i class="icon-close"></i></button></td>
                        </tr>
                           @endforeach
                           @else
                           <p class="text-capitalize p-5 text-center">no items found in cart</p>
                           @endif
                            
                        </tbody>
                    </table>
                    
                    <div class="cart-bottom">
                      
                        {{-- update cart --}}
                        <button type="submit" class="btn btn-outline-dark-2"><span>UPDATE CART</span><i class="icon-refresh"></i></button>
                    </form>
                    </div><!-- End .cart-bottom -->
                </div><!-- End .col-lg-9 -->
                <aside class="col-lg-3">
                    <div class="summary summary-cart">
                        <h3 class="summary-title">Cart Total</h3><!-- End .summary-title -->

                        <table class="table table-summary">
                            <tbody>
                                <tr class="summary-subtotal">
                                    <td>Subtotal:</td>
                                    <td></td>
                                </tr><!-- End .summary-subtotal -->
                                <tr class="summary-shipping">
                                    <td>Shipping:</td>
                                    <td>&nbsp;</td>
                                </tr>

                                <tr class="summary-shipping-row">
                                    <td>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="free-shipping" name="shipping" class="custom-control-input">
                                            <label class="custom-control-label" for="free-shipping">Free Shipping</label>
                                        </div><!-- End .custom-control -->
                                    </td>
                                    <td>Free !</td>
                                </tr><!-- End .summary-shipping-row -->

                                
                              

                              
                                <tr class="summary-total">
                                    <td>Total:</td>
                                    
                                    
                                     
                                        

                                    
                                    @if (session()->get('cart'))
                                    
                                    <td>${{$total}} </td>
                                    @else
                                    <td>$0</td>
                                    @endif
                                </tr><!-- End .summary-total -->
                            </tbody>
                        </table>

                        <a href="{{url('/checkout')}}" class="btn btn-outline-primary-2 btn-order btn-block">PROCEED TO CHECKOUT</a>
                    </div>

                    <a href="{{url('/products')}}" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE SHOPPING</span><i class="icon-refresh"></i></a>
                </aside>
            </div>
        </div>
    </div>
</div> 




@endsection


@section('breadcrum')
<nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item " ><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item " ><a href="{{url('/product')}}">Product</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="{{url('/cart')}}">Cart</a></li>
            
        </ol>
    </div>
</nav>
@endsection

