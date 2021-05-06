@extends('layouts.app')

@section('title')
    IT Business Competition | IT Today 2021
@endsection

@section('content')
<main class="bg-content">
    <section data-aos="fade-up" class="bg-blur-main competition-main">


        
        <div class="py-5 competition-title">
            <div class="ittsmall"></div>
            <div class="ittsmall ittoutr"></div>
            <img src={{ ("/assets/icons/logo-busy.svg") }} alt="Logo IT Business Competition">
            {{-- <div class="txt-subtitle">Tema Kompetisi</div> --}}
        </div>



        <div class="d-flex justify-content-center competition-desc">
            <div class="mx-5">
                <p>
                    Kompetisi bertaraf nasional dalam pemecahan dari suatu masalah yang akan menghasilkan suatu
                    ide-ide bisnis yang inovatif yang dapat menyesuaikan keadaan baru. Peserta diharapkan dapat
                    mengasah pola pikir yang kritis dan mampu mencetuskan ide-ide cemerlang sebagai bentuk
                    kontribusinya dalam permasalahan bisnis di masa mendatang.
                </p>
                <p><span class="fw-bold">Kategori           :</span> Mahasiswa</p>
                <p><span class="fw-bold">Biaya Registrasi :</span></p>
                <p>IDR 60.000/Tim (Batch 1)</p>
                <p>IDR 90.000/Tim (Batch 2)</p>

                {{-- <a href="#" class="btn btn-success">Register your team</a> --}}
                <a href="#" class="btn btn-outline-success">Rulebook</a>
                
            </div>
            <div class="mx-5">
                <img src={{ ("/assets/illust/comp_ux.svg") }} alt="Illustration">
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
                <h2 class="txt-heading2">Rp 10.000.000,-</h2>
            </div>
            <div class="d-flex">
                <div class="flex-fill main">
                    <h3>Juara 1</h3>
                    <h2 class="fw-bold"> Sertifikat + Rp 5.000.000,-</h2>
                </div>
                <div class="flex-fill main">
                    <h3>Juara 2</h3>
                    <h2 class="fw-bold"> Sertifikat + Rp 3.500.000,-</h2>
                </div>
                <div class="flex-fill main">
                    <h3>Juara 3</h3>
                    <h2 class="fw-bold"> Sertifikat + Rp 1.500.000,-</h2>
                </div>
            </div>
            <div class="ittthin"></div>
        </div>



    </section>
</main>
@endsection