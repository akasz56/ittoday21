@extends('layouts.app')

@section('title')
    Login
@endsection

@section('content')
    <h1>Login Page</h1>
    <form action="{{ route('auth.check') }}" method="POST">
        @csrf
        <div>
            <div>
                @if (session()->has('fail'))
                    <div>{{ session()->get('fail') }}</div>
                @endif
            </div>
            <div>
                <label for="email">Email address</label>
                <input type="email" name="email">
                <span>@error('email'){{ $message }}@enderror</span>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password">
                <span>@error('password'){{ $message }}@enderror</span>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </div>
    </form>
@endsection