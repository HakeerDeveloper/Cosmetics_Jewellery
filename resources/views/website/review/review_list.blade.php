@extends('layout.template')
@section('breadcrum')
<nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item " ><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="{{url('/review')}}">Review_List</a></li>

            
        </ol>
    </div>
</nav>
@endsection
@push('title')
    <title>Home / Review_list</title>
@endpush
@section('body')

  {{-- <div class="container p-2"> --}}
    <h3 class="text-center">Reviews </h3>
    @foreach ($review as $r )
        
    {{-- <div class="">
        <span class="d-flex align-items-center "><img class=" py-3 rounded rounded-circle" src="{{url('/')}}/user_img/{{$r->user_img}}" height="50" width="40" alt="image">
            &nbsp; {{$r->user_name}}</span>
        <div class=" w-50 p-4">

            <p> {{$r->review}}</p>
        </div>
        
    </div> --}}




    <div class="container">
    <div class="review p-2">
        <div class="row no-gutters">
            <div class="col-auto">
                    <img class=" py-3 rounded rounded-circle" src="{{url('/')}}/user_img/{{$r->user_img}}" height="50" width="50" alt="image">
                
                
                    <p class="review-date "> {{$r->created_at}}</p>
                
            </div>
            <div class="col">
                <h4 class="text-primary">{{$r->user_name}}</h4>

                <div class="review-content">
                    <p>{{$r->review}}</p>
                </div>

                <div class="review-action">
                    <a href="#"><i class="icon-thumbs-up"></i>Like </a>
                    <a href="#"><i class="icon-thumbs-down"></i>Dislike </a>
                </div>
                
            </div>
        </div>
    </div>
    </div>
    @endforeach

  
@endsection