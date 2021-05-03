@extends('layouts.app')

@section('title')
    Competition - IT Today 2021
@endsection

@section('content')
<main class="bg-content">
    <section data-aos="fade-up" class="bg-blur-main">


        
        <div class="py-5 competition-title">
            <div class="ittsmall"></div>
            <div class="ittsmall ittoutr"></div>
            <img src={{ asset("/assets/icons/logo-busy.svg") }} alt="Logo IT Business Competition">
            <div class="txt-subtitle">Tema Kompetisi</div>
        </div>



        <div class="d-flex justify-content-center competition-desc">
            <div class="mx-5">
                <p>
                    Merupakan kompetisi pembuatan desain pengalaman pengguna baik dalam bentuk produk web, aplikasi,
                    progressive web app, dan lainnya yang mengutamakan pengalaman pengguna, kenyamanan, kepuasan,
                    dan efisiensi saat pengguna menggunakan produk tersebut. Kompetisi ini diperuntukkan bagi mahasiswa
                    program Sarjana dan Diploma dalam lingkup internasional, khususnya Indonesia. Peserta berkompetisi
                    dalam tim yang beranggotakan maksimal tiga orang.
                </p>
                <p><span class="fw-bold">Kategori           :</span> Mahasiswa</p>
                <p><span class="fw-bold">Biaya Registrasi   :</span> IDR 100.000/Tim</p>
                <a href="#" class="btn btn-success">Register your team</a>
                <a href="#" class="btn btn-outline-success">Rulebook</a>
            </div>
            <div class="mx-5">
                <img src={{ asset("/assets/illust/Comp_ux.svg") }} alt="">
            </div>
        </div>
        <div class="ittthin"></div>
        <div class="itttri">
            <div class="ittsmall itt-top"></div>
            <div class="ittsmall itt-bottom"></div>
            <div class="ittsmallrect"></div>
        </div>



        <div class="competition-timeline">
            <h1 class="txt-heading1 text-center">Timeline</h1>
        </div>
        
        
        
        <div class="competition-hadiah">
            <div class="d-flex flex-column">
                <div class="ittsmall itt-top"></div>
                <div class="ittsmall itt-bottom"></div>
            </div>
            <h1 class="txt-heading1 text-center">Hadiah</h1>
            <div class="text-center main">Total Hadiah</div>
            <div class="d-flex flex-row">
                <div class="flex-fill">Juara1</div>
                <div class="flex-fill">Juara2</div>
                <div class="flex-fill">Juara3</div>
            </div>
            <div class="ittthin"></div>
        </div>



    </section>
</main>
@endsection