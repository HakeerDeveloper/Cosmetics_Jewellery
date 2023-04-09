@extends('layout.template')
@push('title')

@if (session()->has('user_email'))
            <title>{{session()->get('user_name')}} / Profile</title>
            @else
            <title>User / Profile</title>

        @endif
        
@endpush

@section('breadcrum')
<nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item " ><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item " ><a href="{{url('/login')}}">Login</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="{{url('/profile')}}">Profile</a></li>
            
        </ol>
    </div><!-- End .container -->
</nav>
@endsection


@section('body')
      <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17" style="background-image: url('files/assets/images/backgrounds/login-bg.jpg')">
            	<div class="container">
            		<div class="form-box">
            			<div class="form-tab">
	            			<ul class="nav nav-pills nav-fill" role="tablist">
							   
							    <li class="nav-item">
							        <a class="nav-link active" id="login-tab-2" data-toggle="tab" href="#login-2" role="tab" aria-controls="login-2" aria-selected="true">Profile</a>
							    </li>
							</ul>
							<div class="tab-content">
							 
							    <div class="tab-pane fade show active" id="login-2" role="tabpanel" aria-labelledby="login-tab-2">
                                    <img src="user_img/{{session()->get('user_img')}}" width="100" class="m-auto rounded-circle" alt="">
                                    <div class="text-center py-2">
                                        User_Name : <b> {{session()->get('user_name')}}</b>
                                    </div>
                                    <div class="text-center py-2">
                                        User_Email : <b> {{session()->get('user_email')}}</b>
                                    </div>
                                    <div class="pt-3">
                                        <a href="{{url('/')}}" class="btn btn-outline-primary-2  m-auto d-block text-capitalize">return to home</a>
                                    </div>

							    	
							    </div>
							</div>
						</div>
            		</div>
            	</div>
            </div>
@endsection

