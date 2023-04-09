@extends('layout.template')

@push('title')
    <title>Home / Checkout</title>
@endpush

@section('breadcrum')
<nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item " ><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item " ><a href="{{url('/product')}}">Product</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="{{url('/checkout')}}">Checkout</a></li>

            
        </ol>
    </div>
</nav>
@endsection


@section('body')
<div class="page-header text-center " style="background-image: url('files/assets/images/page-header-bg.jpg')">
    <div class="container">
        <h1 class="page-title">Checkout<span>Anees Beauty Gems</span></h1>
    </div>
</div>

<div class="page-content">
    <div class="checkout">
        <div class="container">
            
            <form action="{{url('/checkout/action')}}" method="POST">
                @csrf
                
                {{-- @if(session()->get('cu_id')) --}}
                
                
                
                
                {{-- @if (!session()->has('cus_id')) --}}
                <div class="row">
                    
                    <div class="col-md-12">
                        <h2 class="checkout-title">Billing Details</h2>
                            <div class="row">
                                <div class="col-sm-6">
                                    
                                    <label >First Name *</label>
                                    <input placeholder="Enter Your First Name"   type="text" class="form-control"   name="f_name">
                                    {{-- value="{{$item->cus_f_name}}" --}}
                                    
                                </div>
                                
                                <div class="col-sm-6">
                                    <label>Last Name *</label>
                                    <input type="text" placeholder="Enter Your Last Name"  class="form-control"  name="l_name">
                                    
                                </div>
                            </div>
                            
                            <label>Email address *</label>
                            <input placeholder="Enter Your Email" type="email"    class="form-control" name="email">
                            
                            
                            <label>Street address *</label>
                            <textarea  name="address" class="form-control" id="" cols="30" rows="8"  placeholder="Enter Your Address"></textarea>
                            
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>City *</label>
                                    <input placeholder="Enter Your City" type="text"   class="form-control"   name="city">
                                    
                                </div>
                                
                                <div class="col-sm-6">
                                    
                                    <label>County *</label>
                                    <input placeholder="Enter Your Country" type="text"   class="form-control"  name="country">
                                </div>
                                
                            </div>
                            
                            
                            
                            
                            <label>Phone * </label>
                            <input type="tel" class="form-control"  name="phone">
                            {{-- value="{{$item->cus_phone}}" --}}
                            
                            
                            {{-- value="{{$item->cus_phone}}" --}}
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    
                   {{-- @else
                    
                        
                  
                    
                    @endif --}}
                    
                    {{-- @endif --}}
                    {{-- @endforeach --}}
                    {{-- <aside class="col-lg-3">
                        <div class="summary">
                            <h3 class="summary-title">Your Order</h3>

                            <table class="table table-summary">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td><a href="#">Beige knitted elastic runner shoes</a></td>
                                        <td>$84.00</td>
                                    </tr>

                                    <tr>
                                        <td><a href="#">Blue utility pinafore denimdress</a></td>
                                        <td>$76,00</td>
                                    </tr>
                                    <tr class="summary-subtotal">
                                        <td>Subtotal:</td>
                                        <td>$160.00</td>
                                    </tr>
                                    <tr>
                                        <td>Shipping:</td>
                                        <td>Free shipping</td>
                                    </tr>
                                    <tr class="summary-total">
                                        <td>Total:</td>
                                        <td>$160.00</td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="accordion-summary" id="accordion-payment">
                              

                                

                                <div class="card">
                                    <div class="card-header" id="heading-3">
                                        <h2 class="card-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                                Cash on delivery
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion-payment">
                                        <div class="card-body">Quisque volutpat mattis eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. 
                                        </div>
                                    </div>
                                </div>


                               
                            </div>

                            <button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
                                <span class="btn-text">Place Order</span>
                                <span class="btn-hover-text">Proceed to Checkout</span>
                            </button>
                        </div><!-- End .summary -->
                    </aside><!-- End .col-lg-3 --> --}}
                </div>
        </div>
    </div>
</div>
@endsection