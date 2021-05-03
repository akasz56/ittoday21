@extends('layouts.app')

@section('title')
    Competition - IT Today 2021
@endsection

@section('content')
<main class="bg-content">
    <section data-aos="fade-up" class="bg-blur-main">


        
        <div class="py-5 competition-title">
            <img src={{ asset("/assets/icons/logo-Hack.png") }} alt="Logo Hacktoday">
            <div class="txt-subtitle">Tema Kompetisi</div>
        </div>



        <div class="d-flex justify-content-center competition-desc">
            <div class="mx-5">
                <p>
                    Merupakan kompetisi bertaraf nasional dalam bidang keamanan sistem informasi yang menguji kemahiran
                    dan pengetahuan dalam security assessment dan vulnerability exploitation terhadap berbagai kategori
                    permasalahan. Kompetisi terbuka untuk siswa SMA/SMK dan mahasiswa program Sarjana dan Diploma
                    seluruh Indonesia, dengan masing-masing tim beranggotakan maksimal tiga orang.
                </p>
                <p><span class="fw-bold">Kategori           :</span> Siswa SMA/SMK/Sederajat</p>
                <p><span class="fw-bold">Biaya Registrasi   :</span> IDR 100.000/Tim</p>
                <a href="#" class="btn btn-success">Register your team</a>
                <a href="#" class="btn btn-outline-success">Rulebook</a>
            </div>
            <div class="mx-5">
                <img src={{ asset("/assets/illust/Comp_hack.png") }} alt="">
            </div>
        </div>



        <div class="competition-timeline">
            <h1 class="txt-heading1 text-center">Timeline</h1>
        </div>
        
        
        
        <div class="competition-hadiah">
            <h1 class="txt-heading1 text-center">Hadiah</h1>
            <div class="text-center main">Total Hadiah</div>
            <div class="d-flex flex-row">
                <div class="flex-fill">Juara1</div>
                <div class="flex-fill">Juara2</div>
                <div class="flex-fill">Juara3</div>
            </div>
        </div>



    </section>
</main>
@endsection