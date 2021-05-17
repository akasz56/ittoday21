@extends('layouts.app')

@section('title')
    {{ Auth::user()->name }} Dashboard
@endsection

@section('content')
    <h1>Dashboard Page</h1>
    <h2>Welcome, {{ Auth::user()->name }}</h2>

    @if (session()->has('status'))
        <div>{{ session()->get('status') }}</div>
    @endif


    <hr>
    {{-- Payment Infos --}}
    Daftar di Batch keberapa<br>
    Bayarnya berapa<br>
    {{-- Batch keberapa + no id --}}
    Nama Rekening<br>
    Nomor Rekening<br>
    
    
    
    <hr>
    {{-- Payment --}}
    <form action="
    {{-- {{ route('upload.trf') }} --}}
    " method="POST" enctype="multipart/form-data">
        @csrf
        <h3>Upload Bukti Pembayaran</h3>
        <div>
            <input type="file" name="trf">
        </div>
        <button type="submit">Upload</button>
    </form>
    
    
    
    <hr>
    <h3>{{ Auth::user()->jenis_lomba }}</h3>

    {{-- Biodata --}}
    <h3>Ketua</h3>
    <div>Nama Ketua : {{ Auth::user()->leader->name }}</div>
    <div>G64190065</div>
    <div>Bogor</div>
    <div>Laki-laki</div>
    <div>IPB University</div>
    <div>FMIPA</div>
    <div>Ilmu Komputer</div>
    <div>indo14nurfath@apps.ipb.ac.id</div>
    <div>089608703393</div>
    <div>indo14id</div>

    <h3>Anggota 1</h3>
    <div>Nama Anggota 1 : {{ Auth::user()->amember->name }}</div>
    <div>G64190065</div>
    <div>Bogor</div>
    <div>Laki-laki</div>
    <div>IPB University</div>
    <div>FMIPA</div>
    <div>Ilmu Komputer</div>
    <div>indo14nurfath@apps.ipb.ac.id</div>
    <div>089608703393</div>
    <div>indo14id</div>
    
    <h3>Anggota 2</h3>
    <div>Nama Anggota 2 : {{ Auth::user()->bmember->name }}</div>
    <div>G6419006599</div>
    <div>Bogor</div>
    <div>Laki-laki</div>
    <div>Universitas Dramaga</div>
    <div>FMIPA</div>
    <div>Ilmu Komputer</div>
    <div>admin@ittoday.id</div>
    <div>081281040422</div>
    <div>indo14nurfath</div>
    
    
    
    <hr>
    {{-- Proposal --}}
    <form action="
    {{-- {{ route('upload.proposal') }} --}}
    " method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="proposal">Upload Proposal</label>
            <input type="file" name="proposal">
        </div>
        <button type="submit">Upload</button>
    </form>
@endsection