@extends('layouts.app')

@section('content')
<section class="about-hero">
    <div class="container">
        <img src="{{ asset('/assets/illust/about.svg') }}" alt="Theme Illustration">
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
                IT Today 2021 is an international technology event held by the Department of Computer Science IPB
                collaborating with IPB University Computer Science Student Association. This year, IT Today brings
                "The Synergy Between Technology and Agro-Maritime 5.0" as a theme. Presenting various events such
                as International Seminar, Community Seminars, and Workshop along with Competition such as HackToday,
                UXToday, and IT Business Competition.
            </P>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 welcome-logo">
            <img data-aos="fade-up" src="{{ asset('/assets/icons/logo-green-it-today.svg') }}"
                class="img-fluid mx-auto d-block h-100 mb-5" alt="it-today-logo" width="50%" height="50%">
        </div>
    </div>
    <div class="d-flex justify-content-end">
        <div class="ittlarge"></div>
    </div>
</section>



<section class="bg-visimisi">
    <div class="container">
        <div class="d-flex flex-visimisi-box justify-content-between">
            <div class="about-box mx-3">
                <p class="txt-paragraph about-box-text">
                    Creating IT Today as a platform for technology enthusiast as well to provide
                    preliminaries for those future generation leaders to strive and to be resilient
                    in the IT industry of Indonesia.
                </p>
                <div class="txt-heading1 about-box-title">VISION</div>
            </div>
            <div class="about-box mx-3">
                <div class="about-box-text">
                    <p>Creating a platform to channel and assist in developing interests and talents around IT.</p>
                    <p>Organizing competitions as a competitive forum to channel abilities in a positive manner.</p>
                    <p style="padding-bottom: 1em">Providing information and education around potential opportunities aligns with the talents
                        interest.
                    </p>
                </div>
                <div class="txt-heading1 about-box-title">MISSION</div>
            </div>
        </div>
    </div>
</section>



<section class="cperson">
    <div class="container-xxl position-relative">
        <h1 data-aos="fade-up" class="txt-outline cperson-outline end-0">CONTACT</h1>
        <div data-aos="fade-up" class="cperson-content">
            <div class="txt-heading1">CONTACT PERSON</div>
            <div class="txt-heading2">Risda Awalia</div>
            <a href="https://wa.me/+6285398553879" class="txt-heading2" target="_blank">+62 853-9855-3879</a>
        </div>
        <h1 data-aos="fade-up" class="txt-outline cperson-outline">PERSON</h1>
    </div>
</section>



<section class="container mx-auto">
    <h1 class="txt-heading1 text-center">Gallery</h1>
    <div id="carouselExampleControls" class="carousel slide docs" data-bs-ride="carousel">
        <div class="carousel-inner docs-car">
            <div class="carousel-item active">
                <img src="{{ asset('/assets/images/2018_1.jpg') }}" class="d-block w-100" alt="Dokumentasi1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/assets/images/2018_2.jpg') }}" class="d-block w-100" alt="Dokumentasi1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/assets/images/2018_3.jpg') }}" class="d-block w-100" alt="Dokumentasi1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/assets/images/2019_1.jpg') }}" class="d-block w-100" alt="Dokumentasi1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/assets/images/2019_2.jpg') }}" class="d-block w-100" alt="Dokumentasi1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/assets/images/2019_3.jpg') }}" class="d-block w-100" alt="Dokumentasi1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/assets/images/2020_1.jpg') }}" class="d-block w-100" alt="Dokumentasi1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/assets/images/2020_2.jpg') }}" class="d-block w-100" alt="Dokumentasi1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/assets/images/2020_3.jpg') }}" class="d-block w-100" alt="Dokumentasi1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/assets/images/2020_4.jpg') }}" class="d-block w-100" alt="Dokumentasi1">
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