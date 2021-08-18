@extends('layouts.app')

@section('title')
Ticket Bundles | IT Today 2021
@endsection

@section('content')
<main class="container pt-5">
    <div class="row">
        <h1 class="fw-bold">Buy Ticket Bundle</h1>
        @if ( session()->has('ticketConflict') )
        <div class="alert alert-danger">{{ session()->get('ticketConflict') }}</div>
        @endif
        <img src="{{ asset('/assets/illust/Illust2-ticketing.svg') }}" alt="Tickets Illustration">
        <p class="mb-5 pb-5">*Bundle 2 is for 2 Ilkommunity Webinars</p>

        {{----------------------------------------- Tickets Menu -----------------------------------------}}
        <nav>
            <div class="nav nav-tabs tabs-dash" id="nav-tab" role="tablist">
                <button class="nav-link tabs-dash fw-bold active" id="nav-bundletwo-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-bundletwo" type="button" role="tab" aria-controls="nav-bundletwo"
                    aria-selected="true">Bundle 2</button>
                <button class="nav-link tabs-dash fw-bold" id="nav-bundlefour-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-bundlefour" type="button" role="tab" aria-controls="nav-bundlefour"
                    aria-selected="false">Ilkommunity Bundle</button>
                <button class="nav-link tabs-dash fw-bold" id="nav-bundlefive-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-bundlefive" type="button" role="tab" aria-controls="nav-bundlefive"
                    aria-selected="false">Ilkommunity + International Seminar</button>
                <button class="nav-link tabs-dash fw-bold" id="nav-bundleux-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-bundleux" type="button" role="tab" aria-controls="nav-bundleux"
                    aria-selected="false">UX Bundle</button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">

            {{-- -----------------------------------------Bundle 2----------------------------------------- --}}
            <div class="tab-pane fade show active mt-4" id="nav-bundletwo" role="tabpanel"
                aria-labelledby="nav-bundletwo-tab">
                <form action="{{ route('ticket.bundle') }}" method="POST">
                    @csrf
                    <input type="hidden" name="type" value="bundletwo">
                    <div class="row">
                        @if ( session()->has('ticketConflict') )
                        <div class="alert alert-danger">{{ session()->get('ticketConflict') }}</div>
                        @endif
                        <!-- kiri -->
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="mb-3">
                                <label for="nama" class="form-label reqform">Your Name</label>
                                <input type="text" class="form-control" id="nama" name="nama" required
                                    value="{{ old('nama') }}" placeholder="Your Name">
                                @error('nama') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label reqform">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" required
                                    value="{{ old('email') }}" placeholder="Your Email Address">
                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label reqform">Phone Number</label>
                                <input type="text" class="form-control" id="phone" name="phone" required
                                    value="{{ old('phone') }}" placeholder="Phone Number">
                                @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="whatsapp" class="form-label">Whatsapp Number</label>
                                <input type="text" class="form-control" id="whatsapp" name="whatsapp"
                                    value="{{ old('whatsapp') }}" placeholder="Whatsapp Number">
                                @error('whatsapp') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <!-- kanan -->
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="mb-3">
                                <label for="event1" class="form-label reqform">Ticket 1</label>
                                <select class="form-select" aria-label="Default select example" id="event1"
                                    name="event1">
                                    <option value="1">Ilkommunity Data Mining</option>
                                    <option value="2">Ilkommunity Game Reality</option>
                                    <option value="3">Ilkommunity AgriUX</option>
                                    <option value="4">Ilkommunity Afterhour Dev Talks</option>
                                </select>
                                {{-- <p>Stock : xx</p> --}}
                            </div>
                            <div class="mb-3">
                                <label for="event2" class="form-label reqform">Ticket 2</label>
                                <select class="form-select" aria-label="Default select example" id="event2"
                                    name="event2">
                                    <option value="1">Ilkommunity Data Mining</option>
                                    <option value="2">Ilkommunity Game Reality</option>
                                    <option value="3">Ilkommunity AgriUX</option>
                                    <option value="4">Ilkommunity Afterhour Dev Talks</option>
                                </select>
                                {{-- <p>Stock : xx</p> --}}
                            </div>
                            <div class="mb-3">
                                <div>
                                    <small>
                                        Ilkommunity Data Mining : <span
                                            class="fw-bold text-primary">{{ $stock->daming }}</span>
                                    </small>
                                </div>
                                <div>
                                    <small>
                                        Ilkommunity Game Reality : <span
                                            class="fw-bold text-primary">{{ $stock->gary }}</span>
                                    </small>
                                </div>
                                <div>
                                    <small>
                                        Ilkommunity AgriUX : <span class="fw-bold text-primary">{{ $stock->ux }}</span>
                                    </small>
                                </div>
                                <div>
                                    <small>
                                        Ilkommunity Afterhour Dev Talks : <span
                                            class="fw-bold text-primary">{{ $stock->devtalks }}</span>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary px-5 py-2">Order Ticket</button>
                </form>
            </div>

            {{-- -----------------------------------------Ilkommunity Bundle----------------------------------------- --}}
            <div class="tab-pane fade mt-4" id="nav-bundlefour" role="tabpanel" aria-labelledby="nav-bundlefour-tab">
                <form action="{{ route('ticket.bundle') }}" method="POST">
                    @csrf
                    <input type="hidden" name="type" value="bundlefour">
                    <div class="row">
                        <!-- kiri -->
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="mb-3">
                                <label for="nama" class="form-label reqform">Your Name</label>
                                <input type="text" class="form-control" id="nama" name="nama" required
                                    value="{{ old('nama') }}" placeholder="Your Name">
                                @error('nama') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label reqform">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" required
                                    value="{{ old('email') }}" placeholder="Your Email Address">
                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label reqform">Phone Number</label>
                                <input type="text" class="form-control" id="phone" name="phone" required
                                    value="{{ old('phone') }}" placeholder="Phone Number">
                                @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="whatsapp" class="form-label">Whatsapp Number</label>
                                <input type="text" class="form-control" id="whatsapp" name="whatsapp"
                                    value="{{ old('whatsapp') }}" placeholder="Whatsapp Number">
                                @error('whatsapp') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <!-- kanan -->
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <small>Ilkommunity Bundle Stock : <span
                                    class="fw-bold text-primary">{{ $stock->ilkbundle }}</span></small>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary px-5 py-2">Order Ticket</button>
                </form>
            </div>

            {{-- -----------------------------------------Ilkommunity + International Seminar----------------------------------------- --}}
            <div class="tab-pane fade mt-4" id="nav-bundlefive" role="tabpanel" aria-labelledby="nav-bundlefive-tab">
                <form action="{{ route('ticket.bundle') }}" method="POST">
                    @csrf
                    <input type="hidden" name="type" value="bundlefive">
                    <div class="row">
                        <!-- kiri -->
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="mb-3">
                                <label for="nama" class="form-label reqform">Your Name</label>
                                <input type="text" class="form-control" id="nama" name="nama" required
                                    value="{{ old('nama') }}" placeholder="Your Name">
                                @error('nama') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label reqform">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" required
                                    value="{{ old('email') }}" placeholder="Your Email Address">
                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label reqform">Phone Number</label>
                                <input type="text" class="form-control" id="phone" name="phone" required
                                    value="{{ old('phone') }}" placeholder="Phone Number">
                                @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="whatsapp" class="form-label">Whatsapp Number</label>
                                <input type="text" class="form-control" id="whatsapp" name="whatsapp"
                                    value="{{ old('whatsapp') }}" placeholder="Whatsapp Number">
                                @error('whatsapp') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <!-- kanan -->
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <small>
                                Ilkommunity + International Seminar : <span
                                    class="fw-bold text-primary">{{ $stock->ilkintbundle }}</span>
                            </small>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary px-5 py-2">Order Ticket</button>
                </form>
            </div>

            {{-- -----------------------------------------UX Bundle----------------------------------------- --}}
            <div class="tab-pane fade mt-4" id="nav-bundleux" role="tabpanel" aria-labelledby="nav-bundleux-tab">
                <form action="{{ route('ticket.bundle') }}" method="POST">
                    @csrf
                    <input type="hidden" name="type" value="bundleux">
                    <div class="row">
                        <!-- kiri -->
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="mb-3">
                                <label for="nama" class="form-label reqform">Your Name</label>
                                <input type="text" class="form-control" id="nama" name="nama" required
                                    value="{{ old('nama') }}" placeholder="Your Name">
                                @error('nama') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label reqform">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" required
                                    value="{{ old('email') }}" placeholder="Your Email Address">
                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label reqform">Phone Number</label>
                                <input type="text" class="form-control" id="phone" name="phone" required
                                    value="{{ old('phone') }}" placeholder="Phone Number">
                                @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="whatsapp" class="form-label">Whatsapp Number</label>
                                <input type="text" class="form-control" id="whatsapp" name="whatsapp"
                                    value="{{ old('whatsapp') }}" placeholder="Whatsapp Number">
                                @error('whatsapp') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <!-- kanan -->
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <small>
                                UX Bundle : <span class="fw-bold text-primary">{{ $stock->uxbundle }}</span>
                            </small>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary px-5 py-2">Order Ticket</button>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection