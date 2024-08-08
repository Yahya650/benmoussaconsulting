<header class="main-header">

    <!-- Header Top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <!-- Top Left -->
                <div class="top-left clearfix">
                    <div class="text"><span>Temps de travail:</span> Du lundi au vendredi de 9h à 17h</div>
                </div>

                <!-- Top Right -->
                <div class="top-right pull-right clearfix">
                    <!-- Social Box -->
                    <ul class="social-box">
                        <li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
                        <li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
                        <li><a href="https://www.behance.com/" class="fa fa-behance"></a></li>
                        <li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
                        <li><a href="https://youtube.com/" class="fa fa-youtube-play"></a></li>
                    </ul>
                    <div class="text">Appelez pour une consultation gratuite: <a
                            href="tel:++212663520502">+212 663-520502</a></div>
                </div>

            </div>
        </div>
    </div>

    <!-- Header Lower -->
    <div class="header-lower">
        <div class="auto-container clearfix">

            <!-- Logo Box -->
            <div class="pull-left logo-box">
                <div class="logo"><a href="{{ route('web.home') }}"><img src="/web/images/CoachBen.png" alt=""
                            title=""></a></div>
            </div>

            <!-- Nav Outer -->
            <div class="nav-outer clearfix">
                <!-- Mobile Navigation Toggler -->
                <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md">
                    <div class="navbar-header">
                        <!-- Toggle Button -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                        <ul class="navigation clearfix">
                            <li class="">
                                <a href="{{ route('web.home') }}">Accueil</a>
                            </li>
                            <li class="">
                                <a href="{{ route('lead_form') }}">Appointment</a>
                            </li>
                            <li class="">
                                <a href="{{ route('web.coaching.types') }}">Types de coaching</a>
                            </li>
                            <li class="">
                                <a href="{{ route('web.contact') }}">Contactez-nous</a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <!-- Main Menu End-->
                <div class="outer-box clearfix">
                    <div class="search-box-btn transition-300ms"><span class="icon fa fa-search"></span></div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Header Lower -->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="index.html" title=""><img src="/assets/images/logo-small.png" alt=""
                        title=""></a>
            </div>
            <!--Right Col-->
            <div class="pull-right">

                <!-- Main Menu -->
                <nav class="main-menu">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav>
                <!-- Main Menu End-->

                <!-- Mobile Navigation Toggler -->
                <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>

            </div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="/assets/images/logo-small.png" alt=""
                        title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
        </nav>
    </div><!-- End Mobile Menu -->

</header>
