@extends('dashboard_layout.frame')


@push('title')
    <title>Product/Edit</title>
@endpush

@push('page')
   Product_Edit
@endpush
@section('body')
<div class="container border w-75 p-2">
    <h2 class="text-center">Edit Product</h2>
    
    <form action="{{url('/product/update')}}/{{$p->p_id}}" method="post" enctype="multipart/form-data">
        @csrf
        <img  src="{{url('/')}}/p_images/{{$p->p_img}}" width="50px" alt="Edit Image Was not Found">
        
     <div class="mb-3">
        <label  class="form-label">Product Name</label>
        <input type="text" name="p_name" value="{{$p->p_name}}"   class="form-control">
        @error('p_name')
           <span class="text-danger ">Please Fill the Product_Name</span>               
        @enderror
     </div>
     <div class="mb-3">
        <label  class="form-label">Product Short Desc</label>
        <textarea name="short_desc"  class="form-control" cols="30" rows="5">{{$p->p_short_desc}}</textarea>
        @error('short_desc')
           <span class="text-danger">Please Fill the Short_Desc</span>
        @enderror
     </div>
     <div class="mb-3">
        <label  class="form-label">Product Long Desc</label>
        <textarea name="long_desc" class="form-control" cols="30" rows="5">{{$p->p_long_desc}}</textarea>
        @error('long_desc')
           <span class="text-danger">Please Fill the Long_Desc</span>
        @enderror
     </div>
     <div class="row">

        <div class="col-md-6 col-sm-6 mb-3">
           <label  class="form-label">Product Price </label>
           <input type="text" name="price" class="form-control" value="{{$p->p_price}}" placeholder="Enter Your Price ">
           @error('price')
           <span class="text-danger">Please Fill the Price in 💲💲</span>
        @enderror
        </div>
        <div class="col-md-6 col-sm-6 mb-3">
           <label  class="form-label">Product Image</label>
           <input type="file" class="form-control" name="img" >
           <input type="hidden" name="old_img" value="{{$p->p_img}}">
           
        </div>
     </div>
     <div class="mb-3">
      
           <div class="col-sm-12 col-sm-12">
              <label  class="form-label">Sub_Cate From</label>
              <select name="cate" class="form-control" >
               <option value="">No _ Selected</option>
               @foreach ($s as $item )
               <option  value="{{$item->sub_cate_id}}"
                     @if ($item->sub_cate_id  == $p->sub_cate  )
             
                     {{"selected"}} 
             
               @endif 
             
               >{{$item->sub_cate_name}}</option>
               
               @endforeach
               
           </select>
              @error('cate')
                 <span class="text-danger text-capitalize">please select you category which category are you from !</span>
                 
              @enderror
           </div>
        
     </div>
    <button type="submit" class="btn btn-danger d-block m-auto">Update Product</button>
    </form>
</div>
@endsection