@extends('layouts.app')

@section('title')
Ticket Details | IT Today 2021
@endsection

@section('content')
<main class="container pt-5">
    @include('ticket.component.ticketinfo')
</main>
@endsection