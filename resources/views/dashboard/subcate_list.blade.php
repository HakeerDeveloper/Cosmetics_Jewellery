@extends('layout.frame')

@push('title')
    <title>SubCate/List</title>
@endpush

@push('page')
    Sub_Cate_List
@endpush
@section('body')

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>SubCate_name</th>
                <th>Categroy From</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($subcate  as $item)
                
            <tr>
                <td>{{$item->sub_cate_name}}</td>
                <td>{{$item->cate_name}}</td>
                <td>
                    <a href="{{url('/subcate/edit')}}/{{$item->sub_cate_id}}" class="btn btn-primary">Edit</a>
                    <a href="{{url('/subcate/delete')}}/{{$item->sub_cate_id}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection