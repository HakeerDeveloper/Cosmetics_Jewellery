@extends('layout.template')

@push('title')
    <title>Product / Order</title>
@endpush

@section('breadcrum')
<nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item " ><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item " ><a href="{{url('/product')}}">Product</a></li>
            <li class="breadcrumb-item "><a href="{{url('/checkout')}}">Checkout</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="{{url('/order')}}">Order</a></li>

            
        </ol>
    </div>
</nav>
@endsection
@section('body')
<div class="container-fluid">

    <aside class="col-lg-12 mt-2 w-75 m-auto">
        <div class="summary">
            <h3 class="summary-title text-center">Your Order</h3>

            <table class="table table-summary">
                <thead>
                    <tr>
                        <th>Product</th>
                        {{-- {{session()->get('cart')}} --}}
                    <th>Total</th>
                </tr>
            </thead>
            
            <tbody>
                    
                
                @foreach ($cart as $item => $products )
                    
                    
                    
                
                <tr>
                    @if(session()->has('cart'))
                    {{-- <td>{{$products['p_id']}}</td> --}}

                    {{-- <td class="text-capitalize">{{$item}}</td> --}}
                    <td class="text-capitalize">{{$products['name']}}</td>
                    <td>{{$products['quantity']}} x ${{$products['price']}}</td>

                        
                    @endif
                </tr>
                
                @endforeach
                
                <tr class="summary-subtotal">
                    <td>Subtotal:</td>
                    @if(session()->has('cart'))
                    
                    <td>${{session()->get('total')}}</td>
                                    @endif
            </tr>
                <tr>
                    <td>Shipping:</td>
                    <td>Free shipping</td>
                </tr>
                <tr class="summary-total">
                    
                    <td>Total:</td>
                    <td>${{session()->get('total')}}</td>
                </tr>
            </tbody>
        </table>
        
        <div class="accordion-summary" id="accordion-payment">
            
            
            
            
          
            
            
        </div>
        
        <form action="{{url('/bookorder')}}" method="post">
            @csrf
            <button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
                <span class="btn-text">Place Order</span>
                <span class="btn-hover-text">Proceed to Checkout</span>
            </button>
        </form>
    </div>
</aside>
</div>
@endsection