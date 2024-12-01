@extends('frontlayout')
@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg border-0">
                <div class="card-header text-center" style="background-color: #7C6A46; color: white;">
                    <h3>Login</h3>
                </div>
                <div class="card-body p-4">
                    <!-- Error Message -->
                    @if(Session::has('error'))
                        <div class="alert alert-danger">
                            {{session('error')}}
                        </div>
                    @endif

                    <!-- Login Form -->
                    <form method="post" action="{{url('customer/login')}}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                            <input required type="email" class="form-control" name="email" placeholder="Enter your email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                            <input required type="password" class="form-control" name="password" placeholder="Enter your password">
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn text-white" style="background-color: #7C6A46;">Login</button>
                        </div>
                        <div class="text-center mt-3">
                            <a href="{{url('customer/register')}}" class="text-decoration-none">Don't have an account? Register here</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
