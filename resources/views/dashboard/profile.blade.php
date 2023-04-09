@extends('dashboard_layout.frame')

@push('title')
    <title>Profile</title>
@endpush


@section('body')

<section>
    <div class="container border border-white w-50 p-4 text-center rounded">
        <h3>Profile</h3>
        <div class="">

            <img src="admin_img/{{session()->get('img')}}" class="rounded-circle " height="100" width="100" alt="image was not found">
        </div>
            <h5 class="text-capitalize text-danger">
        user_name : <span class="text-white"> {{session()->get('name');}}</span>

        </h5>
        <h6 class="text-danger">
          Email :  <span class="text-white"> {{session()->get('email');}}</span>

        </h6>

        <a href="{{url('/')}}"  class="btn btn-outline-danger mt-3">Return Dashboard</a>
    </div>
</section>
@endsection