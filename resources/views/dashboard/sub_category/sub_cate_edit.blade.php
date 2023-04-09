@extends('dashboard_layout.frame')



@push('title')
    <title>Sub_Cate/Edit</title>
@endpush

@push('page')
    Sub_Cate_Edit
@endpush

@section('body')
<div class="container border border-danger w-75 p-2">
    <h2 class="text-center">Sub-cate Edit</h2>
<form action="{{url('/subcate/update')}}/{{$sub_cate->sub_cate_id}}" method="post">
    @csrf
    <div class="mb-3">
        <label  class="form-label text-capitalize">sub_cate</label>
        <input type="text" name="sub_cate" class="form-control " value="{{$sub_cate->sub_cate_name}}" placeholder="Enter Your Sub_Cate" >
        
    </div>
    
    <div class="mb-3">
       
        <label  class="form-label text-capitalize">Which Category from</label>
        <select name="cate" class="form-control" >
            <option value="">No _ Selected</option>
            @foreach ($cate as $item )
            <option  value="{{$item->cate_id}}"
                  @if ($item->cate_id  == $sub_cate->cate_id  )
          
                  {{"selected"}} 
          
            @endif 
          
            >{{$item->cate_name}}</option>
            
            @endforeach
            
        </select>
    </div>


<button class="btn btn-danger d-block m-auto " type="submit">Update</button>
</form>
</div>    
@endsection
