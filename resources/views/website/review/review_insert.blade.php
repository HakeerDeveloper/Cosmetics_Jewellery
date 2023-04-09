@extends('layout.template')
@section('breadcrum')
<nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item " ><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="{{url('/review/insert')}}">Review_Submit</a></li>

            
        </ol>
    </div>
</nav>
@endsection
@push('title')
    <title>Home / Review</title>
@endpush


@section('body')
    <div class="container p-2  w-50  ">

        <h3 class="text-capitalize text-center"> Submit you review</h3>
        <form action="{{url('review/store')}}" method="post">
            @csrf
            @if(session()->has('user_name'))
            
                
            
                <span class="d-flex align-items-center "><img class=" py-3 rounded rounded-circle" src="{{url('/')}}/user_img/{{session()->get('user_img')}}" width="40" alt="image">
                &nbsp;{{session()->get('user_name')}}</span>
                @else
                <a class="btn btn-primary my-2 " href="{{url('/login')}}">Login</a>
            @endif
                <div>
                    
                    <textarea name="review" id="" cols="30" rows="10" class="form-control border rounded" placeholder="Please Enter You Review"></textarea>
                    @error('review')
                        <span class="text-danger">Please Fill the Review</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary ms-2">Submit</button>
            </form>
            </div>
            @endsection