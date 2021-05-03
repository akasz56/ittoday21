@extends('layouts.app')

@section('title')
    Event - IT Today 2021
@endsection

@section('content')
<main class="bg-content">
    <section data-aos="fade-up" class="bg-blur-main">



        <div class="py-5 event-title">
            <h1 class="txt-heading1 text-center">Workshop</h1>
            <div class="txt-subtitle">Nama Acara</div>
        </div>



        {{-- <div class="speakers">
            <div class="event-1speaker">
                <img src="./assets/images/speaker.jpeg" alt="speaker">
                <h3 class="txt-heading3 text-center">Nama Pembicara</h3>
                <p class="txt-subtitle text-center">Jabatan</p>
            </div>
            <div class="event-1speaker">
                <img src="./assets/images/speaker.jpeg" alt="speaker">
                <h3 class="txt-heading3 text-center">Nama Pembicara</h3>
                <p class="txt-subtitle text-center">Jabatan</p>
            </div>
            <div class="event-1speaker">
                <img src="./assets/images/speaker.jpeg" alt="speaker">
                <h3 class="txt-heading3 text-center">Nama Pembicara</h3>
                <p class="txt-subtitle text-center">Jabatan</p>
            </div>
        </div> --}}


        
        <div style="height: 20vh;"></div>
        <div class="container event-actions">
            <div class="desc">
                <!-- Sunday, March 28th 2021 <br> 09.00 - 12.00 WIB <br> @ Zoom Meetings -->
                To Be Announced
            </div>
            <!-- <a href="#" class="btn btn-primary txt-caption">Buy Ticket</a> -->
        </div>
        <div style="height: 20vh;"></div>

        

        <div class="event-desc">
            <div class="d-flex justify-content-center">
                <div class="ittsmall ittbox-left"></div>
                <div class="ittsmall ittbox-right"></div>
            </div>
            <div class="my-5">
                <h1 class="txt-heading1">About Workshop</h1>
                <P class="mt-4">
                    Merupakan Workshop sebagai sarana pelatihan dalam bidang IT.
                    Memungkinkan peserta berinteraksi kepada pemateri terkait topik Workshop selama kegiatan berlangsung.
                    Kegiatan ini memberikan pelatihan singkat dengan estimasi 50 peserta.
                </P>
            </div>
            <div class="d-flex justify-content-end">
                <div class="ittlarge"></div>
            </div>
        </div>

        

    </section>
</main>
@endsection