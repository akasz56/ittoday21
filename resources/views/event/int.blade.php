@extends('layouts.app')

@section('title')
    Event - IT Today 2021
@endsection

@section('content')
<main class="bg-content">
    <section data-aos="fade-up" class="bg-blur-main">



        <div class="py-5 event-title">
            <h1 class="txt-heading1 text-center">International Webinar</h1>
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
            <div class="d-flex justify-content-center" style="position: initial">
                <div class="ittsmall itt-left"></div>
                <div class="ittsmall itt-right"></div>
            </div>
            <div class="my-5">
                <h1 class="txt-heading1">About International Webinar</h1>
                <P class="mt-4">
                    Merupakan sebuah seminar bertaraf internasional yang terdiri dari tiga sesi dengan tiga pembicara ahli dalam bidangnya.
                    Membahas berbagai topik menarik terkait sinergitas antara IT dan agro-maritim. Memungkinkan interaksi antara pembicara
                    dan peserta seminar dengan estimasi peserta yaitu 400 peserta, baik dalam negeri maupun mancanegara.
                </P>
            </div>
            <div class="d-flex justify-content-end">
                <div class="ittlarge"></div>
            </div>
        </div>

        

    </section>
</main>
@endsection