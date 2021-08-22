@extends('layouts.app')

@section('title')
National Seminar | IT Today 2021
@endsection

@section('content')
<main class="bg-content">
    <div class="container">
        <section data-aos="fade-up" class="bg-blur-main event-main">



            <div class="py-5 event-title">
                <div class="ittsmall"></div>
                <h1 class="txt-heading1 text-center">National Seminar</h1>
                <div class="txt-subtitle px-5">"The Synergy Between Technology and Agro-Maritime 5.0"</div>
            </div>
            <div class="speakers">
                <div class="event-1speaker">
                    <img class="d-block mb-3 img-fluid m-auto"
                        src="{{ asset('/assets/images/pembicara/Irman Hermadi.png') }}" alt="Irman Hermadi">
                    <h3 class="txt-heading3 text-center">Irman Hermadi</h3>
                    <p class="txt-subtitle text-center">Computer Science Lecturer at IPB University</p>
                </div>
                <div class="event-1speaker">
                    <img class="d-block mb-3 img-fluid m-auto"
                        src="{{ asset('/assets/images/pembicara/Walesa Danto.png') }}" alt="Walesa Danto">
                    <h3 class="txt-heading3 text-center">Walesa Danto</h3>
                    <p class="txt-subtitle text-center">Head of Product at Aruna</p>
                </div>
                <div class="event-1speaker">
                    <img class="d-block mb-3 img-fluid m-auto"
                        src="{{ asset('/assets/images/pembicara/Manda Marcella.png') }}" alt="Manda Marcella">
                    <h3 class="txt-heading3 text-center">Manda Marcella</h3>
                    <p class="txt-subtitle text-center">Product Analytics Lead at Happy Fresh</p>
                </div>
            </div>
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
                    <div>Saturday, 18th September 2021</div>
                    <div>@ Online Video Conference</div>
                </div>
                <div class="d-flex flex-column flex-md-row">
                    <a class="btn btn-primary txt-caption w-100 mb-md-3"
                        href="https://loket.com/event/ittoday-national-seminar" target="_blank">Buy
                        Ticket (Loket.com)</a>
                    <a class="btn btn-primary txt-caption w-100 mb-md-3" href="{{ route('ticket.bundle') }}">Buy
                        Bundle</a>
                </div>
            </div>



            <div class="event-desc mx-4">
                <div class="d-flex justify-content-center" style="position: relative">
                    <div class="ittsmall itt-left"></div>
                    <div class="ittsmall itt-right"></div>
                </div>
                <div class="my-5">
                    <h1 class="txt-heading1">About National Webinar</h1>
                    <div class="ittthin"></div>
                    <p class="mt-4">
                        A National Webinar attended by three notable professional speakers in their respective
                        fields. Discussing various interesting topics regarding the application of Information
                        Technology on Agro-Maritime concerns. Enables interaction among speakers and up to 300 webinar
                        participants from any kind of background
                    </p>
                </div>
                <div class="d-flex justify-content-end">
                    <div class="ittlarge"></div>
                </div>
            </div>


        </section>
    </div>
</main>
@endsection