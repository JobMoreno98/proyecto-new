<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top " style="background: #072d45;">
            <!-- Container wrapper -->
            <div class="container-fluid">
                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link " href="#!">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#!">Libros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#!">Contacto</a>
                        </li>
                    </ul>
                </div>
                @if (Route::has('login'))
                    <div class="">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-muted">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-muted">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ms-4 text-muted">Register</a>
                            @endif

                    @endif
                </div>
                @endif
                <!-- Collapsible wrapper -->

                </div>
                <!-- Container wrapper -->
            </nav>
            <!-- Navbar -->

            <!-- Section: Split screen -->
            <section>
                <div class="container-fluid px-0">
                    <div class="row g-0 justify-content-center vw-100">

                        <!-- First column -->
                        <div
                            class="col-lg-6  d-flex flex-column justify-content-center align-items-center order-md-last order-lg-first">

                            <!-- Headings -->
                            <div class=" d-flex justify-content-center align-items-center py-5 px-5">

                                <div class="">
                                    <h2 class="display-4 text-sm-center text-lg-start text-uppercase">tienda</h2>
                                    <h1 class="display-2 text-sm-center text-lg-start fw-bold text-uppercase">EDITORIAL
                                        CUCSH</h1>
                                </div>

                            </div>

                            <!-- CTA elements -->
                            <div
                                class="d-flex align-items-center w-100 justify-content-xs-center justify-content-lg-end  px-5 mb-5">
                                <a class="btn btn-primary btn-lg btn-rounded" href="#" role="button">Ir</a>
                            </div>

                        </div>
                        <!-- First column -->

                        <!-- Second column -->
                        <div class="col-lg-6 d-none d-lg-inline-block col-sm-10 order-md-first order-lg-last">
                            <!-- Single item -->
                            <div class="v-100 vh-100"
                                style="background-size: cover;
                            align-items: center;
                            display: flex;
                            justify-content: center; background-image: url('https://mdbootstrap.com/img/new/textures/full/243.jpg')">
                                <div
                                    style="background-color: rgba(255, 255, 255, 0.4);
                                -webkit-backdrop-filter: blur(5px);
                                backdrop-filter: blur(5px);
                                padding: 20px;
                                margin: 30px;
                                font-weight: bold;">
                                    <h5>15 years of experience in the IT industry</h5>
                                    <p>I am in love with technology and have spent half my life developing it</p>
                                </div>
                            </div>

                            <!-- Carousel wrapper -->

                        </div>
                        <!-- Second column -->

                    </div>
                </div>

            </section>


            <div class="container swiper">
                <div class="slide-container">
                    <div class="card-wrapper swiper-wrapper">
                        <div class="card swiper-slide">
                            <div class="image-box">
                                <img src="https://picsum.photos/200/200" alt="" />
                            </div>
                            <div class="profile-details">
                                <img src="images/profile/profile1.jpg" alt="" />
                                <div class="name-job">
                                    <h3 class="name">David Cardlos</h3>
                                    <h4 class="job">Full Stack Developer</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-box">
                                <img src="https://picsum.photos/200/200" alt="" />
                            </div>
                            <div class="profile-details">
                                <img src="images/profile/profile2.jpg" alt="" />
                                <div class="name-job">
                                    <h3 class="name">Siliana Ramis</h3>
                                    <h4 class="job">Photographer</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-box">
                                <img src="https://picsum.photos/200/200" alt="" />
                            </div>
                            <div class="profile-details">
                                <img src="images/profile/profile3.jpg" alt="" />
                                <div class="name-job">
                                    <h3 class="name">Richard Bond</h3>
                                    <h4 class="job">Data Analyst</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-box">
                                <img src="https://picsum.photos/200/200" alt="" />
                            </div>
                            <div class="profile-details">
                                <img src="images/profile/profile4.jpg" alt="" />
                                <div class="name-job">
                                    <h3 class="name">Priase</h3>
                                    <h4 class="job">App Developer</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-box">
                                <img src="https://picsum.photos/200/200" alt="" />
                            </div>
                            <div class="profile-details">
                                <img src="images/profile/profile5.jpg" alt="" />
                                <div class="name-job">
                                    <h3 class="name">James Laze</h3>
                                    <h4 class="job">Blogger</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
                <div class="swiper-pagination"></div>
            </div>
            <!-- Section: Split screen -->

        </header>
        <script src="{{ asset('js/mdb.min.js') }}"></script>

        <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('js/script.js') }}"></script>
    </body>

    </html>
