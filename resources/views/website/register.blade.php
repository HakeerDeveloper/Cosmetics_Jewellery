@extends('layout.template')

@section('breadcrum')
<nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item " ><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="{{url('/register')}}">Register</a></li>
            
        </ol>
    </div><!-- End .container -->
</nav>
@endsection


@section('body')
<div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17" style="background-image: url('files/assets/images/backgrounds/login-bg.jpg')">
    <div class="container ">
        <div class="form-box">
            <div class="form-tab">
                <ul class="nav nav-pills nav-fill" role="tablist">
                   
                    <li class="nav-item">
                        <a class="nav-link active" id="register-tab-2" data-toggle="tab" href="#login-2" role="tab" aria-controls="register-2" aria-selected="true">Register</a>
                    </li>
                </ul>
                <div class="tab-content">
                 
                    <div class="tab-pane fade show active" id="register-2" role="tabpanel" aria-labelledby="register-tab-2">
                        <form action="{{url('/register/insert')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            {{-- for Name --}}
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <label class="form-label" >Your first name *</label>
                                        <input type="text" class="form-control"  name="reg_f_name" value="{{old('reg_f_name')}}" placeholder="Enter Your First Name" >
                                        @error('reg_f_name')
                                        <span class="text-danger">Please Fill the First Name</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <label class="form-label" >Your last name *</label>
                                        <input type="text" class="form-control"  name="reg_l_name" value="{{old('reg_l_name')}}" placeholder="Enter Your Last Name" >
                                        @error('reg_l_name')
                                            <span class="text-danger">Please Fill the Last Name</span>
                                        @enderror
                                    </div>

                                </div>
                            </div>

                            {{-- for username --}}
                            <div class="form-group">
                                <label class="form-label" >User name *</label>
                                <input type="text" class="form-control"  name="reg_username" value="{{old('reg_username')}}" placeholder="Enter Your User name" >
                                @error('reg_username')
                                    <span class="text-danger">Please Fill the User_Name</span>
                                @enderror
                            </div>


                            {{-- user email --}}
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <label class="form-label" >Your Email *</label>
                                        <input type="email" class="form-control"  name="reg_email" value="{{old('reg_email')}}" placeholder="Enter Your Email" >
                                        @error('reg_email')
                                            <span class="text-danger">Please Fill the Email</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 col-sm-6">
                                        <label class="form-label" >Confirm Email *</label>
                                        <input type="email" class="form-control"  name="reg_con_email" value="{{old('reg_con_email')}}" placeholder="Email Should be Same" >
                                        @error('reg_con_email')
                                            <span class="text-danger">Email Must Be Same</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            {{-- user pass --}}
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <label class="form-label" >Your Password *</label>
                                        <input type="password" class="form-control"  name="reg_pass" value="{{old('reg_pass')}}" placeholder="Enter Your Password" >
                                        @error('reg_pass')
                                            <span class="text-danger">Please Fill the Password</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 col-sm-6">
                                        <label class="form-label" >Confirm Password *</label>
                                        <input type="password" class="form-control"  name="reg_con_pass" value="{{old('reg_con_pass')}}" placeholder="Password Should be Same" >
                                        @error('reg_con_pass')
                                            <span class="text-danger">Password Must Be Same</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            {{-- user country and mobile --}}
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <label class="form-label" >Select Your Country *</label>
                                        <select name="reg_country" class="form-control" >
                                            <option value="" selected>No Selected</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Iran">Iran</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Iran">Iran</option>
                                        </select>
                                        @error('reg_country')
                                            <span class="text-danger">Please Select You Country</span> 
                                        @enderror
                                    </div>

                                    <div class="col-md-6 col-sm-6">
                                        <label class="form-label" >Your Mobile no *</label>
                                        <input type="text" class="form-control"  name="reg_mobile"  value="{{old('reg_mobile')}}" placeholder="Enter Your Mobile Number" >
                                    
                                        @error('reg_mobile')
                                            <span class="text-danger">Please Fill Your Mobile Number</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                              {{-- user gender and image --}}
                              <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <label class="form-label" >Your Gender *</label>
                                        <select name="reg_gender" class="form-control">
                                            <option value="" selected>No Select</option>
                                            <option value="0">Male</option>
                                            <option value="1">Female</option>
                                            <option value="2">Other</option>
                                        </select>
                                        @error('reg_gender')
                                            <span class="text-danger">Please Select Your Gender</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 col-sm-6">
                                        <label class="form-label" >Your Profie Image *</label>
                                        <input type="file" class="form-control"  name="reg_img" >
                                        @error('reg_img')
                                            <span class="text-danger">Please Attach Your Profile Image</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                             {{-- for address --}}
                             <div class="form-group">
                                <label class="form-label" >Your Address *</label>

                                <textarea name="reg_address" class="form-control" rows="2" placeholder="Enter You Adrress"></textarea>
                                @error('reg_address')
                                    <span class="text-danger">Please Fill the Address</span>
                                @enderror
                            </div>







                            <div class="form-footer">
                                <button type="submit" class="btn btn-outline-primary-2">
                                    <span>SIGN UP</span>
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

