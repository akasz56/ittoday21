@extends('layouts.app')

@section('title')
    Forgot Password
@endsection

@section('content')
<h1>Forgot Password</h1>
<form action="{{ route('auth.forgotpass') }}" method="POST">
    @csrf
    <div>
        @if (session()->has('success'))
            <div>
                <div class="alert alert-success">{{ session()->get('success') }}</div>
            </div>
        @endif
        @if (session()->has('fail'))
            <div>
                <div class="alert alert-danger">{{ session()->get('fail') }}</div>
            </div>
        @endif

        <div>
            <label for="email">Email address</label>
            <input type="email" name="email">
            <span>@error('email'){{ $message }}@enderror</span>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Send Email</button>
        </div>
    </div>
</form>
@endsection