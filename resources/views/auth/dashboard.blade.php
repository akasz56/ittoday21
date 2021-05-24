@extends('layouts.app')

@section('title')
    {{ $nama }} Dashboard
@endsection

@section('content')
    <h1>Dashboard Page</h1>
    <h2>Welcome, {{ $nama }}</h2>

    @if (session()->has('status'))
        <div>{{ session()->get('status') }}</div>
    @endif





    {{-- Payment Infos --}}
    
    @if ( $status_bayar )
        <hr>
        @if ( session()->has('success.trf') )
            <div class="alert alert-success">{{ session()->get('success.trf') }}</div>
        @endif
        <div>{{ $message_bayar }}</div>
        <div>{{ Auth::user()->file_bayar }}</div>
    @else
        <hr>
        <p>
            {{ $jenis_lomba }} Competition : IDR {{ number_format($harga_bayar) }},-<br>
            Team Unique Code : {{ $id }}<br>
            Total Fee : IDR {{ number_format($id + $harga_bayar) }},-
        </p>
        <h3>Transfer to :</h3>
        <p>
            Mandiri : 0888 888 888 A/N Lorem Ipsum<br>
            BTN : 0888 888 888 A/N Lorem Ipsum<br>
            BNI : 0888 888 888 A/N Lorem Ipsum<br>
        </p>
        {{-- form --}}
        <hr>
        @if ( session()->has('fail.trf') )
            <div class="alert alert-danger">{{ session()->get('fail.trf') }}</div>
        @endif
        <form action="{{ route('upload.trf') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h3>Upload Bukti Pembayaran</h3>
            <div>
                <input type="file" name="trf" required>
                <span>@error('trf'){{ $message }}@enderror</span>
            </div>
            <button type="submit">Upload</button>
        </form>
    @endif





    {{-- Biodata --}}
    <hr>
    <div style="display: flex">
        <div style="width: 100%;">
            <h3>Ketua</h3>
            <p>Nama Ketua :   {{ $leader->name }}</p>
            <p>NIM :          {{ $leader->nim }}</p>
            <p>Institusi :    {{ $leader->institusi }}</p>
            <p>Provinsi :     {{ $leader->prov }}</p>
            <p>Kota :         {{ $leader->kota }}</p>
            <p>Email :        {{ $leader->email }}</p>
            <p>Phone :        {{ $leader->phone }}</p>
            <p>Whatsapp :     {{ $leader->whatsapp }}</p>
            <p>IDLine :       {{ $leader->idline }}</p>
            <form action={{ route('upload.leader') }} method="POST" enctype="multipart/form-data">
                <div style="margin: 1em 0">
                    <label for="ktm">Student ID Card : </label><br>
                    <input type="file" name="ktm" id="ktm">
                </div>
                <div style="margin: 1em 0">
                    <label for="skma">
                        @if ( $jenis_lomba == "hack")
                            SKMA (Wajib)
                        @else
                            Certificate of Active Student (Optional)
                        @endif
                         : 
                    </label>
                    <input type="file" name="skma" id="skma">
                </div>
                <div><button type="submit">Upload</button></div>
            </form>
        </div>
        <div style="width: 100%;">
            <h3>Anggota 1</h3>
            <p>Nama Ketua :   {{ $amember->name }}</p>
            <p>NIM :          {{ $amember->nim }}</p>
            <p>Institusi :    {{ $amember->institusi }}</p>
            <p>Provinsi :     {{ $amember->prov }}</p>
            <p>Kota :         {{ $amember->kota }}</p>
            <p>Email :        {{ $amember->email }}</p>
            <p>Phone :        {{ $amember->phone }}</p>
            <p>Whatsapp :     {{ $amember->whatsapp }}</p>
            <p>IDLine :       {{ $amember->idline }}</p>
            <form action={{ route('upload.amember') }} method="POST" enctype="multipart/form-data">
                <div style="margin: 1em 0">
                    <label for="ktm">Student ID Card : </label><br>
                    <input type="file" name="ktm" id="ktm">
                </div>
                <div style="margin: 1em 0">
                    <label for="skma">
                        @if ( $jenis_lomba == "hack")
                            SKMA (Wajib)
                        @else
                            Certificate of Active Student (Optional)
                        @endif
                         : 
                    </label>
                    <input type="file" name="skma" id="skma">
                </div>
                <div><button type="submit">Upload</button></div>
            </form>
        </div>
        <div style="width: 100%;">
            <h3>Anggota 2</h3>
            <p>Nama Ketua :   {{ $bmember->name }}</p>
            <p>NIM :          {{ $bmember->nim }}</p>
            <p>Institusi :    {{ $bmember->institusi }}</p>
            <p>Provinsi :     {{ $bmember->prov }}</p>
            <p>Kota :         {{ $bmember->kota }}</p>
            <p>Email :        {{ $bmember->email }}</p>
            <p>Phone :        {{ $bmember->phone }}</p>
            <p>Whatsapp :     {{ $bmember->whatsapp }}</p>
            <p>IDLine :       {{ $bmember->idline }}</p>
            <form action={{ route('upload.bmember') }} method="POST" enctype="multipart/form-data">
                <div style="margin: 1em 0">
                    <label for="ktm">Student ID Card : </label><br>
                    <input type="file" name="ktm" id="ktm">
                </div>
                <div style="margin: 1em 0">
                    <label for="skma">
                        @if ( $jenis_lomba == "hack")
                            SKMA (Wajib)
                        @else
                            Certificate of Active Student (Optional)
                        @endif
                         : 
                    </label>
                    <input type="file" name="skma" id="skma">
                </div>
                <div><button type="submit">Upload</button></div>
            </form>
        </div>
    </div>





    {{-- Proposal --}}
    @if ( $status_lomba )
        <hr>
        @if ( session()->has('success.prop') )
            <div class="alert alert-success">{{ session()->get('success.prop') }}</div>
        @endif
        <div>{{ $message_lomba }}</div>
        <div>{{ Auth::user()->file_lomba }}</div>
    @else
        <hr>
        @if ( session()->has('fail.prop') )
            <div class="alert alert-danger">{{ session()->get('fail.prop') }}</div>
        @endif
        <form action="{{ route('upload.proposal') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <h3>Upload Proposal</h3>
                <input type="file" name="proposal" required>
                <span>@error('proposal'){{ $message }}@enderror</span>
            </div>
            <button type="submit">Upload</button>
        </form>
    @endif
@endsection