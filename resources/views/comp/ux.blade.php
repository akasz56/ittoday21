@extends('layouts.app')

@section('title')
    UX Today | IT Today 2021
@endsection

@section('content')
<main class="bg-content">
    <section data-aos="fade-up" class="bg-blur-main competition-main">



        <div class="py-5 competition-title">
            <div class="ittsmall"></div>
            <div class="ittsmall ittoutr"></div>
            <img src={{ asset("/assets/icons/logo-ux.svg") }} alt="Logo UXtoday">
            {{-- <div class="txt-subtitle">Tema Kompetisi</div> --}}
        </div>



        <div class="d-flex justify-content-center competition-desc">
            <div class="mx-5">
                <p>
                    UX Today adalah kompetisi online internasional yang berfokus pada desain pengalaman pengguna pada kenyamanan,
                    kepuasan, dan efisiensi pengguna. Kompetisi terbuka untuk mahasiswa sarjana dari seluruh dunia. Dalam lomba
                    ini yang menjadi fokus utama adalah pengalaman yang dirasakan pengguna ketika sedang menggunakan aplikasi
                    tersebut secara menyeluruh. Peserta diharapkan untuk memberikan solusi atau ide yang berkaitan dengan masalah
                    yang ada di negaranya sendiri dengan masing-masing tim beranggotakan maksimal tiga orang.
                </p>
                <p><span class="fw-bold">Kategori :</span> Mahasiswa</p>
                <p><span class="fw-bold">Biaya Registrasi :</span> IDR 60.000/Tim</p>
                {{-- <a href="#" class="btn btn-success">Register your team</a> --}}
                <a href="#" class="btn btn-outline-success">Rulebook</a>
            </div>
            <div class="mx-5">
                <img src={{ asset("/assets/illust/comp_ux.svg" ) }} alt="Illustration">
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
                    <h3>Pendaftaran Batch 1</h3>
                    <p>1 Juni - 10 Juli 2021</p>
                </div>
                <div class=" flex-fill time">
                    <h3>Pendaftaran Batch 2</h3>
                    <p>11 Juli - 1 Agustus 2021</p>
                </div>
                <div class=" flex-fill time">
                    <h3>Pemberian Tema</h3>
                    <p>13 Agustus 2021</p>
                </div>
                <div class=" flex-fill time">
                    <h3>Pengumpulan Proposal</h3>
                    <p>14 - 21 Agustus 2021</p>
                </div>
                <div class=" flex-fill time">
                    <h3>Pengumuman Finalis</h3>
                    <p>3 September 2021</p>
                </div>
                <div class=" flex-fill time">
                    <h3>Pengiriman Video Presentasi</h3>
                    <p>4 - 11 September 2021</p>
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
                    <h2 class="fw-bold"> Sertifikat + Uang Pelatihan</h2>
                </div>
                <div class="flex-fill main">
                    <h3>Juara 2</h3>
                    <h2 class="fw-bold"> Sertifikat + Uang Pelatihan</h2>
                </div>
            </div>
            <div class="d-flex">
                <div class="flex-fill main">
                    <h3>Juara 3</h3>
                    <h2 class="fw-bold"> Sertifikat + Uang Pelatihan</h2>
                </div>
                <div class="flex-fill main">
                    <h3>Juara Harapan</h3>
                    <h2 class="fw-bold"> Sertifikat + Uang Pelatihan</h2>
                </div>
            </div>
            <div class="ittthin"></div>
        </div>



    </section>
</main>
@endsection