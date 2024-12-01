@extends('frontlayout')
@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0">
                <div class="card-header text-center" style="background-color: #7C6A46; color: white;">
                    <h3>Register</h3>
                </div>
                <div class="card-body p-4">
                    <!-- Success Message -->
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
                    @endif

                    <!-- Registration Form -->
                    <form method="post" action="{{url('admin/customer')}}">
                        @csrf
                        <div class="mb-3">
                            <label for="full_name" class="form-label">Full Name <span class="text-danger">*</span></label>
                            <input required type="text" class="form-control" name="full_name" placeholder="Enter your full name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                            <input required type="email" class="form-control" name="email" placeholder="Enter your email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                            <input required type="password" class="form-control" name="password" placeholder="Enter your password">
                        </div>
                        <div class="mb-3">
                            <label for="mobile" class="form-label">Mobile Number <span class="text-danger">*</span></label>
                            <input required type="number" class="form-control" name="mobile" placeholder="Enter your mobile number">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" placeholder="Enter your address (optional)">
                        </div>
                        <input type="hidden" name="ref" value="front">
                        <div class="d-grid">
                            <button type="submit" class="btn text-white" style="background-color: #7C6A46;">Register</button>
                        </div>
                        <div class="text-center mt-3">
                            <a href="{{url('customer/login')}}" class="text-decoration-none">Already have an account? Login here</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
