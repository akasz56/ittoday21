@extends('layouts.app')

@section('title')
    International Seminar | IT Today 2021
@endsection

@section('content')
<main class="bg-content">
    <section data-aos="fade-up" class="bg-blur-main event-main">



        <div class="py-5 event-title">
            <div class="ittsmall"></div>
            <h1 class="txt-heading1 text-center">International Seminar</h1>
            <div class="txt-subtitle px-5">"The Synergy Between Technology and Agro-Maritime 5.0"</div>
        </div>



        <div style="height: 5vh;"></div>
        <h3 class="text-center px-5">Speakers To Be Announced</h3>
        <div style="height: 10vh;"></div>



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

        

        <div class="ittsection">
            <div class="ittthin"></div>
            <div class="itttri">
                <div class="ittsmall itt-top"></div>
                <div class="ittsmall itt-bottom"></div>
                <div class="ittsmallrect"></div>
            </div>
        </div>



        <div class="container event-actions">
            <div class="desc">
                <div>Saturday, September 18th 2021</div>
                <div>@ Video Conference Platform</div>
            </div>
            {{-- <a href="#" class="btn btn-primary txt-caption">Buy Ticket</a> --}}
        </div>



        <div class="event-desc">
            <div class="d-flex justify-content-center" style="position: relative">
                <div class="ittsmall itt-left"></div>
                <div class="ittsmall itt-right"></div>
            </div>
            <div class="my-5">
                <h1 class="txt-heading1">About International Webinar</h1>
                {{-- <div class="ittthin"></div> --}}
                <p class="mt-4">
                    An International Webinar attended by three notable professional speakers in their respective
                    fields. Discussing various interesting topics regarding the application of Information
                    Technology on Agro-Maritime concerns. Enables interaction among speakers and over 400 webinar
                    participants from around the world
                </p>
            </div>
            <div class="d-flex justify-content-end">
                <div class="ittlarge"></div>
            </div>
        </div>



    </section>
</main>
@endsection