@extends('dashboard_layout.frame')


@push('title')
    <title>Product/Insert</title>
@endpush

@push('page')
   Add_Product
@endpush

@section('body')
    <div class="container border w-75 p-2">
        <h2 class="text-center">Add Product</h2>
        <form action="{{url('/product/store')}}" method="post" enctype="multipart/form-data">
            @csrf
         <div class="mb-3">
            <label  class="form-label">Product Name</label>
            <input type="text" name="p_name" value="{{old('p_name')}}"   class="form-control">
            @error('p_name')
               <span class="text-danger ">Please Fill the Product_Name</span>               
            @enderror
         </div>
         <div class="mb-3">
            <label  class="form-label">Product Short Desc</label>
            <textarea name="short_desc"  class="form-control" cols="30" rows="5">{{old('short_desc')}}</textarea>
            @error('short_desc')
               <span class="text-danger">Please Fill the Short_Desc</span>
            @enderror
         </div>
         <div class="mb-3">
            <label  class="form-label">Product Long Desc</label>
            <textarea name="long_desc" class="form-control" cols="30" rows="5">{{old('long_desc')}}</textarea>
            @error('long_desc')
               <span class="text-danger">Please Fill the Long_Desc</span>
            @enderror
         </div>
         <div class="row">

            <div class="col-md-6 mb-3">
               <label  class="form-label">Product Price </label>
               <input type="text" name="price" class="form-control" value="{{old('price')}}" placeholder="Enter Your Price ">
               @error('price')
               <span class="text-danger">Please Fill the Price in 💲💲</span>
            @enderror
            </div>
            <div class="col-md-6 mb-3">
               <label  class="form-label">Product Image</label>
               <input type="file" class="form-control" name="img" >
               @error('img')
                  <span class="text-danger">Please Insert the Image</span>
               @enderror

            </div>

         </div>
         <div class="col-md-12 col-sm-12 p-2">
            <select name="sub_cate" id="" class="form-control">
               <option class="text-captalize" value="" >No selected</option>
               @foreach ($sub_cate as $item )
                  <option value="{{$item->sub_cate_id}}">{{$item->sub_cate_name}}</option>
               @endforeach
            </select>
         @error('sub_cate')
                <span class="text-danger text-capitalize">lese select you category which category are you from ?</span>
            @enderror
         </div>
       
        <button type="submit" class="btn btn-danger d-block m-auto">Add Product</button>
        </form>
    </div>
@endsection