@extends('layouts.app')

@section('title')
    Register
@endsection

@section('content')
<main class="container pt-5">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <h3 class="fw-bold">Register</h3>
            <form action="{{ route('auth.register') }}" method="POST">
                @csrf

                @if ( session()->has('fail') )
                    <div class="alert alert-danger">{{ session()->get('fail') }}</div>
                @endif

                <div class="mb-3 mt-3">
                    <label for="comp" class="form-label">Competition</label>
                    <select class="form-select" aria-label="Default select example" id="comp" name="comp">
                        <option value="hack" selected>Hack Today</option>
                        <option value="ux">UX Today</option>
                        <option value="busy">IT Business Competition</option>
                    </select>
                    <span>@error('comp'){{ $message }}@enderror</span>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Team Name</label>
                    <input type="text" class="form-control" id="name" name="name"
                        placeholder="bugHunterSquad" required>
                    <span>@error('name'){{ $message }}@enderror</span>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email"
                        placeholder="name@address.com" required>
                    <span>@error('email'){{ $message }}@enderror</span>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Password" required>
                    <span>@error('password'){{ $message }}@enderror</span>
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Password Confirmation</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                        placeholder="Password" required>
                    <span>@error('password_confirmation'){{ $message }}@enderror</span>
                </div>
                <button type="submit" class="btn btn-primary mt-3 d-block w-100">Register</button>
            </form>
            <p class="text-center">Already have an account? <a href="{{ route('login') }}"
                    class="text-decoration-none">Sign in</a> </p>
        </div>
        <!-- bisa diisi dengan ilustrasi gan -->
        <div class="col-sm-12 col-md-6 col-lg-6"></div>
    </div>
</main>
@endsection