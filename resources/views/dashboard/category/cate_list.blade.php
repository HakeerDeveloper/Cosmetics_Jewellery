@extends('dashboard_layout.frame')

@push('title')
    <title>Category/List</title>
@endpush

@push('page')
    Category_List
@endpush
@section('body')
<div class="container w-75 border rounded p-2">
    <h2 class="text-center">List Category</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Cate_name</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($cate as $category )
                
            <tr>
                <td>{{$category->cate_name}}</td>
                <td>
                    <a href="{{url('/cate/edit')}}/{{$category->cate_id}}" class="btn btn-primary">Edit</a>
                    <a href="{{url('/cate/delete')}}/{{$category->cate_id}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection