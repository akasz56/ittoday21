@extends('layouts.app')

@section('content')
<div class="d-flex flex-column justify-content-center align-items-center page404">
    
    <div class="mt-5">
        <h1 class="txt-heading1">Sorry, Registration has been closed</h1>
        @if ( session()->has('message') )
            <p>
                Your team hasn't paid the registration fee, therefore your team can't proceed. 
                <br>
                If you think you have paid, please consider contacting the Admin : <a class="btn btn-outline-light" href="https://wa.me/+6289608703393" target="_blank">Akaasyah Nurfath (Whatsapp)</a>
            </p>
        @endif
    </div>
    
    <div class="my-5">
        <a href="{{ route('home') }}" class="btn btn-primary p-3">Back to Home</a>
    </div>
    
</div>
@endsection