@extends('layouts.app')



@section('title')
    Reset Password
@endsection



@section('content')

<h1>Reset Password</h1>

<form action="{{ route('auth.resetpass') }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$id}}">
    <input type="hidden" name="token" value="{{$token}}">

    <div>
        @if (session()->has('fail'))
            <div>
                <div class="alert alert-danger">{{ session()->get('fail') }}</div>
            </div>
        @endif

        <div>
            <label for="password">New Password</label>
            <input type="password" name="password">
            <span>@error('password'){{ $message }}@enderror</span>
        </div>

        <div>
            <label for="">Confirm New Password</label>
            <input type="password" name="password_confirmation">
            <span>@error('password_confirmation'){{ $message }}@enderror</span>
        </div>

        <div>
            <button type="submit" class="btn btn-primary">Reset Password</button>
        </div>
    </div>

</form>
@endsection