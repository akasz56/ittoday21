@extends('layouts.app')

@section('title')
    Login
@endsection

@section('content')
<h1>Register Page</h1>
<form action="{{ route('auth.create') }}" method="POST">
    @csrf
    <div>
        <div>
            @if (session()->has('fail'))
                <div>{{ session()->get('fail') }}</div>
            @endif
        </div>
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ old('name') }}">
            <span>@error('name'){{ $message }}@enderror</span>
        </div>
        <div>
            <label for="email">Email address</label>
            <input type="email" name="email" value="{{ old('email') }}">
            <span>@error('email'){{ $message }}@enderror</span>
        </div>
        <div>
            <label for="">Password</label>
            <input type="password" name="password">
            <span>@error('password'){{ $message }}@enderror</span>
        </div>
        <div>
            <label for="">Confirm Password</label>
            <input type="password" name="password_confirmation">
            <span>@error('password_confirmation'){{ $message }}@enderror</span>
        </div>
        <div>
            <button type="submit">Register</button>
        </div>
    </div>
</form>
@endsection