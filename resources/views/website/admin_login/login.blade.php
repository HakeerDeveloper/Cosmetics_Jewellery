@extends('layout.template')
@push('title')
	<title> Login </title>
@endpush
@section('breadcrum')
<nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item " ><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="{{url('/login')}}">Login</a></li>
            
        </ol>
    </div>
</nav>
@endsection


@section('body')
      <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17" style="background-image: url('files/assets/images/backgrounds/login-bg.jpg')">
            	<div class="container">
            		<div class="form-box">
            			<div class="form-tab">
	            			<ul class="nav nav-pills nav-fill" role="tablist">
							   
							    <li class="nav-item">
							        <a class="nav-link active" id="login-tab-2" data-toggle="tab" href="#login-2" role="tab" aria-controls="login-2" aria-selected="true">Login</a>
							    </li>
							</ul>
							<div class="tab-content">
							 
							    <div class="tab-pane fade show active" id="login-2" role="tabpanel" aria-labelledby="login-tab-2">
									@if (session()->has('error'))
										<h3 class="text-danger bg-dark">{{session()->get('error')}}</h3>
									@endif
							    	<form action="{{url('/login/insert')}}" method="POST">
                                        @csrf
							    		<div class="form-group">
							    			<label >Your email address *</label>
							    			<input type="email" class="form-control" value="{{old('user_email')}}" name="user_email">
											@error('user_email')
												<span class="text-danger">Please Fill the Email Address</span>
											@enderror
							    		</div>

							    		<div class="form-group">
							    			<label >Password *</label>
							    			<input type="password" class="form-control" name="user_pass" >
											@error('user_pass')
												<span class="text-dang">Please Fill the Password</span>
											@enderror
							    		</div>

							    		<div class="form-footer  ">
							    			<button type="submit" class="btn btn-outline-primary-2  ">
			                					<span>Login</span>
			            						<i class="icon-long-arrow-right"></i>
			                				</button>

			                				
							    		</div>
							    	</form>
							    	
							    </div>
							</div>
						</div>
            		</div>
            	</div>
            </div>
@endsection

