@extends('layouts.app')

@section('title')
Workshop | IT Today 2021
@endsection

@section('content')
<main class="bg-content">
    <div class="container">
        <section data-aos="fade-up" class="bg-blur-main event-main">



            <div class="py-5 event-title">
                <div class="ittsmall"></div>
                <h1 class="txt-heading1 text-center">Workshop</h1>
                <div class="txt-subtitle">Design System Workshop</div>
            </div>



            <div class="speakers">
                <div class="event-1speaker">
                    <img class="d-block mb-3 img-fluid m-auto"
                        src="{{ asset('/assets/images/pembicara/Agil Cahyo Priyantono.png') }}" alt="speaker">
                    <h3 class="txt-heading3 text-center">Agil Cahyo Priyantono</h3>
                    <p class="txt-subtitle text-center">UI/UX Designer</p>
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
                    <div>Sunday, 5th September 2021</div>
                    <div>@ Online Video Conference</div>
                </div>
                <div class="d-flex flex-column flex-md-row">
                    <a class="btn btn-primary txt-caption w-100 mb-md-3"
                        href="https://loket.com/event/design-system-workshop-9ctu" target="_blank">Buy Ticket
                        (Loket.com)</a>
                    <a class="btn btn-primary txt-caption w-100 mb-md-3" href="{{ route('ticket.bundle') }}">Buy
                        Bundle</a>
                </div>
            </div>



            <div class="event-desc mx-4">
                <div class="d-flex justify-content-center" style="position: initial">
                    <div class="ittsmall itt-left"></div>
                    <div class="ittsmall itt-right"></div>
                </div>
                <div class="my-5">
                    <h1 class="txt-heading1">About Workshop</h1>
                    <div class="ittthin"></div>
                    <p class="mt-4">
                        Merupakan workshop yang akan diisi oleh komunitas AgriUX di Departemen Ilmu Komputer dengan
                        mengundang pembicara yang ahli dibidangnya. Workshop ini membahas tentang teknologi pada User
                        Experience dan Design. Seminar ini memungkinkan peserta melakukan interaksi aktif bersama
                        pembicara terkait topik-topik menarik mengenai IT khususnya pada bidang User Experience
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