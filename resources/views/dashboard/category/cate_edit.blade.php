@extends('dashboard_layout.frame')


@push('title')
    <title>Category/Edit</title>
@endpush
@push('page')
    Category_Edit
@endpush

@section('body')
    <div class="container w-75 border rounded p-2">
        <h2 class="text-center">Edit Category</h2>
        <form action="{{url('/cate/update')}}/{{$cates->cate_id}}" method="post">
            @csrf
            <div class="mb-3">
                <label  class="form-label">Category</label>
                
                    
                <input type="text" name="update_cate" value="{{$cates->cate_name}}" placeholder="Update Your Category" class="form-control">
                
                @error('update_cate')
                    <span class="text-danger">Please Fill The Category Feild</span>
                @enderror
            </div>
                <button type="submit" class="btn btn-danger d-block m-auto">Update Category</button>

        </form>
    </div>
@endsection