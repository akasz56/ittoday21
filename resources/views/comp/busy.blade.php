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
            <img src={{ asset("/assets/icons/logo-busy.svg") }} alt="Logo IT Business Competition">
            <div class="txt-subtitle">National</div>
        </div>



        <div class="d-flex justify-content-center competition-desc">
            <div class="mx-5">
                <p>
                    Nationally held competition to bring up solutions as innovative business ideas for currently
                    challenging situation. Participants are expected to hone a critical mindset and be able to
                    come up with bright ideas as a form of contribution to future business problems.
                </p>
                <p><span class="fw-bold">Category           :</span> Undergrad Students</p>
                <p><span class="fw-bold">Registration Fee   :</span></p>
                <p>IDR 60.000,-/Team (Batch 1)</p>
                <p>IDR 90.000,-/Team (Batch 2)</p>

                {{-- <a href="#" class="btn btn-success">Register your team</a> --}}
                {{-- <a href="/rulebook/busy" class="btn btn-outline-success">Rulebook</a> --}}
                <a href="#" class="btn btn-outline-success">Rulebook Coming Soon</a>
                
            </div>
            <div class="mx-5">
                <img src={{ ("/assets/illust/comp_busy.svg") }} alt="Illustration">
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
                    <h3>Batch 1 Registration</h3>
                    <p>1st June - 10th July 2021</p>
                </div>
                <div class=" flex-fill time">
                    <h3>Batch 2 Registration</h3>
                    <p>11th July - 1th August 2021</p>
                </div>
                <div class=" flex-fill time">
                    <h3>Theme Announcement</h3>
                    <p>13th August 2021</p>
                </div>
                <div class=" flex-fill time">
                    <h3>Proposal Submission</h3>
                    <p>14th - 21st August 2021</p>
                </div>
                <div class=" flex-fill time">
                    <h3>Finalist Announcement</h3>
                    <p>3rd September 2021</p>
                </div>
                <div class=" flex-fill time">
                    <h3>Presentation Video Submission</h3>
                    <p>4th - 11th September 2021</p>
                </div>
            </div>
        </div>



        <div class="competition-hadiah">
            <div class="d-flex flex-column">
                <div class="ittsmall itt-top"></div>
                <div class="ittsmall itt-bottom"></div>
            </div>
            <h1 class="txt-heading1 text-center">Prize</h1>
            <div class="text-center main">
                <h3>Total Prize</h3>
                <h2 class="txt-heading2">Up to IDR 10.000.000,-</h2>
            </div>
            <div class="d-flex">
                <div class="flex-fill main">
                    <h3>Juara 1</h3>
                    <h2 class="fw-bold"> Certificate + IDR 5.000.000,-</h2>
                </div>
                <div class="flex-fill main">
                    <h3>Juara 2</h3>
                    <h2 class="fw-bold"> Certificate + IDR 3.000.000,-</h2>
                </div>
                <div class="flex-fill main">
                    <h3>Juara 3</h3>
                    <h2 class="fw-bold"> Certificate + IDR 1.500.000,-</h2>
                </div>
            </div>
            <div class="ittthin"></div>
        </div>



    </section>
</main>
@endsection