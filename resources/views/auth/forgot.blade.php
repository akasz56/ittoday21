@extends('layouts.app')

@section('title')
    Forgot Password
@endsection

@section('content')
<main class="container pt-5">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">

            <h3 class="fw-bold">Reset Password</h3>

            @if (session()->has('success'))
                <div class="alert alert-success">{{ session()->get('success') }}</div>
            @endif
            @if (session()->has('fail'))
                <div class="alert alert-danger">{{ session()->get('fail') }}</div>
            @endif

            <p class="lh-sm">Enter your user account's verified email address and we will send you a password
                reset link.</p>

            <form action="{{ route('auth.forgotpass') }}" method="POST">
                @csrf
                <div class="mb-3 mt-4">
                    <label for="email" class="form-label">Your Registered Email Address</label>
                    <input type="email" class="form-control" id="email" name="email"
                        placeholder="name@address.com">
                </div>
                <button type="submit" class="btn btn-primary mt-3 d-block w-100">Send Reset Password Link</button>
            </form>
            <p class="text-center">Remember your password? <a href="{{ route('login') }}" class="text-decoration-none">Sign
                    in</a> </p>
        </div>
        <!-- bisa diisi dengan ilustrasi gan -->
        <div class="col-sm-12 col-md-6 col-lg-6"></div>
    </div>
</main>
@endsection