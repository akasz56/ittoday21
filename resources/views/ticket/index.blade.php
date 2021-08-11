@extends('layouts.app')

@section('title')
Ticketing | IT Today 2021
@endsection

@section('content')
<main class="container pt-5">
    <h1 class="fw-bold">Ticketing Portal</h1>
    @if ( session()->has('404ticket') )
    <div class="alert alert-danger">
        {{ session()->get('404ticket') }}
    </div>
    @endif
    <div class="row my-5">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <a href="https://loket.com/o/ittoday21" target="_blank"><img class="img-fluid"
                    src="{{ asset('/assets/illust/Illust2-ticket1.svg') }}" alt="Event Tickets"></a>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <a href="{{ route('ticket.bundle') }}"><img class="img-fluid"
                    src="{{ asset('/assets/illust/Illust2-ticket2.svg') }}" alt="Bundle Tickets"></a>
        </div>
    </div>
</main>
@endsection