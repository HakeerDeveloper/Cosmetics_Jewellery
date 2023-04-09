@extends('layout.template')
@push('title')
	<title> Login</title>
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
							    	<form action="{{url('/login/insert')}}" method="POST">
                                        @csrf
							    		<div class="form-group">
							    			<label >Your email address *</label>
											
							    			<input type="email" class="form-control"  name="user_email">
							    		</div>

							    		<div class="form-group">
							    			<label >Password *</label>
							    			<input type="password" class="form-control" name="user_pass" >
							    		</div>

							    		<div class="form-footer  ">
							    			<button type="submit" class="btn btn-outline-primary-2  ">
			                					<span>Login</span>
			            						<i class="icon-long-arrow-right"></i>
			                				</button>

			                				
							    		</div>
							    	</form>
							    	<div class="form-choice">
								    	<p class="text-center">or sign in with</p>
								    	<div class="row">
								    		<div class="col-sm-12 col-md-12">
								    			<a href="#" class="btn btn-login btn-g">
								    				<img src="{{url('files/assets/images/icons/google.png')}}" width="35" class="p-1" alt="">
								    				&nbsp; Login With Google
								    			</a>
								    		</div>
								    		
								    	</div>
							    	</div>
							    </div>
							</div>
						</div>
            		</div>
            	</div>
            </div>
@endsection

