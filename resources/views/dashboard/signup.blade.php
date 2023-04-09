@extends('dashboard_layout.simple')

@push('title')
    <title>Dashboard / Sign_Up</title>
@endpush


@section('body')
    <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17" style="background-image: url('slider_images/img_1.jpg')">
        <div class="container">
            <div class="form-box">
                <div class="form-tab">
                    <ul class="nav nav-pills nav-fill" role="tablist">
                       
                        <li class="nav-item">
                            <a class="nav-link active" id="login-tab-2" data-toggle="tab" href="#login-2" role="tab" aria-controls="login-2" aria-selected="true">Admin Register</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                     
                        <div class="tab-pane fade show active " id="login-2" role="tabpanel" aria-labelledby="login-tab-2">
                            <form action="{{url('/admin_login/insert')}}"  method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Admin_name *</label>
                                    <input type="text" name="admin_name"  placeholder="Enter Your Name" class="form-control" value="{{old('admin_name')}}">
                                    @error('admin_name')
                                        <span class="text-danger text-capitalize">please fill the admin name</span>
                                    @enderror
                                </div>

                                <div class="mb-3 row">
                                    <div class="col-md-6 col-sm-6 form-group">
                                        <label  class="form-label">Admin_Email *</label>
                                        <input type="text" class="form-control" placeholder="Enter Your Email" name="email" value="{{old('email')}}">
                                        @error('email')
                                            <span class="text-danger">Please Fill Your Email</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-6 form-group">
                                        <label  class="form-label">Re_Enter Email *</label>
                                        <input type="text" class="form-control" placeholder="ReEnter Your Email" name="re_email" value="{{old('re_email')}}">
                                        @error('re_email')
                                            <span class="text-danger">PLease Email Must be Same</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <div class="col-md-6 col-sm-6 form-group">
                                        <label  class="form-label">Admin_Password *</label>
                                        <input type="password" class="form-control" placeholder="Enter Your Password" name="pass" value="{{old('pass')}}">
                                        @error('pass')
                                            <span class="text-danger">Please Fill the Password</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-6  form-group">
                                        <label  class="form-label">ReEnter Password *</label>
                                        <input type="password" class="form-control" placeholder="ReEnter Your Password" name="re_pass" value="{{old('re_pass')}}">
                                        @error('re_pass')
                                            <span class="text-danger">PLease Password must be Same</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-6 col-sm-6 mb-3 form-group">
                                        <label  class="form-label">Admin Gender *</label>
                                        <select name="gender"  class="form-control form-select ">
                                            <option value="">No_selected</option >
                                                <option value="1">Male</option>
                                                <option value="0">Female</option>
                                            </select>
                                            @error('gender')
                                            <span class="text-danger">Please Select Your Gender</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 col-sm-6 mb-3 form-group">
                                            <label  class="form-label">Admin Age *</label>
                                            <input type="number" name="age" placeholder="Enter Your Age" class="form-control"  value="{{old('age')}}">
                                            @error('age')
                                            <span class="text-danger">Please Enter Your Age</span>
                                            @enderror
                                        </div>
                                    </div>
                                <div class="mb-3 form-group">
                                    <label  class="form-label">Admin Image *</label>
                                    <input type="file" name="img" class="form-control" value="{{old('img')}}">
                                </div>

                                <div class="form-footer  ">
                                    <button type="submit" class="btn btn-outline-primary-2  ">
                                        <span>Register</span>
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