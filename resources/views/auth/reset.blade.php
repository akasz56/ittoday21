@extends('layouts.app')



@section('title')
    Reset Password
@endsection



@section('content')
<main class="container pt-5">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <h3 class="fw-bold">Reset Password</h3>
            

            <form action="{{ route('auth.resetpass') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$id}}">
                <input type="hidden" name="token" value="{{$token}}">

                <div class="mb-3 mt-4">
                    <label for="password" class="form-label">New Password</label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="New Password" required>
                    <span>@error('password'){{ $message }}@enderror</span>
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">New Password Confirmation</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                        placeholder="Password" required>
                    <span>@error('password_confirmation'){{ $message }}@enderror</span>
                </div>

                <button type="submit" class="btn btn-primary mt-3 d-block w-100">Reset Password</button>
            </form>
        </div>
        <!-- bisa diisi dengan ilustrasi gan -->
        <div class="col-sm-12 col-md-6 col-lg-6"></div>
    </div>
</main>
@endsection