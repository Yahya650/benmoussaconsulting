@extends('v2.web.layouts.default')

@section('seo')
    {!! seo($seoData) !!}
    <meta name="keywords"
        content="benmoussa consulting, Mohamed BenMoussa, Formateur international, Coach certifié, Comportements relationnels, Développement humain, Améliorer les relations, Éducation sexuelle, Coaching en relations, Conseils relationnels, Stratégies pratiques, Vie épanouissante, Développement personnel, État d'esprit positif,Relations intimes, Vie équilibrée, Coaching personnalisé, Cours de développement personnel, Radio coaching, Épanouissement personnel, Relations significatives">
    <meta property="og:description"
        content="Mohamed BenMoussa est bien plus qu'un coach ordinaire. Avec des années d'expérience et une compréhension profonde des complexités de la vie moderne, il offre des conseils perspicaces et des stratégies pratiques pour aider les individus à surmonter les obstacles, à développer un état d'esprit positif et à établir des relations significatives et épanouissantes">
@endsection

@section('title', 'Accueil')
@section('content')

    <!--hero section start-->

    <section class="custom-pt-1 custom-pb-2 bg-primary parallaxie position-relative"
        style="background-image: url(/assets/v2/images/bg/01.jpg);background-position: center center; background-size: auto; background-repeat: no-repeat;"
        data-overlay="6">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-12 col-lg-10 col-xl-8">
                    <!-- Heading -->
                    <h1 class="display-4 text-white fw-bold">
                        Change the way you build websites With Bootsland
                    </h1>
                    <!-- Text -->
                    <p class="lead text-light">Build a Beautiful, Clean & Modern Design website with flexible
                        Bootstrap
                        components.</p>
                    <!-- Buttons --> <a href="#" class="btn btn-primary me-1">
                        Learn More
                    </a>
                    <a href="#" class="btn btn-light">
                        Get Started
                    </a>
                </div>
            </div>
            <!-- / .row -->
        </div>
        <!-- / .container -->
        <div class="shape-1 bottom" style="height: 100px; overflow: hidden;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <polygon class="svg--sm" fill="white" points="0,0 30,100 65,21 90,100 100,75 100,100 0,100" />
                <polygon class="svg--lg" fill="white"
                    points="0,0 15,100 33,21 45,100 50,75 55,100 72,20 85,100 95,50 100,80 100,100 0,100" />
            </svg>
        </div>
    </section>

    <!--hero section end-->


    <!--body content start-->

    <div class="page-content">

        <!--services start-->

        <section>
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-12 col-md-12 col-lg-8 mb-8 mb-lg-0">
                        <div class="mb-8"> <span class="badge badge-primary-soft p-2 font-w-6">
                                What We Offerd
                            </span>
                            <h2 class="mt-3 font-w-5">Creative Design And Creative Services</h2>
                            <p class="lead mb-0">All types of businesses need access to development resources, so
                                we give you the
                                option to decide how much you need to use.</p>
                        </div>
                    </div>
                </div>
                <!-- / .row -->
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-4 mb-8 mb-lg-0">
                        <div class="px-4 py-7 rounded hover-translate text-center">
                            <div>
                                <img class="img-fluid" src="/assets/v2/images/svg/01.svg" alt="">
                            </div>
                            <h5 class="mt-4 mb-3">Creative UI/UX</h5>
                            <p>Serspiciatis unde omnis iste natus error sit doloremque laudantium, totam rem
                                aperiam.</p>
                            <a class="btn-link" href="#">Read Details</a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-6">
                        <div class="px-4 py-7 rounded hover-translate text-center bg-white shadow">
                            <div>
                                <img class="img-fluid" src="/assets/v2/images/svg/02.svg" alt="">
                            </div>
                            <h5 class="mt-4 mb-3">Flexibility</h5>
                            <p>Serspiciatis unde omnis iste natus error sit doloremque laudantium, totam rem
                                aperiam.</p>
                            <a class="btn-link" href="#">Read Details</a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-6 mt-6 mt-sm-0">
                        <div class="px-4 py-7 rounded hover-translate text-center">
                            <div>
                                <img class="img-fluid" src="/assets/v2/images/svg/03.svg" alt="">
                            </div>
                            <h5 class="mt-4 mb-3">Easy Code</h5>
                            <p>Serspiciatis unde omnis iste natus error sit doloremque laudantium, totam rem
                                aperiam.</p>
                            <a class="btn-link" href="#">Read Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--services end-->


        <!--about start-->

        <section>
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-12 col-lg-6 mb-8 mb-lg-0">
                        <img src="/assets/v2/images/about/05.png" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-12 col-lg-6 col-xl-5">
                        <div> <span class="badge badge-primary-soft p-2 font-w-6">
                                About Bootsland
                            </span>
                            <h2 class="mt-3 font-w-5">Bootsland Crafting Creative And Beautiful Experience</h2>
                            <p class="lead mb-0">We use the latest technologies it voluptatem accusantium
                                doloremque laudantium,
                                totam rem aperiam.</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-5">
                            <div class="counter">
                                <div class="counter-desc"> <span class="count-number display-4" data-to="15"
                                        data-speed="1000">15</span>
                                    <span class="display-4 text-primary">k</span>
                                    <h6 class="text-muted mb-0">Project</h6>
                                </div>
                            </div>
                            <div class="counter">
                                <div class="counter-desc"> <span class="count-number display-4" data-to="29"
                                        data-speed="1000">29</span>
                                    <span class="display-4 text-primary">k</span>
                                    <h6 class="text-muted mb-0">Member</h6>
                                </div>
                            </div>
                            <div class="counter">
                                <div class="counter-desc"> <span class="count-number display-4" data-to="23"
                                        data-speed="1000">23</span>
                                    <span class="display-4 text-primary">k</span>
                                    <h6 class="text-muted mb-0">Happy Client</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--about end-->


        <!--how it work start-->

        <section class="custom-py-2 position-relative bg-dark" data-bg-img="/assets/v2/images/bg/02.png">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-12 col-md-12 col-lg-8 mb-8 mb-lg-0">
                        <div class="mb-8"> <span class="badge badge-primary-soft p-2 font-w-6">
                                How It Work
                            </span>
                            <h2 class="mt-3 font-w-5 mb-0 text-white">Three Simple Step To Started Working Process
                            </h2>
                        </div>
                    </div>
                </div>
                <!-- / .row -->
                <div class="row align-items-center justify-content-between mb-10">
                    <div class="col-12 col-lg-6 mb-6 mb-lg-0">
                        <img src="/assets/v2/images/svg/04.svg" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-12 col-lg-6 col-xl-5">
                        <div>
                            <h2> <span class="badge badge-primary-soft p-2">
                                    01
                                </span>
                            </h2>
                            <h4 class="mt-3 text-light">Choose Project</h4>
                            <p class="lead mb-0">We use the latest technologies it voluptatem accusantium
                                doloremque laudantium,
                                totam rem aperiam.</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-between mb-10">
                    <div class="col-12 col-lg-6 order-lg-1 mb-6 mb-lg-0">
                        <img src="/assets/v2/images/svg/05.svg" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-12 col-lg-6 col-xl-5">
                        <div>
                            <h2> <span class="badge badge-primary-soft p-2">
                                    02
                                </span>
                            </h2>
                            <h4 class="mt-3 text-light">Start Creating</h4>
                            <p class="lead mb-0">We use the latest technologies it voluptatem accusantium
                                doloremque laudantium,
                                totam rem aperiam.</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-between">
                    <div class="col-12 col-lg-6 mb-6 mb-lg-0">
                        <img src="/assets/v2/images/svg/06.svg" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-12 col-lg-6 col-xl-5">
                        <div>
                            <h2> <span class="badge badge-primary-soft p-2">
                                    03
                                </span>
                            </h2>
                            <h4 class="mt-3 text-light">Get Result</h4>
                            <p class="lead mb-0">We use the latest technologies it voluptatem accusantium
                                doloremque laudantium,
                                totam rem aperiam.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-1" style="height: 200px; overflow: hidden;">
                <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                    <path d="M0.00,49.98 C150.00,150.00 271.49,-50.00 500.00,49.98 L500.00,0.00 L0.00,0.00 Z"
                        style="stroke: none; fill: #fff;"></path>
                </svg>
            </div>
            <div class="shape-1 bottom" style="height: 200px; overflow: hidden;">
                <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                    <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                        style="stroke: none; fill: #fff;"></path>
                </svg>
            </div>
        </section>

        <!--how it work end-->


        <!--team start-->

        <section class="pt-0">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-12 col-md-12 col-lg-8 mb-8 mb-lg-0">
                        <div class="mb-8"> <span class="badge badge-primary-soft p-2 font-w-6">
                                Bootsland Team
                            </span>
                            <h2 class="mt-3 font-w-5">Meet Our Team Of Expert</h2>
                            <p class="lead mb-0">All types of businesses need access to development resources, so
                                we give you the
                                option to decide how much you need to use.</p>
                        </div>
                    </div>
                </div>
                <!-- / .row -->
                <div class="row">
                    <div class="col-12 col-lg-3 col-md-6 mb-8 mb-lg-0">
                        <div class="text-center hover-translate p-5">
                            <div class="mb-3">
                                <img class="img-fluid rounded-top" src="/assets/v2/images/team/01.png" alt="">
                            </div>
                            <div>
                                <h6 class="mb-1">Vinit Saw</h6>
                                <small class="text-muted mb-3 d-block">Manager</small>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item"><a class="text-muted" href="#"><i
                                                class="la la-facebook h4"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a class="text-muted h6" href="#"><i
                                                class="la la-dribbble h4"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a class="text-muted h6" href="#"><i
                                                class="la la-twitter h4"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a class="text-muted h6" href="#"><i
                                                class="la la-linkedin h4"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-6 mb-8 mb-lg-0">
                        <div class="text-center shadow hover-translate p-5">
                            <div class="mb-3">
                                <img class="img-fluid rounded-top" src="/assets/v2/images/team/02.png" alt="">
                            </div>
                            <div>
                                <h6 class="mb-1">Nina Loe</h6>
                                <small class="text-muted mb-3 d-block">Ceo</small>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item"><a class="text-muted" href="#"><i
                                                class="la la-facebook h4"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a class="text-muted h6" href="#"><i
                                                class="la la-dribbble h4"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a class="text-muted h6" href="#"><i
                                                class="la la-twitter h4"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a class="text-muted h6" href="#"><i
                                                class="la la-linkedin h4"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-6 mb-8 mb-md-0">
                        <div class="text-center hover-translate p-5">
                            <div class="mb-3">
                                <img class="img-fluid rounded-top" src="/assets/v2/images/team/03.png" alt="">
                            </div>
                            <div>
                                <h6 class="mb-1">Renut John</h6>
                                <small class="text-muted mb-3 d-block">Founder</small>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item"><a class="text-muted" href="#"><i
                                                class="la la-facebook h4"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a class="text-muted h6" href="#"><i
                                                class="la la-dribbble h4"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a class="text-muted h6" href="#"><i
                                                class="la la-twitter h4"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a class="text-muted h6" href="#"><i
                                                class="la la-linkedin h4"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-6">
                        <div class="text-center hover-translate p-5">
                            <div class="mb-3">
                                <img class="img-fluid rounded-top" src="/assets/v2/images/team/04.png" alt="">
                            </div>
                            <div>
                                <h6 class="mb-1">Biton Leeny</h6>
                                <small class="text-muted mb-3 d-block">Supervisor</small>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item"><a class="text-muted" href="#"><i
                                                class="la la-facebook h4"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a class="text-muted h6" href="#"><i
                                                class="la la-dribbble h4"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a class="text-muted h6" href="#"><i
                                                class="la la-twitter h4"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a class="text-muted h6" href="#"><i
                                                class="la la-linkedin h4"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--team end-->


        <!--pricing start-->

        <section>
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-12 col-md-12 col-lg-4 order-lg-1 mb-8 mb-lg-0">
                        <div class="mb-0"> <span class="badge badge-primary-soft p-2 font-w-6">
                                Price Table
                            </span>
                            <h2 class="mt-3 font-w-5">Simple, Fair and affordable prices for all.</h2>
                            <p class="lead mb-0">All types of businesses need access to development resources, so
                                we give you the
                                option to decide how much you need to use.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-8">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6">
                                <!-- Card -->
                                <div class="card border-0">
                                    <!-- Body -->
                                    <div class="card-body py-11 px-6">
                                        <!-- Badge -->
                                        <div class="text-center mb-5"> <span class="badge text-dark shadow">
                                                <span class="h6 text-uppercase">Monthly</span>
                                            </span>
                                        </div>
                                        <!-- Price -->
                                        <div class="d-flex justify-content-center"> <span class="h2 mb-0 mt-2">$</span>
                                            <span class="price display-2">59</span>
                                            <span class="h2 align-self-end mb-1">/mo</span>
                                        </div>
                                        <!-- Text -->
                                        <p class="text-center text-muted mb-6 mb-md-8">Per user</p>
                                        <!-- Features -->
                                        <div class="d-flex align-items-start justify-content-between">
                                            <!-- Text -->
                                            <p>Responsive landing pages</p>
                                            <!-- Check -->
                                            <div class="ms-4"> <i class="la la-check text-primary fw-bold"></i>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-start justify-content-between">
                                            <!-- Text -->
                                            <p>Free Custom Domain</p>
                                            <!-- Check -->
                                            <div class="ms-4"> <i class="la la-check text-primary fw-bold"></i>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-start justify-content-between">
                                            <!-- Text -->
                                            <p>Flexible, simple license</p>
                                            <!-- Check -->
                                            <div class="ms-4"> <i class="la la-check text-primary fw-bold"></i>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-start justify-content-between">
                                            <!-- Text -->
                                            <p>Monthly updates</p>
                                            <!-- Check -->
                                            <div class="ms-4"> <i class="la la-check text-primary fw-bold"></i>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-start justify-content-between">
                                            <!-- Text -->
                                            <p>Outstanding Support</p>
                                            <!-- Check -->
                                            <div class="ms-4"> <i class="la la-check text-primary fw-bold"></i>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-start justify-content-between">
                                            <!-- Text -->
                                            <p>Happy Customers</p>
                                            <!-- Check -->
                                            <div class="ms-4"> <i class="la la-check text-primary fw-bold"></i>
                                            </div>
                                        </div>
                                        <!-- Button --> <a href="#" class="btn btn-block btn-primary mt-5">
                                            Choose Packege
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <!-- Card -->
                                <div class="card shadow border-0">
                                    <!-- Body -->
                                    <div class="card-body py-11 px-6">
                                        <!-- Badge -->
                                        <div class="text-center mb-5"> <span class="badge text-dark shadow">
                                                <span class="h6 text-uppercase">Yearly</span>
                                            </span>
                                        </div>
                                        <!-- Price -->
                                        <div class="d-flex justify-content-center"> <span class="h2 mb-0 mt-2">$</span>
                                            <span class="price display-2">89</span>
                                            <span class="h2 align-self-end mb-1">/mo</span>
                                        </div>
                                        <!-- Text -->
                                        <p class="text-center text-muted mb-6 mb-md-8">Per user</p>
                                        <!-- Features -->
                                        <div class="d-flex align-items-start justify-content-between">
                                            <!-- Text -->
                                            <p>Responsive landing pages</p>
                                            <!-- Check -->
                                            <div class="ms-4"> <i class="la la-check text-primary fw-bold"></i>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-start justify-content-between">
                                            <!-- Text -->
                                            <p>Free Custom Domain</p>
                                            <!-- Check -->
                                            <div class="ms-4"> <i class="la la-check text-primary fw-bold"></i>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-start justify-content-between">
                                            <!-- Text -->
                                            <p>Flexible, simple license</p>
                                            <!-- Check -->
                                            <div class="ms-4"> <i class="la la-check text-primary fw-bold"></i>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-start justify-content-between">
                                            <!-- Text -->
                                            <p>Monthly updates</p>
                                            <!-- Check -->
                                            <div class="ms-4"> <i class="la la-check text-primary fw-bold"></i>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-start justify-content-between">
                                            <!-- Text -->
                                            <p>Outstanding Support</p>
                                            <!-- Check -->
                                            <div class="ms-4"> <i class="la la-check text-primary fw-bold"></i>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-start justify-content-between">
                                            <!-- Text -->
                                            <p>Happy Customers</p>
                                            <!-- Check -->
                                            <div class="ms-4"> <i class="la la-check text-primary fw-bold"></i>
                                            </div>
                                        </div>
                                        <!-- Button --> <a href="#" class="btn btn-block btn-primary mt-5">
                                            Choose Package
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / .row -->
            </div>
            <!-- / .container -->
        </section>

        <!--pricing end-->


        <!--blog start-->

        <section>
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-12 col-md-12 col-lg-8 mb-8 mb-lg-0">
                        <div class="mb-8"> <span class="badge badge-primary-soft p-2 font-w-6">
                                Latest News
                            </span>
                            <h2 class="mt-3 font-w-5">From Our Blog List Latest Feed</h2>
                            <p class="lead mb-0">All types of businesses need access to development resources, so
                                we give you the
                                option to decide how much you need to use.</p>
                        </div>
                    </div>
                </div>
                <!-- / .row -->
                <div class="row">
                    <div class="col-12 col-lg-6 mb-8 mb-lg-0">
                        <!-- Blog Card -->
                        <div class="card border-0 shadow">
                            <div
                                class="position-absolute bg-white shadow-primary text-center p-2 rounded ms-3 mt-3 z-index-1">
                                15
                                <br>July
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-md-5">
                                    <img src="/assets/v2/images/blog/01.png" class="img-fluid" alt="...">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body"> <a class="d-inline-block text-muted mb-2"
                                            href="#">Sass</a>
                                        <h2 class="h5 font-weight-medium">
                                            Bootsland Perfect Performance landing Page
                                        </h2>
                                        <p>Businesses need access to development resources serspiciatis.</p>
                                        <a class="btn-link" href="blog-single.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Blog Card -->
                    </div>
                    <div class="col-12 col-lg-6 mb-8 mb-lg-0">
                        <!-- Blog Card -->
                        <div class="card border-0 shadow">
                            <div
                                class="position-absolute bg-white shadow-primary text-center p-2 rounded ms-3 mt-3 z-index-1">
                                15
                                <br>July
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-md-5">
                                    <img src="/assets/v2/images/blog/02.png" class="img-fluid" alt="...">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body"> <a class="d-inline-block text-muted mb-2"
                                            href="#">Marketing</a>
                                        <h2 class="h5 font-weight-medium">
                                            The most powerfull template that make you.
                                        </h2>
                                        <p>Businesses need access to development resources serspiciatis.</p>
                                        <a class="btn-link" href="blog-single.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Blog Card -->
                    </div>
                </div>
            </div>
        </section>

        <!--blog end-->

    </div>

    <!--body content end-->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#accuill-form').on('submit', function(e) {
                e.preventDefault();

                const form = $(this);
                const submitButton = $('#accuill-form-btn-submit');

                if (!$('input[name=phone_number-accuill-form]').val() || !/^\d+$/.test($(
                        'input[name=phone_number-accuill-form]').val())) {
                    $('input[name=phone_number-accuill-form]').addClass('is-invalid');
                    $('#phone_number-accuill-form-error').text(
                        "SVP, veuillez entrer votre numéro de telephone");
                    return;
                } else {
                    $('input[name=phone_number-accuill-form]').removeClass('is-invalid');
                    $('#phone_number-accuill-form-error').text("");
                }

                if ($('input[name=phone_number-accuill-form]').val().length != 10 || !/^\d+$/.test($(
                        'input[name=phone_number-accuill-form]').val())) {
                    $('input[name=phone_number-accuill-form]').addClass('is-invalid');
                    $('#phone_number-accuill-form-error').text(
                        "SVP, veuillez entrer un numéro de telephone valide");
                    return;
                } else {
                    $('input[name=phone_number-accuill-form]').removeClass('is-invalid');
                    $('#phone_number-accuill-form-error').text("");
                }

                submitButton.html(`
                    <i class="fa fa-spinner fa-pulse"></i>
                    `).css("cursor", "not-allowed").attr("disabled", true);

                $.ajax({
                    type: "POST",
                    url: "{{ route('leads.store') }}",
                    data: {
                        _token: "{{ csrf_token() }}",
                        // full_name: $('input[name=full_name]').val(),
                        phone_number: $('input[name=phone_number-accuill-form]').val(),
                    },
                    success: function(response) {
                        submitButton.html("Prendre Rendez-Vous").attr("disabled", false).css(
                            "cursor",
                            "pointer");
                        Swal.fire({
                            icon: "success",
                            title: "Félicitation",
                            html: "Votre numero de telephone a été envoyé avec succès.",
                        });
                    },
                    error: function(res, status, error) {
                        submitButton.text("Prendre Rendez-Vous").attr("disabled", false).css(
                            "cursor",
                            "pointer");
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            html: res.responseJSON.message,
                        });
                    }
                });
            });
        });
    </script>

@endsection
