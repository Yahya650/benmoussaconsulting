@extends('v1.web.layouts.default')


@section('seo')
    {!! seo($seoData) !!}
    <meta name="keywords"
        content="benmoussa consulting, Mohamed BenMoussa, Formateur international, Coach certifié, Comportements relationnels, Développement humain, Améliorer les relations, Éducation sexuelle, Coaching en relations, Conseils relationnels, Stratégies pratiques, Vie épanouissante, Développement personnel, État d'esprit positif,Relations intimes, Vie équilibrée, Coaching personnalisé, Cours de développement personnel, Radio coaching, Épanouissement personnel, Relations significatives, Relever des défis, Obstacles, Gérer les émotions, Conflits de couple, Divorce, Perte d'emploi, Problèmes comportementaux, Prendre la parole sans stresser, Aimer et vous faire aimer, Dire non, Devenir moins naïf, Gérer les émotions
Gérer les conflits de couple, Gérer les relations professionnelles et personnelles, Communiquer efficacement, Prendre des décisions, Gérer la pression de la société sur votre style de vie, Gérer une perte d'emploi, Séparation ou  Divorce, Souffrance émotionnelle, Infidélité
">
    <meta property="og:description"
        content="Mohamed BenMoussa est bien plus qu'un coach ordinaire. Avec des années d'expérience et une compréhension profonde des complexités de la vie moderne, il offre des conseils perspicaces et des stratégies pratiques pour aider les individus à surmonter les obstacles, à développer un état d'esprit positif et à établir des relations significatives et épanouissantes.">

@endsection

@section('title', 'Les différents types de coaching individuel')
@section('content')
    <!-- Page Title Section -->
    <section class="page-title" style="background-image: url(/web/images/main-slider/image-1.png)">
        <div class="auto-container">
            <div class="content">
                <div class="text">Types de coaching individuel</div>
                <h1>Mohamed BenMoussa</h1>
            </div>
            <div class="breadcrumb-outer">
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('web.home', ['lang' => session()->get('lang')]) }}">Accueil</a></li>
                    <li>Les différents types de coaching individuel</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title Section -->

    <!-- Experiance Section -->
    <section class="experiance-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Experiance Column -->
                <div class="experiance-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="experiance">
                            <img src="/web/images/psychology.jpg" alt="" />
                        </div>
                        <div class="peoples">Avoir un équilibre vie privée / vie professionnelle</div>
                        <div class="text-center">
                            <a href="tel:+212520816447" class="theme-btn phone-btn"><span
                                    class="icon flaticon-call"></span>+212 520-816447</a>
                        </div>
                    </div>
                </div>

                <!-- Blocks Column -->
                <div class="blocks-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="row clearfix">
                            <!-- Column -->
                            <div class="column col-lg-6 col-md-6 col-sm-12">

                                <!-- Feature Block -->
                                <div class="feature-block">
                                    <div class="inner-box">
                                        <div class="content">
                                            <div class="icon flaticon-work-table"></div>
                                            <h5>Coaching de développement</h5>
                                            <div class="text">Ce type de coaching convient aux situations de prise de
                                                poste.</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Feature Block -->
                                <div class="feature-block">
                                    <div class="inner-box">
                                        <div class="content">
                                            <div class="icon flaticon-notepad"></div>
                                            <h5>Coaching de prise de décision</h5>
                                            <div class="text">Conscientiser son processus de décision.</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Feature Block -->
                                <div class="feature-block">
                                    <div class="inner-box">
                                        <div class="content">
                                            <div class="icon flaticon-globe-1"></div>
                                            <h5>Coaching de crise</h5>
                                            <div class="text">C’est un coaching de courte durée avec des séances
                                                rapprochées.</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Column -->
                            <div class="column col-lg-6 col-md-6 col-sm-12">

                                <!-- Feature Block -->
                                <div class="feature-block">
                                    <div class="inner-box">
                                        <div class="content">
                                            <div class="icon flaticon-science-research"></div>
                                            <h5>Coaching de soutien</h5>
                                            <div class="text">La personne a vécu une situation dramatique.</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Feature Block -->
                                <div class="feature-block">
                                    <div class="inner-box">
                                        <div class="content">
                                            <div class="icon flaticon-trophy"></div>
                                            <h5>Coaching de transition</h5>
                                            <div class="text">La personne est en transition professionnelle.</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Experiance Section -->
    <!-- Skill Section -->
    <section class="skill-section pt-0">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Skill Column -->
                <div class="skill-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="title color-three">Coach Benmoussa</div>
                            <h2>Qu'est-ce qu'un coaching professionnel ?</h2>
                            <div class="text">Dans le coaching professionnel, le coach appréhende donc le coaché en tant
                                qu’individu membre d’un groupe professionnel. Il s’intéresse exclusivement à sa dimension
                                personnelle immergée dans sa dimension professionnelle.</div>
                        </div>

                        <!-- Skills -->
                        <div class="skills">
                            <!-- Skill Item -->
                            <div class="skill-item">
                                <div class="skill-header clearfix">
                                    <div class="skill-title">Soutien émotionnel et stratégies de gestion </div>
                                </div>
                                <div class="skill-bar">
                                    <div class="bar-inner">
                                        <div class="bar progress-line" data-width="70">
                                            <div class="skill-percentage">
                                                <div class="count-box"><span class="count-text" data-speed="2000"
                                                        data-stop="70">0</span>%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Skill Item -->
                            <div class="skill-item">
                                <div class="skill-header clearfix">
                                    <div class="skill-title">Amélioration des relations interpersonnelles</div>
                                </div>
                                <div class="skill-bar">
                                    <div class="bar-inner">
                                        <div class="bar progress-line" data-width="64">
                                            <div class="skill-percentage">
                                                <div class="count-box"><span class="count-text" data-speed="2000"
                                                        data-stop="64">0</span>%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Skill Item -->
                            <div class="skill-item">
                                <div class="skill-header clearfix">
                                    <div class="skill-title">Développement de l'estime de soi et de la confiance</div>
                                </div>
                                <div class="skill-bar">
                                    <div class="bar-inner">
                                        <div class="bar progress-line" data-width="80">
                                            <div class="skill-percentage">
                                                <div class="count-box"><span class="count-text" data-speed="2000"
                                                        data-stop="80">0</span>%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image titlt" data-tilt data-tilt-max="3">
                            <img src="/web/images/counseling.jpg" alt="" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Skill Section -->

    {{-- <!-- Sponsors Section -->
    <section class="sponsors-section">
		<div class="big-text">Clients</div>
        <div class="auto-container">
            <div class="sponsors-outer">
                <!-- Sponsors Carousel -->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img width="20%" src="/web/images/chadafm.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img width="20%" src="/web/images/telemaroc.jpg" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="/we/images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="/assets/images/clients/4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="/assets/images/clients/5.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="/assets/images/clients/6.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="/assets/images/clients/1.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="/assets/images/clients/2.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="/assets/images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="/assets/images/clients/4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="/assets/images/clients/5.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="/assets/images/clients/6.png" alt=""></a></figure></li>
                </ul>
            </div>
            
        </div>
    </section> --}}
    <!-- End Sponsors Section -->
@endsection
