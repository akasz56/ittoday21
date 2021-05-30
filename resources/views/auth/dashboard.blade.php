@extends('layouts.app')

@section('title')
    {{ $nama }} Dashboard
@endsection

@section('content')

<main class="container pt-5">
    <h1 class="fw-bold">{{ ucwords($nama) . ' Team' }} Dashboard</h1>

{{----------------------------------------- Messages -----------------------------------------}}
    @if ( session()->has('success.bio') )
        <div class="alert alert-success">{{ session()->get('success.bio') }}</div>
    @endif
    @if ( session()->has('fail.bio') )
        <div class="alert alert-danger">{{ session()->get('fail.bio') }}</div>
    @endif
    @if ( session()->has('success.prop') )
        <div class="alert alert-success">{{ session()->get('success.prop') }}</div>
    @endif
    @if ( session()->has('fail.prop') )
        <div class="alert alert-danger">{{ session()->get('fail.prop') }}</div>
    @endif

{{----------------------------------------- Payment Infos -----------------------------------------}}
    <h2 class="mt-5 fw-bold">Payment Information</h2>
    @if ( $status_bayar )
        <div class="border p-3 rounded-3">
            <div class="row">
                <div>
                    @if ( session()->has('success.trf') )
                        <div class="alert alert-success">{{ session()->get('success.trf') }}</div>
                    @endif
                    @if ( $status_bayar > 1 )
                        <div class="alert alert-success">{{ $message_bayar }}</div>
                    @else
                        <div class="alert alert-warning">{{ $message_bayar }}</div>
                    @endif
                </div>
            </div>
        </div>

    @else
        <div class="row">

            <div>
                @if ($message_bayar)
                    <div class="alert alert-danger">{{ $message_bayar }}</div>
                @endif
            </div>

            <div class="col-md-6">
                <p class="lh-lg">Participants of IT TODAY 2021 competitions can pay the registration fee with the
                    nominal amount plus
                    unique code at the last digits. For example, the registration fee is IDR 90.000, and your unique
                    code is
                    12, so you have to transfer IDR 90.012,- Then you can confirm the payment on IT TODAY 2021 website
                    dashboard.</p>
            </div>

            <div class="col-md-6">
                <p class="ms-lg-4 mb-0"><span class="fw-bold">{{ $jenis_lomba }} : </span>IDR {{ number_format($harga_bayar) }},-</p>
                <p class="ms-lg-4 mb-0"><span class="fw-bold">Team Unique Code: </span>{{ $id }}</p>
                <p class="ms-lg-4 mb-0"><span class="fw-bold">Total Fee: </span><span class="fw-bold text-primary">{{ number_format($id + $harga_bayar) }},-</span></p>
            </div>
            
        </div>


        <h4 class="fw-bold mt-3 text-muted">Transfer To:</h4>
        <p class="my-1">BCA : 3740828311 a.n Farhan Fathurrahman</p>
        <p class="my-1">BNI : 1168834234 a.n Nisma Karmiahtun Fadilah</p>


        <h2 class="mt-5 pt-5 fw-bold mt-3 pb-2">Payment Confirmation</h2>
        <div class="border p-3 rounded-3">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <form action="{{ route('upload.trf') }}" method="POST" enctype="multipart/form-data" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="nama" class="form-label">Bank Account Name</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Under the name of {{ ucwords($nama) . ' Team' }}" required>
                            @error('trf')<span>{{ $message }}</span>@enderror
                        </div>

                        <div>
                            <label for="trf" class="form-label">Proof of payment</label>
                            <input type="file" class="form-control" id="trf" name="trf" required>
                            @error('trf')<span>{{ $message }}</span>@enderror
                            <small><p class="mb-0">File format: jpeg, jpg, png.</p></small>
                        </div>

                        <div>
                            <button type="submit" class="btn btn-primary mt-3 d-block w-100">Upload</button>
                        </div>

                    </form>

                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    @if ( session()->has('fail.trf') )
                        <div class="alert alert-danger">{{ session()->get('fail.trf') }}</div>
                    @endif
                </div>
            </div>
        </div>
    @endif

    {{----------------------------------------- Team Biodata -----------------------------------------}}
    <h2 class="mt-5 pt-5 fw-bold mt-4">Team Biodata</h2>
    <div class="alert alert-info">Please Complete the following biodata fields before <span class="fw-bold">8th August 2021</span></div>
    <nav>
        <div class="nav nav-tabs tabs-dash" id="nav-tab" role="tablist">
            <button class="nav-link tabs-dash active" id="nav-home-tab" data-bs-toggle="tab"
                data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                aria-selected="true">Leader</button>
            <button class="nav-link tabs-dash" id="nav-profile-tab" data-bs-toggle="tab"
                data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                aria-selected="false">Member 1</button>
            <button class="nav-link tabs-dash" id="nav-contact-tab" data-bs-toggle="tab"
                data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact"
                aria-selected="false">Member 2</button>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        
        {{-- -----------------------------------------L E A D E R----------------------------------------- --}}
        <div class="tab-pane fade show active mt-4" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <form action={{ route('upload.leader') }} method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <!-- kiri -->
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Leader Name</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $leader->name }}" placeholder="Leader Name">
                        </div>
                        <div class="mb-3">
                            <label for="nim" class="form-label">Student ID Number</label>
                            <input type="text" class="form-control" id="nim" name="nim" value="{{ $leader->nim }}" placeholder="Student ID Number">
                        </div>
                        <div class="mb-3">
                            <label for="institusi" class="form-label">Institution</label>
                            <input type="text" class="form-control" id="institusi" name="institusi" value="{{ $leader->institusi }}" placeholder="Institution">
                        </div>
                        <div class="mb-3">
                            <label for="prov" class="form-label">Province</label>
                            <input type="text" class="form-control" id="prov" name="prov" value="{{ $leader->prov }}" placeholder="Province / State">
                        </div>
                        <div class="mb-3">
                            <label for="kota" class="form-label">City</label>
                            <input type="text" class="form-control" id="kota" name="kota" value="{{ $leader->kota }}" placeholder="City">
                        </div>
                        <div class="mb-3">
                            <label for="idline" class="form-label">Line ID</label>
                            <input type="text" class="form-control" id="idline" name="idline" value="{{ $leader->idline }}" placeholder="Line ID">
                        </div>
                    </div>
                    <!-- kanan -->
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $leader->email }}" placeholder="Email Address">
                        </div>
                        <div class="mb-3">
                            <label for="phone1" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="phone1" name="phone" value="{{ $leader->phone }}" placeholder="Phone Number">
                            
                            <div class="mt-2 d-flex">
                                <input class="form-check-input rounded-pill me-2 my-auto checkContainer" id="numberCek1" type="checkbox"
                                    value="">
                                <label class="form-check-label" for="numberCek1">
                                    My phone number is the same as whatsapp number
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="whatsapp1" class="form-label">Whatsapp</label>
                            <input type="text" class="form-control" id="whatsapp1" name="whatsapp" value="{{ $leader->whatsapp }}" placeholder="Whatsapp">
                        </div>
                        <div class="mb-3">
                            @if ( $status_ktm[0] > 1 )
                                <div class="alert alert-success">{{ $message_ktm[0] }}</div>
                            @elseif ( $status_ktm[0] )
                                <div class="alert alert-warning">{{ $message_ktm[0] }}</div>
                            @else
                                @if ( $message_ktm[0] )
                                    <div class="alert alert-danger">{{ $message_ktm[0] }}</div>
                                @endif
                                <label for="ktm" class="form-label">ID Card / Student ID Card</label>
                                <input type="file" class="form-control" id="ktm" name="ktm">
                                <small><p class="mb-0">File format: jpeg, jpg, png, pdf.</p></small>
                            @endif
                        </div>
                        <div>
                            @if ( $status_skma[0] > 1 )
                                <div class="alert alert-success">{{ $message_skma[0] }}</div>
                            @elseif ( $status_skma[0] )
                                <div class="alert alert-warning">{{ $message_skma[0] }}</div>
                            @else
                                @if ( $message_skma[0] )
                                    <div class="alert alert-danger">{{ $message_skma[0] }}</div>
                                @endif
                                <label for="skma" class="form-label">Certificate of Active Student</label>
                                <input type="file" class="form-control" id="skma" name="skma">
                                <small><p class="mb-0">File format: jpeg, jpg, png, pdf.</p></small>
                            @endif
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary px-5 py-2">Save</button>
            </form>
        </div>

        {{-- -----------------------------------------M E M B E R 1----------------------------------------- --}}
        <div class="tab-pane fade mt-4" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <form action={{ route('upload.amember') }} method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <!-- kiri -->
                        <div class="mb-3">
                            <label for="nama" class="form-label">Member 1 Name</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $amember->name }}" placeholder="Member Name">
                        </div>
                        <div class="mb-3">
                            <label for="nim" class="form-label">Student ID Number</label>
                            <input type="text" class="form-control" id="nim" name="nim" value="{{ $amember->nim }}" placeholder="Student ID Number">
                        </div>
                        <div class="mb-3">
                            <label for="institusi" class="form-label">Institution</label>
                            <input type="text" class="form-control" id="institusi" name="institusi" value="{{ $amember->institusi }}" placeholder="Institution">
                        </div>
                        <div class="mb-3">
                            <label for="prov" class="form-label">Province</label>
                            <input type="text" class="form-control" id="prov" name="prov" value="{{ $amember->prov }}" placeholder="Province / State">
                        </div>
                        <div class="mb-3">
                            <label for="kota" class="form-label">City</label>
                            <input type="text" class="form-control" id="kota" name="kota" value="{{ $amember->kota }}" placeholder="City">
                        </div>
                        <div class="mb-3">
                            <label for="idline" class="form-label">Line ID</label>
                            <input type="text" class="form-control" id="idline" name="idline" value="{{ $amember->idline }}" placeholder="Line ID">
                        </div>
                    </div>
                    <!-- kanan -->
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $amember->email }}" placeholder="Email Address">
                        </div>
                        <div class="mb-3">
                            <label for="phone2" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="phone2" name="phone" value="{{ $amember->phone }}" placeholder="Phone Number">
                            
                            <div class="mt-2 d-flex">
                                <input class="form-check-input rounded-pill me-2 my-auto checkContainer" id="numberCek2" type="checkbox"
                                    value="">
                                <label class="form-check-label" for="numberCek2">
                                    My phone number is the same as whatsapp number
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="whatsapp2" class="form-label">Whatsapp</label>
                            <input type="text" class="form-control" id="whatsapp2" name="whatsapp" value="{{ $amember->whatsapp }}" placeholder="Whatsapp">
                        </div>
                        <div class="mb-3">
                            @if ( $status_ktm[1] > 1 )
                                <div class="alert alert-success">{{ $message_ktm[1] }}</div>
                            @elseif ( $status_ktm[1] )
                                <div class="alert alert-warning">{{ $message_ktm[1] }}</div>
                            @else
                                @if ( $message_ktm[1] )
                                    <div class="alert alert-danger">{{ $message_ktm[1] }}</div>
                                @endif
                                <label for="ktm" class="form-label">ID Card / Student ID Card</label>
                                <input type="file" class="form-control" id="ktm" name="ktm">
                                <small><p class="mb-0">File format: jpeg, jpg, png, pdf.</p></small>
                            @endif
                        </div>
                        <div>
                            @if ( $status_skma[1] > 1 )
                                <div class="alert alert-success">{{ $message_skma[1] }}</div>
                            @elseif ( $status_skma[1] )
                                <div class="alert alert-warning">{{ $message_skma[1] }}</div>
                            @else
                                @if ( $message_skma[1] )
                                    <div class="alert alert-danger">{{ $message_skma[1] }}</div>
                                @endif
                                <label for="skma" class="form-label">Certificate of Active Student</label>
                                <input type="file" class="form-control" id="skma" name="skma">
                                <small><p class="mb-0">File format: jpeg, jpg, png, pdf.</p></small>
                            @endif
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary px-5 py-2">Save</button>
            </form>
        </div>

        {{-- -----------------------------------------M E M B E R 2----------------------------------------- --}}
        <div class="tab-pane fade mt-4" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            <form action={{ route('upload.bmember') }} method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <!-- kiri -->
                        <div class="mb-3">
                            <label for="nama" class="form-label">Member 2 Name</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $bmember->name }}" placeholder="Member Name">
                        </div>
                        <div class="mb-3">
                            <label for="nim" class="form-label">Student ID Number</label>
                            <input type="text" class="form-control" id="nim" name="nim" value="{{ $bmember->nim }}" placeholder="Student ID Number">
                        </div>
                        <div class="mb-3">
                            <label for="institusi" class="form-label">Institution</label>
                            <input type="text" class="form-control" id="institusi" name="institusi" value="{{ $bmember->institusi }}" placeholder="Institution">
                        </div>
                        <div class="mb-3">
                            <label for="prov" class="form-label">Province</label>
                            <input type="text" class="form-control" id="prov" name="prov" value="{{ $bmember->prov }}" placeholder="Province / State">
                        </div>
                        <div class="mb-3">
                            <label for="kota" class="form-label">City</label>
                            <input type="text" class="form-control" id="kota" name="kota" value="{{ $bmember->kota }}" placeholder="City">
                        </div>
                        <div class="mb-3">
                            <label for="idline" class="form-label">Line ID</label>
                            <input type="text" class="form-control" id="idline" name="idline" value="{{ $bmember->idline }}" placeholder="Line ID">
                        </div>
                    </div>
                    <!-- kanan -->
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $bmember->email }}" placeholder="Email Address">
                        </div>
                        <div class="mb-3">
                            <label for="phone3" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="phone3" name="phone" value="{{ $bmember->phone }}" placeholder="Phone Number">
                        
                            <div class="mt-2 d-flex">
                                <input class="form-check-input rounded-pill me-2 my-auto checkContainer" id="numberCek3" type="checkbox"
                                    value="">
                                <label class="form-check-label" for="numberCek3">
                                    My phone number is the same as whatsapp number
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="whatsapp3" class="form-label">Whatsapp</label>
                            <input type="text" class="form-control" id="whatsapp3" name="whatsapp" value="{{ $bmember->whatsapp }}" placeholder="Whatsapp">
                        </div>
                        <div class="mb-3">
                            @if ( $status_ktm[2] > 1 )
                                <div class="alert alert-success">{{ $message_ktm[2] }}</div>
                            @elseif ( $status_ktm[2] )
                                <div class="alert alert-warning">{{ $message_ktm[2] }}</div>
                            @else
                                @if ( $message_ktm[2] )
                                    <div class="alert alert-danger">{{ $message_ktm[2] }}</div>
                                @endif
                                <label for="ktm" class="form-label">ID Card / Student ID Card</label>
                                <input type="file" class="form-control" id="ktm" name="ktm">
                                <small><p class="mb-0">File format: jpeg, jpg, png, pdf.</p></small>
                            @endif
                        </div>
                        <div>
                            @if ( $status_skma[2] > 1 )
                                <div class="alert alert-success">{{ $message_skma[2] }}</div>
                            @elseif ( $status_skma[2] )
                                <div class="alert alert-warning">{{ $message_skma[2] }}</div>
                            @else
                                @if ( $message_skma[2] )
                                    <div class="alert alert-danger">{{ $message_skma[2] }}</div>
                                @endif
                                <label for="skma" class="form-label">Certificate of Active Student</label>
                                <input type="file" class="form-control" id="skma" name="skma">
                                <small><p class="mb-0">File format: jpeg, jpg, png, pdf.</p></small>
                            @endif
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary px-5 py-2">Save</button>
            </form>
        </div>

    </div>

{{----------------------------------------- Proposal Submission -----------------------------------------}}
    @if ($jenis_lomba == "HackToday")

    @else
    <h2 class="mt-5 pt-5 fw-bold mt-4 mb-3">Proposal Submission</h2>
    <div class="border p-3 rounded-3">
        <div class="row">
            @if ( $status_lomba )
                <div>
                    @if ( session()->has('success.prop') )
                        <div class="alert alert-success">{{ session()->get('success.prop') }}</div>
                    @endif
                    <div class="alert alert-success">{{ $message_lomba }}</div>
                </div>
            @else
                <div class="col-sm-12 col-md-6 col-lg-6">
                    @if ( session()->has('fail.prop') )
                        <div class="alert alert-danger">{{ session()->get('fail.prop') }}</div>
                    @endif
                    <form action="{{ route('upload.proposal') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="proposal" class="form-label">Proposal File</label>
                            @error('proposal') <small><p class="link-danger">{{ $message }}</p></small> @enderror
                            <input type="file" class="form-control" id="proposal" name="proposal">
                            <small><p class="mb-0">File format: pdf | Max Size: 25 MB</p></small>
                        </div>
                        <div><button type="submit" class="btn btn-primary px-5 py-2">Submit</button></div>
                    </form>
                </div>
            @endif
            <div class="col-sm-12 col-md-6 col-lg-6"></div>
        </div>
    </div>
    @endif


{{----------------------------------------- Contact Person -----------------------------------------}}
    <div class="mt-5">
        <div>Having a problem during filling the team's data?</div>
        <div>Contact the Admin : <a href="https://wa.me/+6289608703393" target="_blank">Akaasyah Nurfath (Whatsapp)</a></div>
    </div>


</main>
@endsection