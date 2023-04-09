@extends('dashboard_layout.frame')

@push('title')
    @if (session()->has('email'))
        <title>Dashboard / {{ session()->get('name') }} </title>
    @else
        <title>Dashboard </title>
    @endif
@endpush

@push('page')
    Dashboard
@endpush
@section('body')
    <div class="container-fluid">






        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="card">
                    <div class="card-header"> Order List
                        <div class="card-action">

                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush table-borderless">
                            <thead>
                                <tr>
                                    <th>Order Slip</th>
                                    <th>Action</th>
                                    {{-- <th>Customer Name</th>
                                    <th>Customer Address</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th>Shipping</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order as $items)
                                @if ($items->status == 0)
                                    <tr>

                                        {{-- <td><img src="{{ url('/') }}/p_images/{{ $items->p_img }}" class="product-img"
                                                alt="Product Image is Not Found"></td>

                                        <td>{{ $items->p_name }}</td>
                                        <td>{{ $items->cus_f_name }}_{{ $items->cus_l_name }}</td>
                                        <td>{{ $items->cus_address }}</td>
                                        <td>${{ $items->p_price }}</td>
                                        <td>{{ $items->Date }}</td> --}}
                                        <td>
                                            <ul>
                                                <li>Products : 
                                                    {{-- @foreach ($order as $item) --}}
                                                    
                                                    {{-- {{$items->p_name  }} --}}
                                                    {{-- @endforeach --}}
                                                </li>
                                                <li>Customer : {{$items->cus_f_name.'_'.$items->cus_l_name}}</li> 
                                                <li>Customer_Address : {{$items->cus_address}}</li> 
                                                <li>Customer_Phone : {{$items->cus_phone}}</li> 
                                                {{-- <li>Customer_Phone : {{$items->p_name}}</li>  --}}
                                                {{-- <li>Customer Name : {{$items->}}</li> --}}
                                                <li>Total : {{$items->total}}</li>
                                            </ul>
                                        </td>
                                        <td>
                                            
                                                <a href="{{ url('/order/edit') }}/{{ $items->order_id}}"class="btn btn-outline-danger">Pending</a>
                                                    
                                                  </td>
                                                </tr>
                                               
                                               
                                                @endif
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--End Row-->




    </div>
    
    <div class="container-fluid">






        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="card">
                    <div class="card-header"> Order Send
                        <div class="card-action">

                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush table-borderless">
                            <thead>
                                <tr>
                                    <th>Photo</th>
                                    <th>Product</th>
                                    <th>Customer Name</th>
                                    <th>Customer Address</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th>Shipping</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($order as $items)
                                @if ($items->status == 1)
                                    <tr>

                                        <td><img src="{{ url('/') }}/p_images/{{ $items->p_img }}" class="product-img"
                                                alt="Product Image is Not Found"></td>

                                        <td>{{ $items->p_name }}</td>
                                        <td>{{ $items->cus_f_name }}_{{ $items->cus_l_name }}</td>
                                        <td>{{ $items->cus_address }}</td>
                                        <td>${{ $items->p_price }}</td>
                                        <td style="width:2px;">{{ $items->Date }}</td>
                                        <td>
                                            
                                                    <a href="#" class="btn btn-primary">Send</a>
                                            
                                                  </td>
                                                </tr>
                                                @endif
                                @endforeach --}}

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--End Row-->




    </div>

@endsection
