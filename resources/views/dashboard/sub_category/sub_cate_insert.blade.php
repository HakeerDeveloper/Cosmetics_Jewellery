@extends('dashboard_layout.frame')




@push('title')
    <title>SubCate/Insert</title>
@endpush

@push('page')
    Sub_Cate_Add
@endpush

@section('body')
    <div class="container border rounded p-2 w-75 ">
        <h2 class="text-center">Add SubCategory</h2>
        <form action="{{url('/subcate/store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label  class="form-label">Insert Subcategory</label>
                <input type="text" placeholder="Enter Your Subcategory" name="subcate" class="form-control">
                @error('subcate')
                    <span class="text-danger">Please Fill the SubCate Name</span>
                @enderror
            </div>
            <div class="mb-3">
                <label  class="form-label">Select Category</label>
                <select name="cate" class="form-control" >
                    <option value="">No Selected</option>
                    @foreach ($cate as $category )
                    <option value="{{$category->cate_id}}">{{$category->cate_name}}</option>
                        
                    @endforeach
                </select>
                @error('cate')
                    <span class="text-danger text-capitalize">Please select you category which category are you from ?</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-danger d-block m-auto">Add Subcategory</button>
        
        </form>
    </div>
@endsection