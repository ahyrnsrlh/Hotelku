@extends('frontlayout')
@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0">
                <div class="card-header" style="background-color: #7C6A46; color: white; text-align: center;">
                    <h3>Add Testimonial</h3>
                </div>
                <div class="card-body p-4">
                    <!-- Success Message -->
                    @if(Session::has('success'))
                        <div class="alert alert-success text-center">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Testimonial Form -->
                    <form method="post" action="{{url('customer/save-testimonial')}}">
                        @csrf
                        <div class="mb-3">
                            <label for="testimonial" class="form-label">Your Testimonial <span class="text-danger">*</span></label>
                            <textarea name="testi_cont" class="form-control" id="testimonial" rows="6" placeholder="Write your experience here"></textarea>
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
