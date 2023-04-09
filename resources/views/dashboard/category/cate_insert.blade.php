@extends('dashboard_layout.frame')

@push('title')
    <title>Category/Insert</title>
@endpush
@push('page')
    Category_Add
@endpush

@section('body')
<div class="container border p-2 rounded w-75 ">
    <h3 class="text-center">Add Category</h3>
    <form action="{{url('/cate/store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label  class="form-label">Insert a Category</label>
            <input type="text" name="cate_name" class="form-control" placeholder="Enter Your Category">
            @error('cate_name')
                <span class="text-danger">Please Fill The Category</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-danger d-block m-auto ">Add Category</button>

    </form>
</div>
@endsection