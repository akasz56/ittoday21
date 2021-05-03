@extends('layouts.app')

@section('title')
    User Dashboard
@endsection

@section('content')
    <h1>Dashboard Page</h1>
    <h2>Hi {{ Auth::user()->name }}</h2>

    @if (session()->has('status'))
        <div>{{ session()->get('status') }}</div>
    @endif
    
    <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="proposal">Upload Proposal</label><br>
        <input type="file" name="proposal"><br>
        <button type="submit">Upload</button>
    </form>

    <h3>Anggota 1</h3>
    <div>Nama Anggota 1</div>
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
    <div>Nama Anggota 2</div>
    <div>G6419006599</div>
    <div>Bogor</div>
    <div>Laki-laki</div>
    <div>Universitas Dramaga</div>
    <div>FMIPA</div>
    <div>Ilmu Komputer</div>
    <div>admin@ittoday.id</div>
    <div>081281040422</div>
    <div>indo14nurfath</div>
@endsection