@extends('layouts.app')

@section('title')
    UX Today | IT Today 2021
@endsection

@section('content')
<main class="bg-content">
    <div class="container">
        <section data-aos="fade-up" class="bg-blur-main competition-main">



            <div class="py-5 competition-title">
                <div class="ittsmall"></div>
                <div class="ittsmall ittoutr"></div>
                <div class="w-75 mx-auto">
                    <img src="{{ asset('/assets/icons/logo-ux.svg') }}" alt="Logo UXtoday" class="d-block">
                </div>
                <div class="txt-subtitle">International</div>
            </div>



            <div class="d-flex justify-content-center competition-desc">
                <div class="mx-4">
                    <p>
                        UX Today is an international online competition that focuses on user experience design on
                        user comfort, satisfaction and efficiency. The competition is open to undergraduate students
                        from all over the world. In this competition, the main focus is the experience felt by the
                        user while using the application as a whole. Participants are expected to provide solutions
                        and ideas related to problems in their own country, with each team consisting up to three people.
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
                    <a href="/rulebook/ux" class="btn btn-outline-success">Rulebook</a>

                    <p class="fw-bold mt-4">Contact Person :</p>
                    <p style="line-height: 1em;">Amelia :
                        <a href="https://wa.me/+6289620766791" target="_blank">WhatsApp</a> |
                        <a href="https://line.me/ti/p/~amelia16hernawan" target="_blank">Line ID</a>
                    </p>
                    <p style="line-height: 1em;">Zulfa :
                        <a href="https://wa.me/+6287867008071" target="_blank">WhatsApp</a> |
                        <a href="https://line.me/ti/p/~zulfameilida" target="_blank">Line ID</a>
                    </p>

                    <p style="line-height: 1em;">Ahmed :
                        <a href="https://wa.me/+6282213666601" target="_blank">WhatsApp</a>
                    </p>
                </div>
                <div class="mx-5">
                    <img src="{{ asset('/assets/illust/comp_ux.svg') }}" alt="Illustration">
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
                        <p>11th July - 1st August 2021</p>
                    </div>
                    <div class=" flex-fill time">
                        <h3>Proposal Submission</h3>
                        <p> 2nd August - 16th August 2021</p>
                    </div>
                    <div class=" flex-fill time">
                        <h3>Demo Video Submission</h3>
                        <p> 2nd August - 18th August 2021</p>
                    </div>
                    <div class=" flex-fill time">
                        <h3>Finalist Announcement</h3>
                        <p>3rd September 2021</p>
                    </div>
                    <div class=" flex-fill time">
                        <h3>Presentation Video Submission</h3>
                        <p>4th - 10th September 2021</p>
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
                <div class="text-center main">
                    <h3>Total Prize</h3>
                    <h2 class="txt-heading2">IDR 10.000.000,-</h2>
                </div>
                <div class="d-flex">
                    <div class="flex-fill main">
                        <h3>1st Winner</h3>
                        <h2 class="fw-bold"> Certificate + Coaching Money + 1 year ACM Sigchi Membership</h2>
                    </div>
                    <div class="flex-fill main">
                        <h3>2nd Winner</h3>
                        <h2 class="fw-bold"> Certificate + Coaching Money + 1 year ACM Sigchi Membership</h2>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="flex-fill main">
                        <h3>3rd Winner</h3>
                        <h2 class="fw-bold"> Certificate + Coaching Money + 1 year ACM Sigchi Membership</h2>
                    </div>
                    <div class="flex-fill main">
                        <h3>Honorable Mention</h3>
                        <h2 class="fw-bold"> Certificate + Coaching Money</h2>
                    </div>
                </div>
                <div class="ittthin"></div>
            </div>



        </section>
    </div>
</main>
@endsection