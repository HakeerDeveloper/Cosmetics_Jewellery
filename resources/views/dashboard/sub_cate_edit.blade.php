@extends('layout.frame')



@push('title')
    <title>Sub_Cate/Edit</title>
@endpush

@push('page')
    Sub_Cate_Edit
@endpush

@section('body')
<div class="container border border-danger w-75">
    <h2 class="text-center">Sub-cate Edit</h2>
<form action="{{url('/subcate/update')}}/{{$fetch->sub_cate_id}}" method="post">

    <div class="mb-3">
        <label  class="form-label text-capitalize">sub_cate</label>
        <input type="text" name="sub_cate" class="form-control " value="{{$fetch->sub_cate_name}}" placeholder="Enter Your Sub_Cate" >
    </div>
    
    <div class="mb-3">
        @if ($fetch->sub_cate_id==$id)
            @php
                $sel = 'selected'; 
            @endphp
            @else
            @php
            $sel = ''; 
            @endphp
            @endif
        <label  class="form-label text-capitalize">Which Category from</label>
        <select name="" class="form-control" >
            <option value="">No _ Selected</option>
            @foreach ($cate as $item )
            <option {{$sel}} value="{{$item->cate_id}}">{{$item->cate_name}}</option>
                
            @endforeach
            
        </select>
    </div>



</form>
</div>    
@endsection
