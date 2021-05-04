<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="It Today Web App">
    <meta name="author" content="dewasemadi@apps.ipb.ac.id">
    <meta name="author2" content="indo14nurfath@apps.ipb.ac.id">
    <title>@yield('title', 'IT TODAY 2021 | The Synergy Berween Technology and Agro-Maritime 5.0')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- favicon -->
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('/assets/favicon/android-chrome-512x512.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('/assets/favicon/android-chrome-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/assets/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/assets/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/assets/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('/assets/favicon/site.webmanifest') }}">
</head>

<body id="home">
    <header class="fixed-top" id="collNavbar">
        <!-- skip link -->
        <a class="skip-link btn btn-success" href="#main">Skip to main</a>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-1 _bg-color-purple">
            <div class="container">
                <a class="navbar-brand p-0" href="{{ route('home') }}"><img
                        src="{{ asset('/assets/icons/brand.svg') }}" alt="It Today Logo" width="70px"
                        height="50px"></a>
                <!-- hamburger button when mobile -->
                <button class="hamburger hamburger--spin" id="hamburger-btn" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="hamburger-box d-flex align-items-center justify-content-center">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>

                <!-- nav link -->
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav _m-nav-mobile">
                        <li class="nav-item dropdown ms-lg-2">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownEvent" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-calendar2-event calendarHide"></i> Events <i
                                    class="bi bi-chevron-down icon-rotates"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownEvent">
                                <li><a class="dropdown-item" href="{{ route('event.int') }}">International Seminar</a></li>
                                <li><a class="dropdown-item" href="{{ route('event.ilk') }}">Ilkommunity</a></li>
                                <li><a class="dropdown-item" href="{{ route('event.work') }}">Workshop</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown ms-lg-2">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownCompetitions" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-trophy trophyHide"></i> Competitions <i
                                    class="bi bi-chevron-down icon-rotates"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownCompetitions">
                                <li><a class="dropdown-item" href="{{ route('comp.hack') }}">Hack Today</a></li>
                                <li><a class="dropdown-item" href="{{ route('comp.ux') }}">UX Today</a></li>
                                <li><a class="dropdown-item" href="{{ route('comp.busy') }}">IT Business Competition</a></li>
                            </ul>
                        </li>
                        <a class="nav-link ms-lg-2" href="{{ route('about') }}"><i
                                class="bi bi-info-circle infoHide"></i> About
                            Us</a>
                    </div>

                    {{-- <div class="navbar-nav full-navbar-mobile ms-auto auth">
                        @auth
                            <a class="nav-link m-auto me-lg-2" href="{{ route('dashboard') }}">Dashboard</a>
                            <a class="nav-link m-auto me-lg-2" href="{{ route('logout') }}">Logout</a>
                        @endauth
                        @guest
                            <a class="nav-link m-auto me-lg-2" href="{{ route('login') }}">Login</a>
                            <a class="btn btn-primary" href="{{ route('register') }}">Register</a>
                        @endguest
                    </div> --}}

                </div>
            </div>
        </nav>
    </header>

    {{-- YYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA --}}
    @yield('content')
    {{-- YYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA --}}

    <section class="container sponsors">
        <h1 data-aos="fade-up" class="text-center fw-bold">Sponsors</h1>
        <div class="ittsmall itt-spon"></div>
        <div data-aos="fade-up" class="border sponsors-list"></div>    
        <div class="d-flex flex-column itt-sponmed">
            <div class="ittsmall itt-top"></div>
            <div class="ittsmall itt-bottom"></div>
        </div>        
        <h1 data-aos="fade-up" class="text-center mt-5 fw-bold">Media Partners</h1>
        <div data-aos="fade-up" class="border sponsors-list"></div>
        <div class="ittsmall itt-spon"></div>
    </section>

    <footer style="background-color: var(--purple);" class="mt-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-6">
                    <img src={{ asset("/assets/icons/brand.svg") }} alt="IT Today Logo" class="img-fluid"
                        height="150px" width="150px">
                    <p class="text-white mt-3 fw-light">The Synergy Between Technology and Agro-Maritime 5.0</p>

                    <!-- social media -->
                    <div class="d-flex mb-4">
                        <a href="https://www.facebook.com/ipbittoday/">
                            <img src={{ asset("/assets/icons/fb.svg") }}
                            alt="facebook" class="img-fluid" height="30px" width="30px">
                        </a>
                        <a href="https://www.instagram.com/ittoday_ipb/">
                            <img src={{ asset("/assets/icons/ig.svg") }}
                            alt="instagram" class="img-fluid ms-3" height="30px" width="30px">
                        </a>
                        <a href="#">
                            <img src=assets/icons/line.svg
                            alt="line" class="img-fluid ms-3" height="30px" width="30px">
                        </a>
                        <a href="https://twitter.com/ittoday_ipb?lang=en">
                            <img src={{ asset("/assets/icons/twitter.svg") }}
                            alt="twitter" class="img-fluid ms-3" height="30px" width="30px">
                        </a>
                        <a href="https://www.youtube.com/c/ITTodayIPB/videos">
                            <img src={{ asset("/assets/icons/youtube.svg") }}
                            alt="youtube" class="img-fluid ms-3" height="30px" width="30px">
                        </a>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-2">
                    <h6 class="text-white fw-bold">Competition</h6>
                    <ul class="list-unstyled text-small">
                        <li><a href="{{ route('comp.hack') }}" class="text-decoration-none link-list-footer">Hacktoday</a></li>
                        <li><a href="{{ route('comp.ux') }}" class="text-decoration-none link-list-footer">UX Today</a></li>
                        <li><a href="{{ route('comp.busy') }}" class="text-decoration-none link-list-footer">IT Business Competition</a></li>
                    </ul>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-2">
                    <h6 class="text-white fw-bold">Events</h6>
                    <ul class="list-unstyled text-small">
                        <li><a href="{{ route('event.int') }}" class="text-decoration-none link-list-footer">International Seminar</a></li>
                        <li><a href="{{ route('event.ilk') }}" class="text-decoration-none link-list-footer">Ilkommunity</a></li>
                        <li><a href="{{ route('event.work') }}" class="text-decoration-none link-list-footer">Workshop</a></li>
                    </ul>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-2">
                    <h6 class="text-white fw-bold">Contact Us</h6>
                    <ul class="list-unstyled text-small">
                        <li>
                            <a href="mailto:admin@ittoday.id" class="text-decoration-none link-list-footer">admin@ittoday.id</a>
                        </li>
                        <li>
                            <a href="https://wa.me/+6285398553879" class="text-decoration-none link-list-footer">Risda Awalia <br>+62 853-9855-3879</a>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="text-center text-light py-3 fw-light">Copyright 2020 IT Today 2021 Bogor, Indonesia</p>
        </div>
    </footer>

    <script src="/js/app.js" type="module"></script>
    <script src="node_modules/aos/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true
        });

    </script>
</body>

</html>
