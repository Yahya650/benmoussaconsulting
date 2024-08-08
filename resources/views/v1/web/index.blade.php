@extends('v1.web.layouts.default')

@section('title', 'Accueil')

@section('content')
    <!-- Main Slider -->
    <section class="main-slider">
        <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                <ul>
                    <li data-transition="slidingoverlayhorizontal" data-description="Slide Description" data-index="rs-1688"
                        data-slotamount="default" data-thumb="/web/images/main-slider/image-1.png" data-title="Slide Title">
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10"
                            data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina=""
                            src="/web/images/main-slider/image-1.png">

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['1100','800','800','500']"
                            data-whitespace="normal" data-hoffset="['15','15','15','15']"
                            data-voffset="['-150','-240','-210','-210']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            style="">
                            <div class="title">Déverrouillez votre mindset</div>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['1100','800','800','500']"
                            data-whitespace="normal" data-hoffset="['15','15','15','15']"
                            data-voffset="['-30','-100','-100','-110']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"delay":0,"split":"chars","splitdelay":0.05,"speed":2000,"frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"power4.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                            style="">
                            <h1>Coach Benmoussa <br> Relations & Développement</h1>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['1100','800','800','500']"
                            data-whitespace="normal" data-hoffset="['15','15','15','15']"
                            data-voffset="['100','40','15','0']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"power3.out"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                            style="">
                            <div class="text">Apprenez à améliorer vos relations avec votre partenaire et à mieux
                                comprendre
                                l'éducation sexuelle avec Benmoussa, un coach certifié en comportements relationnels et
                                développement humain. Inscrivez-vous dès aujourd'hui à des cours et des leçons.
                            </div>
                        </div>

                        <div class="tp-caption tp-resizeme" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['700','700','700','500']"
                            data-whitespace="normal" data-hoffset="['15','15','15','15']"
                            data-voffset="['190','150','105','100']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            style="">
                            <div class="button-box">
                                <a href="services.html" class="theme-btn btn-style-two"><span class="txt">Inscrivez-vous
                                        maintenant</span></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Main Slider -->

    <!-- About Section -->
    <section id="portfolio" class="course-section-two">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title color-four">Coach Benmoussa</div>
                <h2>Nous sommes actifs sur ChadaFM</h2>
            </div>
            <div class="row clearfix">
                <!-- Course Block -->
                <div class="course-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="course-1-link.html" class="lightbox-image overlay-box">
                                <img class="transition-500ms" src="course-1-image.jpg" alt="Course 1" />
                            </a>
                        </div>
                        <div class="lower-content">
                            <h5><a href="course-1-link.html" class="lightbox-image overlay-box">Titre du Cours 1</a></h5>
                            <ul class="post-info">
                                <li><span class="icon flaticon-book-1"></span>123 Clients</li>
                                <li><span class="icon flaticon-trophy"></span>Statut du Cours 1</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="course-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="course-2-link.html" class="lightbox-image overlay-box">
                                <img class="transition-500ms" src="course-2-image.jpg" alt="Course 2" />
                            </a>
                        </div>
                        <div class="lower-content">
                            <h5><a href="course-2-link.html" class="lightbox-image overlay-box">Titre du Cours 2</a></h5>
                            <ul class="post-info">
                                <li><span class="icon flaticon-book-1"></span>200 Clients</li>
                                <li><span class="icon flaticon-trophy"></span>Statut du Cours 2</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="course-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="course-3-link.html" class="lightbox-image overlay-box">
                                <img class="transition-500ms" src="course-3-image.jpg" alt="Course 3" />
                            </a>
                        </div>
                        <div class="lower-content">
                            <h5><a href="course-3-link.html" class="lightbox-image overlay-box">Titre du Cours 3</a></h5>
                            <ul class="post-info">
                                <li><span class="icon flaticon-book-1"></span>150 Clients</li>
                                <li><span class="icon flaticon-trophy"></span>Statut du Cours 3</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="course-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="450ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="course-4-link.html" class="lightbox-image overlay-box">
                                <img class="transition-500ms" src="course-4-image.jpg" alt="Course 4" />
                            </a>
                        </div>
                        <div class="lower-content">
                            <h5><a href="course-4-link.html" class="lightbox-image overlay-box">Titre du Cours 4</a></h5>
                            <ul class="post-info">
                                <li><span class="icon flaticon-book-1"></span>175 Clients</li>
                                <li><span class="icon flaticon-trophy"></span>Statut du Cours 4</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- Course Section -->
    <section class="course-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Title Block -->
                <div class="title-block col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box">
                        <div class="content">
                            <div class="title color-four">Découvrir plus</div>
                            <h2>Programmes de formation en relations & Développement humain</h2>
                        </div>
                    </div>
                </div>
                <!-- Course Blocks -->
                <div class="course-blocks col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">
                        <div class="course-block col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image">
                                    <a href="program-1-link.html">
                                        <img src="program-1-image.jpg" alt="Program 1 Title" />
                                    </a>
                                </div>
                                <div class="lower-content">
                                    <h5><a href="program-1-link.html">Titre du Programme 1</a></h5>
                                    <div class="text">Description du Programme 1</div>
                                </div>
                            </div>
                        </div>
                        <div class="course-block col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInRight" data-wow-delay="150ms" data-wow-duration="1500ms">
                                <div class="image">
                                    <a href="program-2-link.html">
                                        <img src="program-2-image.jpg" alt="Program 2 Title" />
                                    </a>
                                </div>
                                <div class="lower-content">
                                    <h5><a href="program-2-link.html">Titre du Programme 2</a></h5>
                                    <div class="text">Description du Programme 2</div>
                                </div>
                            </div>
                        </div>
                        <div class="course-block col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="image">
                                    <a href="program-3-link.html">
                                        <img src="program-3-image.jpg" alt="Program 3 Title" />
                                    </a>
                                </div>
                                <div class="lower-content">
                                    <h5><a href="program-3-link.html">Titre du Programme 3</a></h5>
                                    <div class="text">Description du Programme 3</div>
                                </div>
                            </div>
                        </div>
                        <div class="course-block col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInRight" data-wow-delay="450ms" data-wow-duration="1500ms">
                                <div class="image">
                                    <a href="program-4-link.html">
                                        <img src="program-4-image.jpg" alt="Program 4 Title" />
                                    </a>
                                </div>
                                <div class="lower-content">
                                    <h5><a href="program-4-link.html">Titre du Programme 4</a></h5>
                                    <div class="text">Description du Programme 4</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Course Section -->
@endsection
