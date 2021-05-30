@extends('layouts.app')

@section('title')
    Login
@endsection

@section('content')
<main class="container pt-5">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">


            <h3 class="fw-bold">Login</h3>

            @if ( session()->has('fail') )
                <div class="alert alert-danger">{{ session()->get('fail') }}</div>
            @endif

            <form action={{ route('auth.login') }} method="POST">
                @csrf

                <div class="mb-3 mt-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email"
                    name="email" placeholder="name@address.com" required>
                    @error('email') <span>{{ $message }}</span> @enderror
                </div>
                
                <div class="mb-3">
                    <div class="d-flex">
                        <label for="password" class="form-label">Password</label>
                        <a href={{ route('forgotpass') }} class="ms-auto text-decoration-none">Forgot your
                            password?</a>
                    </div>
                    <div class="input-group">
                        <!-- password input -->
                        <input type="password" class="form-control form-control-appended sign-in-form"
                            id="signInPassword" placeholder="password" required>
                        <!-- show/hide password icon -->
                        <span class="input-group-text lh-1 eye-icon-area">
                            <i class="bi bi-eye cursor eye-icon" id="togglePassword" style="font-size:1.15em;"></i>
                        </span>
                    </div>
                    @error('password') <span>{{ $message }}</span> @enderror
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="true" id="rememberme" name="rememberme">
                    <label class="form-check-label" for="rememberme">
                        Remember me
                    </label>
                </div>

                <button type="submit" class="btn btn-primary mt-3 d-block w-100">Sign in</button>
            </form>


            <p class="text-center mt-2">Don't have an account yet? <a href={{ route('register') }}
                    class="text-decoration-none">Register</a> </p>
        </div>
        <!-- bisa diisi dengan ilustrasi gan -->
        <div class="col-sm-12 col-md-6 col-lg-6"></div>
    </div>
</main>
@endsection