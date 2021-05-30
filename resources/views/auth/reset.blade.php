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
                    <div class="input-group">
                        <!-- password input -->
                        <input type="password" class="form-control form-control-appended sign-in-form"
                            id="signInPassword" name="password" placeholder="New Password" required>
                        <!-- show/hide password icon -->
                        <span class="input-group-text lh-1 eye-icon-area">
                            <i class="bi bi-eye cursor eye-icon" id="togglePassword" style="font-size:1.15em;"></i>
                        </span>
                    </div>
                    @error('password')<span>{{ $message }}</span>@enderror
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">New Password Confirmation</label>
                    <div class="input-group">
                        <!-- password input -->
                        <input type="password" class="form-control form-control-appended sign-in-form"
                            id="signInPassword2" name="password_confirmation" placeholder="New Password Confirmation" required>
                        <!-- show/hide password icon -->
                        <span class="input-group-text lh-1 eye-icon-area">
                            <i class="bi bi-eye cursor eye-icon" id="togglePassword2" style="font-size:1.15em;"></i>
                        </span>
                    </div>
                    @error('password_confirmation')<span>{{ $message }}</span>@enderror
                </div>

                <button type="submit" class="btn btn-primary mt-3 d-block w-100">Reset Password</button>
            </form>
        </div>
        <!-- bisa diisi dengan ilustrasi gan -->
        <div class="col-sm-12 col-md-6 col-lg-6"></div>
    </div>
</main>
@endsection