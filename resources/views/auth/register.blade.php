@extends('layouts.app')

@section('title')
    Register
@endsection

@section('content')
<h1>Register Page</h1>
<form action="{{ route('auth.register') }}" method="POST">
    @csrf
    <div>
        @if (session()->has('fail'))
            <div>
                <div class="alert alert-danger">{{ session()->get('fail') }}</div>
            </div>
        @endif

        <div>
            <label for="comp">Competition</label>
            <div>
                <input type="radio" id="hack" name="comp" value="hack">
                <label for="hack">HackToday</label>
            </div>
            <div>
                <input type="radio" id="ux" name="comp" value="ux">
                <label for="ux">UXToday</label>
            </div>
            <div>
                <input type="radio" id="busy" name="comp" value="busy">
                <label for="busy">IT Business</label>
            </div>
            {{-- <select name="comp" id="comp">
                <option value="hack">HackToday</option>
                <option value="ux">UXToday</option>
                <option value="busy">IT Business</option>
            </select> --}}
            <span>@error('comp'){{ $message }}@enderror</span>
        </div>
        <div>
            <label for="name">Team Name</label>
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