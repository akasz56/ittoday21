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
    @if ( session()->has('success.category') )
    <div class="alert alert-success">{{ session()->get('success.category') }}</div>
    @endif
    @if ( session()->has('fail.category') )
    <div class="alert alert-danger">{{ session()->get('fail.category') }}</div>
    @endif

    {{----------------------------------------- Contacts -----------------------------------------}}
    @if ($jenis_lomba == "HackToday")
    <h2 class="mt-5 fw-bold">Hack Today Contacts</h2>
    <p style="line-height: 1em;">Rizal :
        <a href="https://wa.me/+6289644417286" target="_blank">WhatsApp</a>
    </p>
    <p style="line-height: 1em;">Yosar :
        <a href="https://wa.me/+62895342744068" target="_blank">WhatsApp</a>
    </p>
    <p style="line-height: 1em;">Patar :
        <a href="https://t.me/patarisac" target="_blank">Telegram</a>
    </p>

    @elseif ($jenis_lomba == "UXToday")
    <h2 class="mt-5 fw-bold">UX Today Contacts</h2>
    <p style="line-height: 1em;">Amelia :
        <a href="https://wa.me/+6289620766791" target="_blank">WhatsApp</a> |
        <a href="https://line.me/ti/p/~amelia16hernawan" target="_blank">Line ID</a>
    </p>
    <p style="line-height: 1em;">Zulfa :
        <a href="https://wa.me/+6287867008071" target="_blank">WhatsApp</a> |
        <a href="https://line.me/ti/p/~zulfameilida" target="_blank">Line ID</a>
    </p>

    <p style="line-height: 1em;">Ahmed :
        <a href="https://wa.me/+6282213666601" target="_blank">WhatsApp</a>
    </p>

    @else
    <h2 class="mt-5 fw-bold">IT Business Competition Contacts</h2>
    <p style="line-height: 1em;">Abdul Hakim :
        <a href="https://wa.me/+6285884621204" target="_blank">WhatsApp</a>
    </p>
    <p style="line-height: 1em;">Aulia Rochman :
        <a href="https://wa.me/+6289662459376" target="_blank">WhatsApp</a>
    </p>
    <p style="line-height: 1em;">Rafli Aditya :
        <a href="https://wa.me/+628970162345" target="_blank">WhatsApp</a>
    </p>
    @endif

    {{----------------------------------------- Proposal / Category -----------------------------------------}}
    @if ($jenis_lomba == "HackToday")
    @if (!$status_lomba)
    <h2 class="mt-5 pt-5 fw-bold mt-4">Team Category</h2>
    <div class="border p-3 rounded-3">
        <div class="col-md-6">
            <form action="{{ route('htcategory') }}" method="POST">
                @csrf

                @if ( session()->has('fail') )
                <div class="alert alert-danger">{{ session()->get('fail') }}</div>
                @endif

                <input type="hidden" name="userid" value="{{ $id }}" />
                @error('category')<div class="alert alert-danger">{{ $message }}</div>@enderror
                <label for="category" class="form-label">Please confirm HackToday Category you wish to join</label>
                <select class="form-select" aria-label="Default select example" id="category" name="category">
                    <option value="" hidden>Choose one</option>
                    <option value="1">Undergraduate Students</option>
                    <option value="2">High School Students</option>
                    <option value="3">General Public</option>
                </select>
                <button type="submit" class="btn btn-primary px-5 py-2 mt-3">Confirm</button>
            </form>
        </div>
    </div>
    @endif

    @else
    <h2 class="mt-5 pt-5 fw-bold mt-4">Proposal Submission</h2>
    <div class="border p-3 rounded-3">
        <div class="row">
            <div class="alert alert-info">Make sure to include your video link in the proposal before submitting</div>
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
                        @error('proposal')
                        <small>
                            <p class="link-danger">{{ $message }}</p>
                        </small>
                        @enderror
                        <input type="file" class="form-control" id="proposal" name="proposal">
                        <small>
                            <p class="mb-0">File format: pdf | Max Size: 10 MB</p>
                        </small>
                    </div>
                    <div><button type="submit" class="btn btn-primary px-5 py-2">Submit</button></div>
                </form>
            </div>
            <div class="my-3">
                You can use this template in the beginning of your video:
            </div>
            <div class=" col-sm-12 col-md-6 col-lg-6">
                @if ($jenis_lomba == "UXToday")
                <a class="btn btn-primary" href="https://ipb.link/templateopening-videoux">UXToday Video Intro
                    Template</a>
                @else
                <a class="btn btn-primary" href="https://ipb.link/templateopening-videobistik">IT Business Video Intro
                    Template</a>
                @endif
            </div>
            @endif
        </div>
    </div>
    @endif

    {{----------------------------------------- Team Biodata -----------------------------------------}}
    <h2 class="mt-5 pt-5 fw-bold mt-4">Team Biodata</h2>
    <nav>
        <div class="nav nav-tabs tabs-dash" id="nav-tab" role="tablist">
            <button class="nav-link tabs-dash active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                type="button" role="tab" aria-controls="nav-home" aria-selected="true">Leader</button>
            <button class="nav-link tabs-dash" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Member 1</button>
            <button class="nav-link tabs-dash" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Member 2</button>
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
                            <label for="nama" class="form-label reqform">Leader Name</label>
                            <input type="text" class="form-control" id="nama" name="nama"
                                <?php if($leader->name) echo 'disabled' ?> value="{{ $leader->name }}"
                                placeholder="Leader Name">
                        </div>
                        <div class="mb-3">
                            @if ( $jenis_lomba == "HackToday" )
                            <label for="nim" class="form-label">Student ID Number</label>
                            @else
                            <label for="nim" class="form-label reqform">Student ID Number</label>
                            @endif
                            <input type="text" class="form-control" id="nim" name="nim"
                                <?php if($leader->nim) echo 'disabled' ?> value="{{ $leader->nim }}"
                                placeholder="Student ID Number">
                        </div>
                        <div class="mb-3">
                            <label for="institusi" class="form-label reqform">Institution</label>
                            <input type="text" class="form-control" id="institusi" name="institusi"
                                <?php if($leader->institusi) echo 'disabled' ?> value="{{ $leader->institusi }}"
                                placeholder="Institution">
                        </div>
                        <div class="mb-3">
                            <label for="prov" class="form-label">Province</label>
                            <input type="text" class="form-control" id="prov" name="prov"
                                <?php if($leader->prov) echo 'disabled' ?> value="{{ $leader->prov }}"
                                placeholder="Province / State">
                        </div>
                        <div class="mb-3">
                            <label for="kota" class="form-label">City</label>
                            <input type="text" class="form-control" id="kota" name="kota"
                                <?php if($leader->kota) echo 'disabled' ?> value="{{ $leader->kota }}"
                                placeholder="City">
                        </div>
                        <div class="mb-3">
                            <label for="idline" class="form-label">Line ID</label>
                            <input type="text" class="form-control" id="idline" name="idline"
                                <?php if($leader->idline) echo 'disabled' ?> value="{{ $leader->idline }}"
                                placeholder="Line ID">
                        </div>
                    </div>
                    <!-- kanan -->
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="mb-3">
                            <label for="email" class="form-label reqform">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email"
                                <?php if($leader->email) echo 'disabled' ?> value="{{ $leader->email }}"
                                placeholder="Email Address">
                        </div>
                        <div class="mb-3">
                            <label for="phone1" class="form-label reqform">Phone Number</label>
                            <input type="text" class="form-control" id="phone1" name="phone"
                                <?php if($leader->phone) echo 'disabled' ?> value="{{ $leader->phone }}"
                                placeholder="Phone Number">

                            <div class="mt-2 d-flex">
                                <input class="form-check-input rounded-pill me-2 my-auto checkContainer" id="numberCek1"
                                    type="checkbox" value="">
                                <label class="form-check-label" for="numberCek1">
                                    My phone number is the same as whatsapp number
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="whatsapp1" class="form-label">Whatsapp</label>
                            <input type="text" class="form-control" id="whatsapp1" name="whatsapp"
                                <?php if($leader->whatsapp) echo 'disabled' ?> value="{{ $leader->whatsapp }}"
                                placeholder="Whatsapp">
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
                            <label for="ktm" class="form-label reqform">ID Card / Student ID Card (Kartu Tanda
                                Mahasiswa
                                / Kartu Tanda Penduduk)</label>
                            <input type="file" class="form-control" id="ktm" name="ktm">
                            <small>
                                <p class="mb-0">File format: jpeg, jpg, png, pdf.</p>
                            </small>
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
                            @if ( $jenis_lomba == "HackToday" )
                            <label for="skma" class="form-label reqform">Surat Keterangan Mahasiswa Aktif / Siswa
                                Aktif</label>
                            <input type="file" class="form-control" id="skma" name="skma">
                            <small>
                                <p class="mb-0">File format: jpeg, jpg, png, pdf.</p>
                            </small>
                            <small>
                                <p class="mb-0">Wajib diisi untuk peserta Hacktoday yang mengikuti kategori
                                    Mahasiswa</p>
                            </small>
                            @else
                            <label for="skma" class="form-label">Certificate of Active Student (Surat Keterangan
                                Mahasiswa Aktif)</label>
                            <input type="file" class="form-control" id="skma" name="skma">
                            <small>
                                <p class="mb-0">File format: jpeg, jpg, png, pdf.</p>
                            </small>
                            @endif
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
                            <label for="nama" class="form-label reqform">Member 1 Name</label>
                            <input type="text" class="form-control" id="nama" name="nama"
                                <?php if ($amember->name) echo 'disabled' ?> value="{{ $amember->name }}"
                                placeholder="Member Name">
                        </div>
                        <div class="mb-3">
                            @if ( $jenis_lomba == "HackToday" )
                            <label for="nim" class="form-label">Student ID Number</label>
                            @else
                            <label for="nim" class="form-label reqform">Student ID Number</label>
                            @endif
                            <input type="text" class="form-control" id="nim" name="nim"
                                <?php if ($amember->nim) echo 'disabled' ?> value="{{ $amember->nim }}"
                                placeholder="Student ID Number">
                        </div>
                        <div class="mb-3">
                            <label for="institusi" class="form-label reqform">Institution</label>
                            <input type="text" class="form-control" id="institusi" name="institusi"
                                <?php if ($amember->institusi) echo 'disabled' ?> value="{{ $amember->institusi }}"
                                placeholder="Institution">
                        </div>
                        <div class="mb-3">
                            <label for="prov" class="form-label">Province</label>
                            <input type="text" class="form-control" id="prov" name="prov"
                                <?php if ($amember->prov) echo 'disabled' ?> value="{{ $amember->prov }}"
                                placeholder="Province / State">
                        </div>
                        <div class="mb-3">
                            <label for="kota" class="form-label">City</label>
                            <input type="text" class="form-control" id="kota" name="kota"
                                <?php if ($amember->kota) echo 'disabled' ?> value="{{ $amember->kota }}"
                                placeholder="City">
                        </div>
                        <div class="mb-3">
                            <label for="idline" class="form-label">Line ID</label>
                            <input type="text" class="form-control" id="idline" name="idline"
                                <?php if ($amember->idline) echo 'disabled' ?> value="{{ $amember->idline }}"
                                placeholder="Line ID">
                        </div>
                    </div>
                    <!-- kanan -->
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="mb-3">
                            <label for="email" class="form-label reqform">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email"
                                <?php if ($amember->email) echo 'disabled' ?> value="{{ $amember->email }}"
                                placeholder="Email Address">
                        </div>
                        <div class="mb-3">
                            <label for="phone2" class="form-label reqform">Phone Number</label>
                            <input type="text" class="form-control" id="phone2" name="phone"
                                <?php if ($amember->phone) echo 'disabled' ?> value="{{ $amember->phone }}"
                                placeholder="Phone Number">

                            <div class="mt-2 d-flex">
                                <input class="form-check-input rounded-pill me-2 my-auto checkContainer" id="numberCek2"
                                    type="checkbox" value="">
                                <label class="form-check-label" for="numberCek2">
                                    My phone number is the same as whatsapp number
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="whatsapp2" class="form-label">Whatsapp</label>
                            <input type="text" class="form-control" id="whatsapp2" name="whatsapp"
                                <?php if ($amember->whatsapp) echo 'disabled' ?> value="{{ $amember->whatsapp }}"
                                placeholder="Whatsapp">
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
                            <label for="ktm" class="form-label reqform">ID Card / Student ID Card (Kartu Tanda
                                Mahasiswa
                                / Kartu Tanda Penduduk)</label>
                            <input type="file" class="form-control" id="ktm" name="ktm">
                            <small>
                                <p class="mb-0">File format: jpeg, jpg, png, pdf.</p>
                            </small>
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
                            @if ( $jenis_lomba == "HackToday" )
                            <label for="skma" class="form-label reqform">Surat Keterangan Mahasiswa Aktif / Siswa
                                Aktif</label>
                            <input type="file" class="form-control" id="skma" name="skma">
                            <small>
                                <p class="mb-0">File format: jpeg, jpg, png, pdf.</p>
                            </small>
                            <small>
                                <p class="mb-0">Wajib diisi untuk peserta Hacktoday yang mengikuti kategori
                                    Mahasiswa</p>
                            </small>
                            @else
                            <label for="skma" class="form-label">Certificate of Active Student (Surat Keterangan
                                Mahasiswa Aktif)</label>
                            <input type="file" class="form-control" id="skma" name="skma">
                            <small>
                                <p class="mb-0">File format: jpeg, jpg, png, pdf.</p>
                            </small>
                            @endif
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
                            <label for="nama" class="form-label reqform">Member 2 Name</label>
                            <input type="text" class="form-control" id="nama" name="nama"
                                <?php if ($bmember->name) echo 'disabled' ?> value="{{ $bmember->name }}"
                                placeholder="Member Name">
                        </div>
                        <div class="mb-3">
                            @if ( $jenis_lomba == "HackToday" )
                            <label for="nim" class="form-label">Student ID Number</label>
                            @else
                            <label for="nim" class="form-label reqform">Student ID Number</label>
                            @endif
                            <input type="text" class="form-control" id="nim" name="nim"
                                <?php if ($bmember->nim) echo 'disabled' ?> value="{{ $bmember->nim }}"
                                placeholder="Student ID Number">
                        </div>
                        <div class="mb-3">
                            <label for="institusi" class="form-label reqform">Institution</label>
                            <input type="text" class="form-control" id="institusi" name="institusi"
                                <?php if ($bmember->institusi) echo 'disabled' ?> value="{{ $bmember->institusi }}"
                                placeholder="Institution">
                        </div>
                        <div class="mb-3">
                            <label for="prov" class="form-label">Province</label>
                            <input type="text" class="form-control" id="prov" name="prov"
                                <?php if ($bmember->prov) echo 'disabled' ?> value="{{ $bmember->prov }}"
                                placeholder="Province / State">
                        </div>
                        <div class="mb-3">
                            <label for="kota" class="form-label">City</label>
                            <input type="text" class="form-control" id="kota" name="kota"
                                <?php if ($bmember->kota) echo 'disabled' ?> value="{{ $bmember->kota }}"
                                placeholder="City">
                        </div>
                        <div class="mb-3">
                            <label for="idline" class="form-label">Line ID</label>
                            <input type="text" class="form-control" id="idline" name="idline"
                                <?php if ($bmember->idline) echo 'disabled' ?> value="{{ $bmember->idline }}"
                                placeholder="Line ID">
                        </div>
                    </div>
                    <!-- kanan -->
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="mb-3">
                            <label for="email" class="form-label reqform">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email"
                                <?php if ($bmember->email) echo 'disabled' ?> value="{{ $bmember->email }}"
                                placeholder="Email Address">
                        </div>
                        <div class="mb-3">
                            <label for="phone3" class="form-label reqform">Phone Number</label>
                            <input type="text" class="form-control" id="phone3" name="phone"
                                <?php if ($bmember->phone) echo 'disabled' ?> value="{{ $bmember->phone }}"
                                placeholder="Phone Number">

                            <div class="mt-2 d-flex">
                                <input class="form-check-input rounded-pill me-2 my-auto checkContainer" id="numberCek3"
                                    type="checkbox" value="">
                                <label class="form-check-label" for="numberCek3">
                                    My phone number is the same as whatsapp number
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="whatsapp3" class="form-label">Whatsapp</label>
                            <input type="text" class="form-control" id="whatsapp3" name="whatsapp"
                                <?php if ($bmember->whatsapp) echo 'disabled' ?> value="{{ $bmember->whatsapp }}"
                                placeholder="Whatsapp">
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
                            <label for="ktm" class="form-label reqform">ID Card / Student ID Card (Kartu Tanda
                                Mahasiswa
                                / Kartu Tanda Penduduk)</label>
                            <input type="file" class="form-control" id="ktm" name="ktm">
                            <small>
                                <p class="mb-0">File format: jpeg, jpg, png, pdf.</p>
                            </small>
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
                            @if ( $jenis_lomba == "HackToday" )
                            <label for="skma" class="form-label reqform">Surat Keterangan Mahasiswa Aktif / Siswa
                                Aktif</label>
                            <input type="file" class="form-control" id="skma" name="skma">
                            <small>
                                <p class="mb-0">File format: jpeg, jpg, png, pdf.</p>
                            </small>
                            <small>
                                <p class="mb-0">Wajib diisi untuk peserta Hacktoday yang mengikuti kategori
                                    Mahasiswa</p>
                            </small>
                            @else
                            <label for="skma" class="form-label">Certificate of Active Student (Surat Keterangan
                                Mahasiswa Aktif)</label>
                            <input type="file" class="form-control" id="skma" name="skma">
                            <small>
                                <p class="mb-0">File format: jpeg, jpg, png, pdf.</p>
                            </small>
                            @endif
                            @endif
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary px-5 py-2">Save</button>
            </form>
        </div>

    </div>

    {{----------------------------------------- Contact Person -----------------------------------------}}
    <div class="mt-5">
        <div>Having a problem during filling the team's data?</div>
        <div>Contact the Admin : <a href="https://wa.me/+6289608703393" target="_blank">Akaasyah Nurfath
                (Whatsapp)</a>
        </div>
    </div>


</main>
@endsection