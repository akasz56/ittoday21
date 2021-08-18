@extends('layouts.app')

@section('title')
    IT Business Competition | IT Today 2021
@endsection

@section('content')
<main class="bg-content">
    <div class="container">
        <section data-aos="fade-up" class="bg-blur-main competition-main">



            <div class="py-5 competition-title">
                <div class="ittsmall"></div>
                <div class="ittsmall ittoutr"></div>
                <div class="w-75 mx-auto">
                    <img src="{{ asset('/assets/icons/logo-busy.svg') }}" alt="Logo IT Business Competition" class="d-block">
                </div>
                <div class="txt-subtitle">National</div>
            </div>



            <div class="d-flex justify-content-center competition-desc">
                <div class="mx-4">
                    <p>
                        Nationally held competition to bring up solutions as innovative business ideas for currently
                        challenging situation. Participants are expected to hone a critical mindset and be able to
                        come up with bright ideas as a form of contribution to future business problems. Each team
                        consisting up to three people.
                    </p>
                    <p><span class="fw-bold">Category :</span> Undergraduate Students</p>
                    <p><span class="fw-bold">Registration Fee :</span></p>
                    <p>IDR 60.000,-/Team (Batch 1)</p>
                    <p>IDR 90.000,-/Team (Batch 2)</p>

                    @if (Carbon\Carbon::now('Asia/Jakarta')->gte(Carbon\Carbon::parse('01-06-2021', 'Asia/Jakarta')))
                    @auth
                        <a href={{ route('dashboard') }} class="btn btn-success">Go to Dashboard</a>
                    @endauth
                    {{-- @guest
                        <a href={{ route('auth.register') }} class="btn btn-success">Register your team</a>
                    @endguest --}}
                    @endif
                    <a href="/rulebook/busy" class="btn btn-outline-success">Rulebook</a>

                    <p class="fw-bold mt-4">Contact Person :</p>
                    <p style="line-height: 1em;">Abdul Hakim : <a href="https://wa.me/+6285884621204" target="_blank">WhatsApp</a></p>
                    <p style="line-height: 1em;">Aulia Rochman : <a href="https://wa.me/+6289662459376" target="_blank">WhatsApp</a></p>
                    <p style="line-height: 1em;">Rafli Aditya : <a href="https://wa.me/+628970162345" target="_blank">WhatsApp</a></p>

                </div>
                <div class="mx-5">
                    <img src="{{ asset('/assets/illust/comp_busy.svg') }}" alt="Illustration">
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
                    <div class=" flex-fill time">
                        <h3>Finals</h3>
                        <p>12th September 2021</p>
                    </div>
                </div>
            </div>



            <div class="competition-hadiah">
                <div class="d-flex flex-column">
                    <div class="ittsmall itt-top"></div>
                    <div class="ittsmall itt-bottom"></div>
                </div>
                <h1 class="txt-heading1 text-center">Prize</h1>
                <div class="d-flex">
                    <div class="flex-fill main">
                        <h3>1st Place</h3>
                        <h2 class="fw-bold"> Certificate + IDR 2.000.000,-</h2>
                    </div>
                    <div class="flex-fill main">
                        <h3>2nd Place</h3>
                        <h2 class="fw-bold"> Certificate + IDR 1.000.000,-</h2>
                    </div>
                    <div class="flex-fill main">
                        <h3>3rd Place</h3>
                        <h2 class="fw-bold"> Certificate + IDR 500.000,-</h2>
                    </div>
                    <div class="flex-fill main">
                        <h3>Honorable Mention</h3>
                        <h2 class="fw-bold"> Certificate + IDR 300.000,-</h2>
                    </div>
                </div>
                <div class="ittthin"></div>
            </div>



        </section>
    </div>
</main>
@endsection