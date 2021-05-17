@extends('layouts.app')

@section('title')
    Hacktoday | IT Today 2021
@endsection

@section('content')
<main class="bg-content">
    <section data-aos="fade-up" class="bg-blur-main competition-main">



        <div class="py-5 competition-title">
            <div class="ittsmall"></div>
            <div class="ittsmall ittoutr"></div>
            <img src={{ asset("/assets/icons/logo-hack.svg") }} alt="Logo Hacktoday">
            <div class="txt-subtitle">National</div>
        </div>



        <div class="d-flex justify-content-center competition-desc">
            <div class="mx-5">
                <p>
                    A national competition of information systems proficiency in security assessment and vulnerability
                    exploitation of various categories of problems. The competition is open to high school students,
                    Undergrad Students, and the General Public. Each team consisting of three people maximum.
                </p>
                <p><span class="fw-bold">Category :</span> High School Students, Undergrad Students, and the General Public</p>
                <p><span class="fw-bold">Registration Fee :</span> IDR 60.000,-/Team</p>
                
                {{-- <a href="#" class="btn btn-success">Register your team</a> --}}
                <a href="/rulebook/hack" class="btn btn-outline-success">Rulebook</a>
                {{-- <a href="#" class="btn btn-outline-success">Rulebook Coming Soon</a> --}}

                <p class="fw-bold mt-4">Contact Person :</p>
                <p style="line-height: 1em;">Rizal : <a href="https://wa.me/+6289644417286" target="_blank">WhatsApp</a></p>
                <p style="line-height: 1em;">Yosar : <a href="https://wa.me/+62895342744068" target="_blank">WhatsApp</a></p>
                <p style="line-height: 1em;">Patar : <a href="https://t.me/patarisac" target="_blank">Telegram</a></p>
            </div>
            <div class="mx-5">
                <img src={{ asset("/assets/illust/comp_hack.svg" ) }} alt="Illustration">
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
                    <h3>Registration</h3>
                    <p>1st June - 1st August 2021</p>
                </div>
                <div class=" flex-fill time">
                    <h3>Warm up</h3>
                    <p>20th August 2021</p>
                </div>
                <div class=" flex-fill time">
                    <h3>Elimination</h3>
                    <p>21st August 2021</p>
                </div>
                <div class=" flex-fill time">
                    <h3>Finals</h3>
                    <p>4th September 2021</p>
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
                    <h3>1st Winner</h3>
                    <h2 class="fw-bold">IDR 5.000.000,-</h2>
                </div>
                <div class="flex-fill main">
                    <h3>2nd Winner</h3>
                    <h2 class="fw-bold">IDR 3.000.000,-</h2>
                </div>
                <div class="flex-fill main">
                    <h3>3rd Winner</h3>
                    <h2 class="fw-bold">IDR 1.500.000,-</h2>
                </div>
            </div>
            <div class="ittthin"></div>
        </div>



    </section>
</main>
@endsection