@extends('layouts.app')

@section('content')
<main id="main" role="main">



    <section class="jumbotron" id="bg-jumbotron">
        <div class="ittrect itthero"></div>
        <div class="container d-flex align-items-center justify-content-center bg-hero-container">
            <div class="bg-blur-hero">
                <div class="p-5 h-100 d-flex flex-column align-items-center justify-content-center">
                    <img src={{ asset("./assets/icons/logo-ITTodayHero.svg") }} class="img-fluid mx-auto d-block jumbotron-logo"
                        alt="logo-it-today-hero" width="300px" height="150px">
                    <h6 class="mt-3 txt-subtitle" style="color: var(--dark-green);">The Synergy Between Technology
                        and Agro-Maritime 5.0</h6>
                </div>
            </div>
        </div>
    </section>
    


    <section class="container mt-5 container-welcome">
        <div class="d-flex justify-content-center">
            <div class="ittsmall itt-left"></div>
            <div class="ittsmall itt-right"></div>
        </div>
        <div class="row g-0 flex-column-reverse flex-lg-row">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <h1 data-aos="fade-up" class="txt-outline stroke-welcome">WELCOME</h1>
                <h1 data-aos="fade-up" class="txt-heading1 it-today-2021-title">IT TODAY 2021</h1>
                <P data-aos="fade-up" class="mt-5">
                    IT Today 2021 merupakan acara internasional bertemakan teknologi yang pada tahun ini mengusung
                    tema
                    “The synergy between technology and agro-maritime 5.0” dipersembahkan oleh Departemen Ilmu
                    Komputer
                    FMIPA IPB bersama dengan Himpunan Mahasiswa Ilmu Komputer. Tahun ini, kegiatan IT Today 2021
                    menyelenggarakan berbagai rangkaian acara, yaitu Kompetisi (UX Design Competition, Hack Today,
                    Data
                    Science Competition) Seminar Komunitas, Seminar Internasional, dan juga Workshop.
                </P>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 welcome-logo">
                <img data-aos="fade-up" src={{ asset("./assets/icons/logo-green-it-today.svg") }}
                    class="img-fluid mx-auto d-block h-100 mb-5" alt="it-today-logo" width="50%" height="50%">
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <div class="ittlarge"></div>
        </div>
    </section>
    


    <section class="timeline">
        <div class="container-xxl position-relative">
            <h1 data-aos="fade-up" class="txt-outline position-absolute timeline-left">TIMELINE</h1>
            <div class="container">
                <div class="ittsmall ittsmall-timeline"></div>
                <img data-aos="fade-up" src={{ asset("./assets/illust/Illust1.png") }} alt="timeline" class="img-fluid mx-auto d-block"
                    width="400px" height="400px">
            </div>
            <h1 data-aos="fade-up" class="txt-outline position-absolute timeline-right end-0">TIMELINE</h1>
        </div>
    </section>
    

    
    <section class="bg-total-price">
        <div class="bg-hero-total-prize container d-flex align-items-center justify-content-center">
            <div data-aos="fade-up" class="bg-blur-total-prize">
                <div class="hero-content p-5 h-100 d-flex flex-column align-items-center justify-content-center">
                    <div class="ittsmall-prize">
                        <div class="ittsmall itt-top"></div>
                        <div class="ittsmall itt-bottom"></div>
                    </div>
                    <h1 class="fw-bold text-center txt-heading3">COMPETITION TOTAL PRIZE</h1>
                    <h1 class="fw-bold text-center txt-heading2" style="font-weight: bolder;">Rp30.000.000,00</h1>
                    <div class="ittlarge ittlarge-prize"></div>
                </div>
            </div>
        </div>
    </section>
    

    
    <section data-aos="fade-up" class="container mt-5">
        <h1 class="text-start fw-bold">Core of Values</h1>
        <div class="container overflow-auto row d-flex flex-nowrap">
            <img class="core" src={{ asset("./assets/images/core_1.jpg") }} alt="Critical Thinking">
            <img class="core" src={{ asset("./assets/images/core_2.jpg") }} alt="Complex Problem Solving">
            <img class="core" src={{ asset("./assets/images/core_3.jpg") }} alt="Creativity & Innovation">
            <img class="core" src={{ asset("./assets/images/core_4.jpg") }} alt="Collaboration">
            <img class="core" src={{ asset("./assets/images/core_5.jpg") }} alt="Curiosity">
            <img class="core" src={{ asset("./assets/images/core_6.jpg") }} alt="Initiative">
            <img class="core" src={{ asset("./assets/images/core_7.jpg") }} alt="Adaptability">
            <img class="core" src={{ asset("./assets/images/core_8.jpg") }} alt="Global Citizenship">
            <img class="core" src={{ asset("./assets/images/core_9.jpg") }} alt="Digital & Technological Fluency">
        </div>
    </section>



</main>
@endsection
