@extends('dashboard_layout.simple')

@push('title')
    <title>Dashboard / Login</title>
@endpush

@section('body')
    {{-- <div class="container border border-danger w-50 p-2" >
        <h2 class="text-center">Login</h2>
        <form action="{{url('/login/action')}}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Enter Your Email</label>
            <input type="text" name="email" placeholder="Enter Your Email" class="form-control">
            @error('email')
                <span class="text-danger">Please Fill the Email Address</span>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Enter Your Password</label>
            <input type="password" name="pass" placeholder="Enter Your Password" class="form-control">
            @error('pass')
                <span class="text-danger">Please Fill the Password</span>
            @enderror
        </div>
        <div>
            
            <button type="submit" class="btn btn-primary d-block m-auto">Login</button>
            <p class="text-center text-primary">or</p>
            <a href="{{url('/dashboard_register')}}" class="btn btn-danger d-block  w-25 m-auto">Sign_Up</a>
        </div>
        </form>
    </div> --}}
    @if(session()->has('not_login'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Error 😩 </strong>{{session()->get('not_login')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    
    @endif

    <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17
     pb-lg-17" style="background-image: url('slider_images/img_1.jpg')">
        <div class="container">
            <div class="form-box">
                <div class="form-tab">
                    <ul class="nav nav-pills nav-fill" role="tablist">
                       
                        <li class="nav-item">
                            <a class="nav-link active" id="login-tab-2" data-toggle="tab" href="#login-2" role="tab" aria-controls="login-2" aria-selected="true">Admin_Login</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                     
                        <div class="tab-pane fade show active" id="login-2" role="tabpanel" aria-labelledby="login-tab-2">
                            <form action="{{url('/login/check')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label >Your email address *</label>
                                    <input type="email" class="form-control" value="{{old('admin_email')}}"  name="admin_email">
                                    @error('admin_email')
                                        <span class="text-danger text-capitalize">please fill the email addrees</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label >Password *</label>
                                    <input type="password" class="form-control" value="{{old('admin_pass')}}" name="admin_pass" >
                                    @error('admin_pass')
                                        <span class="text-danger text-capitalize">please fill the password </span>
                                    @enderror

                                </div>

                                <div class="form-footer  ">
                                    <button type="submit" class="btn btn-outline-primary-2  ">
                                        <span>Login</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </button>

                                    
                                </div>
                            </form>
                            <div class="form-choice">
                                <p class="text-center">OR </p>
                                <div class="row">
                                    <div class="col-sm-12 col-md-12">
                                        <a href="{{url('/dashboard_register')}}" class="btn btn-login btn-g">
                                            <img src="{{url('files/assets/images/icons/signup.png')}}" width="40" class="p-1" alt="">
                                            &nbsp; Sign_Up
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