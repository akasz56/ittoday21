@extends('layouts.app')

@section('title')
    Login
@endsection

@section('content')
<main class="container pt-5">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">


            <h3 class="fw-bold">Login</h3>


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
                    <input type="password" class="form-control" id="password"
                    name="password" placeholder="password" required>
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


            <p class="text-center">Don't have an account yet? <a href={{ route('register') }}
                    class="text-decoration-none">Register</a> </p>
        </div>
        <!-- bisa diisi dengan ilustrasi gan -->
        <div class="col-sm-12 col-md-6 col-lg-6"></div>
    </div>
</main>
@endsection