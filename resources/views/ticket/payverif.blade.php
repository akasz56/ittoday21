@extends('layouts.app')

@section('title')
Payment Confirmation | IT Today 2021
@endsection

@section('content')
<main class="container pt-5">
    <h1 class="fw-bold">Payment Confirmation</h1>
    @if ( session()->has('error') )
    <div class="alert alert-danger">{{ session()->get('error') }}</div>
    @endif
    @if ($viewModelPay->payStatus)
    <div class="alert alert-warning">Payment is currently being Verified</div>
    @else
    <div class="border p-3 rounded-3">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <form action={{ route('ticket.payVerif') }} method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Name</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Name" required>
                        @error('nama')<span>{{ $message }}</span>@enderror
                    </div>
                    <div>
                        <label for="proof" class="form-label">Proof of payment</label>
                        <input type="file" class="form-control" id="proof" name="proof" required>
                        @error('proof')<span>{{ $message }}</span>@enderror
                        <small>
                            <p class="mb-0">File format: jpeg, jpg, png.</p>
                        </small>
                    </div>
                    <div>
                        <input type="hidden" name="orderid" value="{{ $viewModel->ticketID }}">
                        <button type="submit" class="btn btn-primary mt-3 d-block w-100">Upload</button>
                    </div>
                </form>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h2 class="fw-bold">Payment Info</h2>
                <p><span class="fw-bold">{{ $payMethod->number }}</span> a.n {{ $payMethod->name }}</p>
                <h2 class="text-primary mb-5">Rp {{ number_format($viewModel->price) }}</h2>
            </div>
        </div>
    </div>
    @endif

    <hr>
    @include('ticket.component.ticketinfo')
</main>
@endsection