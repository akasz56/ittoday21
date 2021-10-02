@extends('layouts.app')

@section('content')
    <section class="about-hero">
        <div class="container">
            <img src={{ '/assets/illust/about.svg' }} alt="Theme Illustration">
        </div>
    </section>



    <section class="container mt-5 container-welcome">
        <div class="d-flex justify-content-center">
            <div class="ittsmall itt-left"></div>
            <div class="ittsmall itt-right"></div>
        </div>
        <div class="row g-0 flex-column-reverse flex-lg-row">
            <div class="col-sm-12 col-md-12 col-lg-6 welcome-logo">
                <img data-aos="fade-up" src={{ '/assets/icons/logo-green-it-today.svg' }}
                    class="img-fluid mx-auto d-block h-100 mb-5" alt="it-today-logo" width="50%" height="50%">
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <P data-aos="fade-up" class="mt-5">
                    IT Today 2021 is an international technology event held by the Department of Computer Science IPB
                    collaborating with IPB University Computer Science Student Association. This year, IT Today brings
                    "The Synergy Between Technology and Agro-Maritime 5.0" as a theme. Presenting various events such
                    as International Seminar, Community Seminars, and Workshop along with Competition such as HackToday,
                    UXToday, and IT Business Competition.
                </P>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <div class="ittlarge"></div>
        </div>
    </section>



    <section class="container mx-auto">
        <h1 class="txt-heading1 text-center">Gallery</h1>
        <div id="carouselExampleControls" class="carousel slide docs" data-bs-ride="carousel">
            <div class="carousel-inner docs-car">
                <div class="carousel-item active">
                    <img src={{ asset('/assets/images/dokum_1.png') }} class="d-block w-100" alt="Dokumentasi">
                </div>
                <div class="carousel-item">
                    <img src={{ asset('/assets/images/dokum_2.png') }} class="d-block w-100" alt="Dokumentasi">
                </div>
                <div class="carousel-item">
                    <img src={{ asset('/assets/images/dokum_3.png') }} class="d-block w-100" alt="Dokumentasi">
                </div>
                <div class="carousel-item">
                    <img src={{ asset('/assets/images/dokum_4.png') }} class="d-block w-100" alt="Dokumentasi">
                </div>
                <div class="carousel-item">
                    <img src={{ asset('/assets/images/dokum_5.png') }} class="d-block w-100" alt="Dokumentasi">
                </div>
                <div class="carousel-item">
                    <img src={{ asset('/assets/images/dokum_6.png') }} class="d-block w-100" alt="Dokumentasi">
                </div>
                <div class="carousel-item">
                    <img src={{ asset('/assets/images/dokum_7.png') }} class="d-block w-100" alt="Dokumentasi">
                </div>
                <div class="carousel-item">
                    <img src={{ asset('/assets/images/dokum_8.png') }} class="d-block w-100" alt="Dokumentasi">
                </div>
                <div class="carousel-item">
                    <img src={{ asset('/assets/images/dokum_9.png') }} class="d-block w-100" alt="Dokumentasi">
                </div>
                <div class="carousel-item">
                    <img src={{ asset('/assets/images/dokum_10.png') }} class="d-block w-100" alt="Dokumentasi">
                </div>
                <div class="carousel-item">
                    <img src={{ asset('/assets/images/dokum_11.png') }} class="d-block w-100" alt="Dokumentasi">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
@endsection
