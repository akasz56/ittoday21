@extends('layouts.app')

@section('title')
    Ilkommunity | IT Today 2021
@endsection

@section('content')
<main class="bg-content">
    <section data-aos="fade-up" class="bg-blur-main event-main">



        <div class="py-5 event-title">
            <div class="ittsmall"></div>
            <h1 class="txt-heading1 text-center">Ilkommunity</h1>
            {{-- <div class="txt-subtitle">Tagline Acara</div> --}}
        </div>

        <div class="ittsection">
            <div class="ittthin"></div>
            <div class="itttri">
                <div class="ittsmall itt-top"></div>
                <div class="ittsmall itt-bottom"></div>
                <div class="ittsmallrect"></div>
            </div>
        </div>


        <div class="ilkommunity-list">
            
            <div class="d-flex ilkommunity-unit">
                <div class="info">
                    <p class="fw-bold">Preparing Career in Data Science World</p>
                    <p class="fw-bold fst-italic" style="color: gray;">Data Mining</p>
                    <p>Sabtu, 28 Agustus 2021</p>
                    {{-- <a href="#" class="btn btn-primary">Buy Ticket</a> --}}
                </div>
                <div class="d-flex justify-content-center align-items-center ilk-speakers">
                    <div class="fw-bold fst-italic">Speakers To Be Announced</div>
                    {{-- <div class="ilk-spk">
                        <div class="ilk-spk-img"><img src="/assets/images/speaker.jpg" alt="speaker"></div>
                        <p class="fw-bold">Nama Pembicara</p>
                        <p>Jabatan</p>
                    </div> --}}
                </div>
            </div>
            
            <div class="d-flex ilkommunity-unit">
                <div class="info">
                    <p class="fw-bold">Indonesia Synergizes to Go Overseas</p>
                    <p class="fw-bold fst-italic" style="color: gray;">Game Reality</p>
                    <p>Minggu, 29 Agustus 2021</p>
                    {{-- <a href="#" class="btn btn-primary">Buy Ticket</a> --}}
                </div>
                <div class="d-flex justify-content-center align-items-center ilk-speakers">
                    <div class="fw-bold fst-italic">Speakers To Be Announced</div>
                    {{-- <div class="ilk-spk">
                        <div class="ilk-spk-img"><img src="/assets/images/speaker.jpg" alt="speaker"></div>
                        <p class="fw-bold">Nama Pembicara</p>
                        <p>Jabatan</p>
                    </div> --}}
                </div>
            </div>
            
            <div class="ittsmall"></div>
            
            <div class="d-flex ilkommunity-unit">
                <div class="info">
                    <p class="fw-bold">To Be Announced</p>
                    <p class="fw-bold fst-italic" style="color: gray;">AgriUX</p>
                    <p>Sabtu, 4 September 2021</p>
                    {{-- <a href="#" class="btn btn-primary">Buy Ticket</a> --}}
                </div>
                <div class="d-flex justify-content-center align-items-center ilk-speakers">
                    <div class="fw-bold fst-italic">Speakers To Be Announced</div>
                    {{-- <div class="ilk-spk">
                        <div class="ilk-spk-img"><img src="/assets/images/speaker.jpg" alt="speaker"></div>
                        <p class="fw-bold">Nama Pembicara</p>
                        <p>Jabatan</p>
                    </div> --}}
                </div>
            </div>

            <div class="ittsmall ittoutr"></div>
            
            <div class="d-flex ilkommunity-unit">
                <div class="info">
                    <p class="fw-bold">After Hours Dev Talks</p>
                    <p class="fw-bold fst-italic" style="color: gray;">AFTER HOURS : DEVTALKS</p>
                    <p>Sabtu, 11 September 2021</p>
                    {{-- <a href="#" class="btn btn-primary">Buy Ticket</a> --}}
                </div>
                <div class="d-flex justify-content-center align-items-center ilk-speakers">
                    <div class="fw-bold fst-italic">Speakers To Be Announced</div>
                    {{-- <div class="ilk-spk">
                        <div class="ilk-spk-img"><img src="/assets/images/speaker.jpg" alt="speaker"></div>
                        <p class="fw-bold">Nama Pembicara</p>
                        <p>Jabatan</p>
                    </div> --}}
                </div>
            </div>

            <div class="ittthin"></div>

        </div>



    </section>
</main>
@endsection