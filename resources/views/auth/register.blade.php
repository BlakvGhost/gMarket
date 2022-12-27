@extends('base.index')
@section('title')
    Inscription
@endsection
@section('content')
<div class="row row-cols-2">
    <div class="text-dark">
        <h5 class="link fw-bold">Create Account</h5>
    </div>
    <div class="text-end">
        <a href="{{ url('/') }}" class="link mx-2"><i class="mdi mdi-home-outline"></i></a>
        <span><i class="mdi mdi-chevron-right"></i></span>
        <a href="javascript:void(0)" class="link mx-2">Create account</a>
    </div>
</div>
<div class="my-3 card link p-3 rounded-3">
    <div class="text-dark mb-3">
        <h5 class="fw-bold">Create Account</h5>
    </div>
    <form method="POST">
        @csrf
        @if( $errors->any())
        <div class="alert alert-dismissible alert-danger" role="alert" id="liveAlert">
            <div class="msg-alert">
                @foreach($errors->all() as $error)
                <p>
                    <small>{{ $error }}</small>
                </p>
                @endforeach
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="my-2 input-group">
            <input type="text" required class="form-control bg-light" name="first_name" placeholder="Your First Name *">
        </div>
        <div class="my-2">
            <input type="text" required class="form-control bg-light" name="last_name" placeholder="Your Last Name *">
        </div>
        <div class="my-2">
            <input type="email" required id="userEmail" class="form-control bg-light" name="email" placeholder="Your Email *">
        </div>
        <div class="my-2 input-group">
            <input type="password" class="form-control bg-light" name="password" placeholder="Your Password">
            <button type="button" class="btn btn-danger password-visible"><i class="mdi mdi-eye-outline"></i></button>
        </div>
        <div class="my-2 input-group">
            <input type="password" class="form-control bg-light" name="password2" placeholder="Confirm Password">
            <button type="button" class="btn btn-danger password-visible"><i class="mdi mdi-eye-outline"></i></button>
        </div>
        <div class="my-3 text-center">
            <button class="btn btn-dark">Create</button>
        </div>
        <div class="my-3 text-center">
            <a href="{{ url('/') }}" class="btn btn-link text-muted">Return to Store</a>
        </div>
    </form>
</div>
@endsection
@section('script')
    <script>
        Utils.formUserCheckFunction = function(response, elt) {

            if(!response) {
                $(elt).addClass('is-valid').removeClass('is-invalid');
            }else{
                $(elt).addClass('is-invalid').removeClass('is-valid');
            }
        }
    </script>
@endsection