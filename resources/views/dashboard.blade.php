@extends('layouts.app')

@section('title')
    User Dashboard
@endsection

@section('content')
    <h1>Dashboard Page</h1>
    <h2>Hi {{ Auth::user()->name }}</h2>
@endsection