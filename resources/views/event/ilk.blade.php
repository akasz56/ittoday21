@extends('layouts.app')

@section('title')
Ilkommunity | IT Today 2021
@endsection

@section('content')
<main class="bg-content">
    <div class="container">
        <section data-aos="fade-up" class="bg-blur-main event-main">



            <div class="py-5 event-title">
                <div class="ittsmall"></div>
                <h1 class="txt-heading1 text-center">Ilkommunity</h1>
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
                    <div class="info m-auto">
                        <p class="fw-bold">Preparing Career in Data Science World</p>
                        <p class="fw-bold fst-italic" style="color: gray;">Data Mining</p>
                        <p>Sabtu, 28 Agustus 2021</p>
                        {{-- <a href="{{ route('ticket.bundle') }}" class="btn btn-primary">Buy Bundle</a>
                        <a href="https://loket.com/event/ilkommunity-webinar-data-mining_4UU31" class="btn btn-primary"
                            target="_blank">Loket.com</a> --}}
                    </div>
                    <div class="d-flex justify-content-center align-items-center ilk-speakers">
                        <div class="speaker-container">
                            <div class="ilk-spk">
                                <div class="ilk-spk-img img-fluid">
                                    <img src="{{ asset('/assets/images/pembicara/Annisa Nurul Azhar.png') }}"
                                        alt="Annisa Nurul Azhar" class="d-block m-auto">
                                </div>
                                <p class="fw-bold text-center">Annisa Nurul Azhar</p>
                                <p class="text-center">NLP Engineer at prosa.ai</p>
                            </div>
                            <div class="ilk-spk">
                                <div class="ilk-spk-img img-fluid">
                                    <img src="{{ asset('/assets/images/pembicara/Wira Dharma Kencana Putra.png') }}"
                                        alt="Wira Dharma Kencana Putra" class="d-block m-auto">
                                </div>
                                <p class="fw-bold text-center">Wira Dharma Kencana Putra</p>
                                <p class="text-center">Machine Learning Instructor</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex ilkommunity-unit">
                    <div class="info m-auto">
                        <p class="fw-bold">Indonesia Synergizes to Go Overseas</p>
                        <p class="fw-bold fst-italic" style="color: gray;">Game Reality</p>
                        <p>Minggu, 29 Agustus 2021</p>
                        {{-- <a href="{{ route('ticket.bundle') }}" class="btn btn-primary">Buy Bundle</a>
                        <a href="https://loket.com/event/ilkommunity-webinar-game-reality_4UU33" class="btn btn-primary"
                            target="_blank">Loket.com</a> --}}
                    </div>
                    <div class="d-flex justify-content-center align-items-center ilk-speakers">
                        <div class="speaker-container">
                            <div class="ilk-spk">
                                <div class="ilk-spk-img img-fluid m-auto">
                                    <img src="{{ asset('/assets/images/pembicara/Dio Mahesa.png') }}" alt="Dio Mahesa"
                                        class="d-block m-auto">
                                </div>
                                <p class="fw-bold text-center">Dio Mahesa</p>
                                <p class="text-center">Senior game Artist at Toge Productions</p>
                            </div>
                            <div class="ilk-spk">
                                <div class="ilk-spk-img img-fluid">
                                    <img src="{{ asset('/assets/images/pembicara/Mohammad Fahmi.png') }}"
                                        alt="Mohammad Fahmi" class="d-block m-auto">
                                </div>
                                <p class="fw-bold text-center">Mohammad Fahmi</p>
                                <p class="text-center">Indie Game Developer</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ittsmall"></div>

                <div class="d-flex ilkommunity-unit">
                    <div class="info m-auto">
                        <p class="fw-bold text-center text-md-start">Interaksi Manusia Komputer Post Pandemic di Dunia Kerja</p>
                        <p class="fw-bold fst-italic" style="color: gray;">AgriUX</p>
                        <p>Sabtu, 4 September 2021</p>
                        {{-- <a href="{{ route('ticket.bundle') }}" class="btn btn-primary">Buy Bundle</a>
                        <a href="https://loket.com/event/ilkommunity-webinar-agriux_4UU34" class="btn btn-primary"
                            target="_blank">Loket.com</a> --}}
                    </div>
                    <div class="d-flex justify-content-center align-items-center ilk-speakers">
                        <div class="speaker-container">
                            <div class="ilk-spk">
                                <div class="ilk-spk-img img-fluid m-auto">
                                    <img src="{{ asset('/assets/images/pembicara/Farhad Alaydrus.png') }}"
                                        alt="Farhad Alaydrus" class="d-block m-auto">
                                </div>
                                <p class="fw-bold text-center">Farhad Alaydrus</p>
                                <p class="text-center">AVP, UI/UX Lead at Bank Commonwealth</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ittsmall ittoutr"></div>

                <div class="d-flex ilkommunity-unit">
                    <div class="info m-auto">
                        <p class="fw-bold">Progressive Web Apps, A New Era of Applications</p>
                        <p class="fw-bold fst-italic" style="color: gray;">After Hours Dev Talks</p>
                        <p>Sabtu, 11 September 2021</p>
                        {{-- <a href="{{ route('ticket.bundle') }}" class="btn btn-primary">Buy Bundle</a>
                        <a href="https://loket.com/event/ilkommunity-webinar-dev-talks_4UU39" class="btn btn-primary"
                            target="_blank">Loket.com</a> --}}
                    </div>
                    <div class="d-flex justify-content-center align-items-center ilk-speakers">
                        <div class="speaker-container">
                            <div class="ilk-spk">
                                <div class="ilk-spk-img img-fluid">
                                    <img src="{{ asset('/assets/images/pembicara/Muhammad Nasrurrohman.png') }}"
                                        alt="Muhammad Nasrurrohman" class="d-block m-auto">
                                </div>
                                <p class="fw-bold text-center">Muhammad Nasrurrohman</p>
                                <p class="text-center">Tech Advisor at Kemendikbud Ristek</p>
                            </div>
                            <div class="ilk-spk">
                                <div class="ilk-spk-img img-fluid m-auto">
                                    <img src="{{ asset('/assets/images/pembicara/Rahmanda Wibowo.png') }}"
                                        alt="Rahmanda Wibowo" class="d-block m-auto">
                                </div>
                                <p class="fw-bold text-center">Rahmanda Wibowo</p>
                                <p class="text-center">Tech Consultant di Telkom Indonesia</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ittthin"></div>
            </div>
        </section>
    </div>
</main>
@endsection