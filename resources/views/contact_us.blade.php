@extends('frontlayout')
@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0">
                <div class="card-header" style="background-color: #7C6A46; color: white; text-align: center;">
                    <h3>Contact Us</h3>
                </div>
                <div class="card-body p-4">
                    <!-- Error Messages -->
                    @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <p class="mb-0">{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif

                    <!-- Success Message -->
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Contact Form -->
                    <form method="post" action="{{url('save-contactus')}}">
                        @csrf
                        <div class="mb-3">
                            <label for="full_name" class="form-label">Full Name <span class="text-danger">*</span></label>
                            <input type="text" name="full_name" class="form-control" id="full_name" placeholder="Enter your full name" />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email address" />
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject <span class="text-danger">*</span></label>
                            <input type="text" name="subject" class="form-control" id="subject" placeholder="Enter the subject" />
                        </div>
                        <div class="mb-3">
                            <label for="msg" class="form-label">Message <span class="text-danger">*</span></label>
                            <textarea name="msg" class="form-control" id="msg" rows="5" placeholder="Write your message here"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn" style="background-color: #7C6A46; color: white; padding: 0.5rem 2rem;">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
