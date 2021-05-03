@extends('layouts.app')

@section('title')
    Competition - IT Today 2021
@endsection

@section('content')
<main class="bg-content">
    <section data-aos="fade-up" class="bg-blur-main competition-main">



        <div class="py-5 competition-title">
            <div class="ittsmall"></div>
            <div class="ittsmall ittoutr"></div>
            <img src={{ asset("/assets/icons/logo-Hack.svg") }} alt="Logo Hacktoday">
        </div>



        <div class="d-flex justify-content-center competition-desc">
            <div class="mx-5">
                <p>
                    Merupakan kompetisi bertaraf nasional dalam bidang keamanan sistem informasi yang menguji
                    kemahiran
                    dan pengetahuan dalam security assessment dan vulnerability exploitation terhadap berbagai
                    kategori
                    permasalahan. Kompetisi terbuka untuk siswa SMA/SMK dan mahasiswa program Sarjana dan Diploma
                    seluruh Indonesia, dengan masing-masing tim beranggotakan maksimal tiga orang.
                </p>
                <p><span class="fw-bold">Kategori :</span> Siswa SLTA/sederajat, Mahasiswa, dan Umum</p>
                <p><span class="fw-bold">Biaya Registrasi :</span> Rp 60.000/Tim</p>
                <a href="#" class="btn btn-success">Register your team</a>
                <a href="#" class="btn btn-outline-success">Rulebook</a>
                <p class="fw-bold mt-4">Contact Person :</p>
                <p style="line-height: 1em;">Rizal : <a href="https://wa.me/+6289644417286" target="_blank">0896-4441-7286</a> (WhatsApp)</p>
                <p style="line-height: 1em;">Yosar : <a href="https://wa.me/+62895342744068" target="_blank">0895-3427-44068</a> (WhatsApp)</p>
                <p style="line-height: 1em;">Patar : <a href="https://t.me/patarisac" target="_blank">t.me/patarisac</a> (Telegram)</p>
            </div>
            <div class="mx-5">
                <img src={{ asset("/assets/illust/Comp_hack.svg") }} alt="Illustration">
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
            <div class="d-flex">
                <div class=" flex-fill time">
                    <h3>Pendaftaran</h3>
                    <p>1 Juni - 1 Agustus 2021</p>
                </div>
                <div class=" flex-fill time">
                    <h3>Warm up</h3>
                    <p>20 Agustus 2021</p>
                </div>
                <div class=" flex-fill time">
                    <h3>Penyisihan</h3>
                    <p>21 Agustus 2021</p>
                </div>
                <div class=" flex-fill time">
                    <h3>Final</h3>
                    <p>4 September 2021</p>
                </div>
            </div>
        </div>



        <div class="competition-hadiah">
            <div class="d-flex flex-column">
                <div class="ittsmall itt-top"></div>
                <div class="ittsmall itt-bottom"></div>
            </div>
            <h1 class="txt-heading1 text-center">Hadiah</h1>
            <div class="text-center main">
                <h3>Total Hadiah</h3>
                <h2 class="txt-heading2">Rp 10.000.000</h2>
            </div>
            <div class="d-flex">
                <div class="flex-fill main">
                    <h3>Juara 1</h3>
                    <h2 class="fw-bold">Rp 5.000.000</h2>
                </div>
                <div class="flex-fill main">
                    <h3>Juara 2</h3>
                    <h2 class="fw-bold">Rp 3.500.000</h2>
                </div>
                <div class="flex-fill main">
                    <h3>Juara 3</h3>
                    <h2 class="fw-bold">Rp 1.500.000</h2>
                </div>
            </div>
            <div class="ittthin"></div>
        </div>



    </section>
</main>
@endsection