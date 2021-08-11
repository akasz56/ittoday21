@extends('layouts.app')

@section('title')
Payment Methods | IT Today 2021
@endsection

@section('content')
<main class="container pt-5">
    <div class="row mt-5">
        <h1 class="fw-bold">Payment Methods</h1>
        <h2 class="text-primary mb-5">Rp {{ number_format($viewModel->price) }}</h2>

        {{----------------------------------------- Payment Methods -----------------------------------------}}
        <nav>
            <div class="nav nav-tabs tabs-dash" id="nav-tab" role="tablist">
                <button class="nav-link tabs-dash fw-bold active" id="nav-bni-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-bni" type="button" role="tab" aria-controls="nav-bni"
                    aria-selected="true">BNI</button>
                <button class="nav-link tabs-dash fw-bold" id="nav-bca-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-bca" type="button" role="tab" aria-controls="nav-bca"
                    aria-selected="false">BCA</button>
                <button class="nav-link tabs-dash fw-bold" id="nav-gopay-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-gopay" type="button" role="tab" aria-controls="nav-gopay"
                    aria-selected="false">Gopay</button>
                <button class="nav-link tabs-dash fw-bold" id="nav-dana-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-dana" type="button" role="tab" aria-controls="nav-dana"
                    aria-selected="false">Dana</button>
                <button class="nav-link tabs-dash fw-bold" id="nav-ovo-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-ovo" type="button" role="tab" aria-controls="nav-ovo"
                    aria-selected="false">OVO</button>
            </div>
        </nav>

        <div class="tab-content" id="nav-tabContent">
            {{-- -----------------------------------------BNI----------------------------------------- --}}
            <div class="tab-pane fade show active mt-4" id="nav-bni" role="tabpanel" aria-labelledby="nav-bni-tab">
                <form action={{ route('ticket.payMethod') }} method="POST">
                    @csrf
                    <h2 class="fw-bold">Payment Info</h2>
                    <p><span class="fw-bold">{{ $payMethod->bni['number'] }}</span> a.n {{ $payMethod->bni['name'] }}</p>
                    {{-- <h2 class="fw-bold">Payment Steps</h2>
                    <p></p> --}}
                    <input type="hidden" name="orderid" value="{{ $viewModel->ticketID }}">
                    <input type="hidden" name="payment" value="bni">
                    <button type="submit" class="btn btn-primary px-5 py-2">Select Payment Method</button>
                </form>
            </div>

            {{-- -----------------------------------------BCA----------------------------------------- --}}
            <div class="tab-pane fade mt-4" id="nav-bca" role="tabpanel" aria-labelledby="nav-bca-tab">
                <form action={{ route('ticket.payMethod') }} method="POST">
                    @csrf
                    <h2 class="fw-bold">Payment Info</h2>
                    <p><span class="fw-bold">{{ $payMethod->bca['number'] }}</span> a.n {{ $payMethod->bca['name'] }}</p>
                    {{-- <h2 class="fw-bold">Payment Steps</h2>
                    <p></p> --}}
                    <input type="hidden" name="orderid" value="{{ $viewModel->ticketID }}">
                    <input type="hidden" name="payment" value="bca">
                    <button type="submit" class="btn btn-primary px-5 py-2">Select Payment Method</button>
                </form>
            </div>

            {{-- -----------------------------------------Gopay----------------------------------------- --}}
            <div class="tab-pane fade mt-4" id="nav-gopay" role="tabpanel" aria-labelledby="nav-gopay-tab">
                <form action={{ route('ticket.payMethod') }} method="POST">
                    @csrf
                    <h2 class="fw-bold">Payment Info</h2>
                    <p><span class="fw-bold">{{ $payMethod->gopay['number'] }}</span> a.n {{ $payMethod->gopay['name'] }}</p>
                    {{-- <h2 class="fw-bold">Payment Steps</h2>
                    <p></p> --}}
                    <input type="hidden" name="orderid" value="{{ $viewModel->ticketID }}">
                    <input type="hidden" name="payment" value="gopay">
                    <button type="submit" class="btn btn-primary px-5 py-2">Select Payment Method</button>
                </form>
            </div>

            {{-- -----------------------------------------Dana----------------------------------------- --}}
            <div class="tab-pane fade mt-4" id="nav-dana" role="tabpanel" aria-labelledby="nav-dana-tab">
                <form action={{ route('ticket.payMethod') }} method="POST">
                    @csrf
                    <h2 class="fw-bold">Payment Info</h2>
                    <p><span class="fw-bold">{{ $payMethod->dana['number'] }}</span> a.n {{ $payMethod->dana['name'] }}</p>
                    {{-- <h2 class="fw-bold">Payment Steps</h2>
                    <p></p> --}}
                    <input type="hidden" name="orderid" value="{{ $viewModel->ticketID }}">
                    <input type="hidden" name="payment" value="dana">
                    <button type="submit" class="btn btn-primary px-5 py-2">Select Payment Method</button>
                </form>
            </div>
            {{-- -----------------------------------------OVO----------------------------------------- --}}
            <div class="tab-pane fade mt-4" id="nav-ovo" role="tabpanel" aria-labelledby="nav-ovo-tab">
                <form action={{ route('ticket.payMethod') }} method="POST">
                    @csrf
                    <h2 class="fw-bold">Payment Info</h2>
                    <p><span class="fw-bold">{{ $payMethod->ovo['number'] }}</span> a.n {{ $payMethod->ovo['name'] }}</p>
                    {{-- <h2 class="fw-bold">Payment Steps</h2>
                    <p></p> --}}
                    <input type="hidden" name="orderid" value="{{ $viewModel->ticketID }}">
                    <input type="hidden" name="payment" value="ovo">
                    <button type="submit" class="btn btn-primary px-5 py-2">Select Payment Method</button>
                </form>
            </div>

        </div>
    </div>
    <hr>
    @include('ticket.component.ticketinfo')
</main>
@endsection