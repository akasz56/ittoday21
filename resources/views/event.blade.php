@extends('layouts.app')

@section('title')
    Event - IT Today 2021
@endsection

@section('content')
<main class="bg-content">
    <section data-aos="fade-up" class="bg-blur-main">



        <div class="py-5 event-title">
            <h1 class="txt-heading1 text-center">Jenis Acara</h1>
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
                <h1 class="txt-heading1">About International Webinar</h1>
                <P class="mt-4">
                    IT Today 2021 merupakan acara internasional bertemakan teknologi yang pada tahun ini mengusung
                    tema “The synergy between technology and agro-maritime 5.0” dipersembahkan oleh Departemen Ilmu
                    Komputer FMIPA IPB bersama dengan Himpunan Mahasiswa Ilmu Komputer. Tahun ini, kegiatan IT Today 2021
                    menyelenggarakan berbagai rangkaian acara, yaitu Kompetisi (UX Design Competition, Hack Today,
                    Data Science Competition) Seminar Komunitas, Seminar Internasional, dan juga Workshop.
                </P>
            </div>
            <div class="d-flex justify-content-end">
                <div class="ittlarge"></div>
            </div>
        </div>

        

    </section>
</main>
@endsection