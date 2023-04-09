@extends('dashboard_layout.frame')


@push('title')
    <title>Product/List</title>
@endpush

@push('page')
    Product_List
@endpush
@section('body')
    <div class="container-fluid m-auto  ">
        <h2 class="text-center text-capitalize">product list</h2>
        <table class="table  ">
            <thead>
          <tr>
            <th>P_Image</th>
            <th>P_Name</th>
            <th>P_Short_Desc</th>
            <th>P_Long_Desc</th>
            <th>P_Price</th>
            <th>Cate_From</th>
            <th>Sub_Cate_From</th>
            
            <th>Action</th>
         </tr>      
            </thead>
            <tbody>
                    @if ($product)
                @foreach ($product as $product )
                <tr>
                    <td><img src="{{url('/')}}/p_images/{{$product->p_img}}" width="40px" alt=""></td>
                    <td>{{$product->p_name}}</td>      
                    <td>{{$product->p_short_desc}}</td>      
                    <td>{{$product->p_long_desc}}</td>      
                    <td>{{$product->p_price}}</td>
                    <td>{{$product->sub_cate_name}}</td>
                    <td>{{$product->cate_name}}</td>
{{--                     
                    @foreach ($cate as $cates )
                    <td>{{$cates->cate_name}}</td>
                        
                    @endforeach
                    
                    @foreach ($sub_cate as $sub_cates )
                        <td>{{$sub_cates->sub_cate_name}}</td>
                    
                    @endforeach
                     --}}
                    <td class="row">
                    <a href="product/edit/{{$product->p_id}}" class="col-md-6 btn btn-primary ">Edit</a>
                    <a href="product/delete/{{$product->p_id}}" class="col-md-6 btn btn-danger ">Delete</a>
                </td>
                </tr>
                    @endforeach
                    
                    @else
                    <p class="text-uppercase text-center">no data found </p>    
                    @endif
                    
                    
            </tbody>
        </table>
    </div>
@endsection