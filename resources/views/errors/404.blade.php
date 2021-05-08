@extends('layouts.app')

@section('content')
<div class="d-flex flex-column justify-content-center align-items-center page404">
    <div class="mt-5">
        <h1 class="txt-heading1">This page doesn't exist</h1>
    </div>
    <div class="my-5">
        <a href="{{ url()->previous() }}" class="btn btn-primary p-3">Back to Previous Page</a>
    </div>
</div>
@endsection