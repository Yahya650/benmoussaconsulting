<header class="main-header">

    <!-- Header Top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <!-- Top Left -->
                <div class="top-left clearfix">
                    <div class="text"><span>Horaires de travail:</span>
                        Lundi -> 14:00 - 19:30 /
                        Mardi-Vendredi -> 09:30 - 19:30 /
                        Samedi -> 9:30 - 13:30
                    </div>
                </div>

                <!-- Top Right -->
                <div class="top-right pull-right clearfix">
                    <!-- Social Box -->
                    <ul class="social-box">
                        <li>
                            <a href="https://web.facebook.com/coachbenmoussa/" target="_blank">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="tel:+212520816447" target="_blank">
                                <i class="fa-solid fa-phone-volume"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tiktok.com/@mrbenmoussamohamed" target="_blank">
                                <i class="fa-brands fa-tiktok"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://wa.me/212665228542" target="_blank">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/mrbenmoussamohamed/" target="_blank">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                    {{-- <div class="text">Pour Contacter-nous :
                        <a href="tel:+212520816447">+212 520-816447</a> /
                        <a href="https://wa.me/212665228542">+212 665-228542</a>
                    </div> --}}
                </div>

            </div>
        </div>
    </div>

    <!-- Header Lower -->
    <div class="header-lower">
        <div class="auto-container clearfix">

            <!-- Logo Box -->
            <div class="pull-left logo-box">
                <div class="logo"><a href="{{ route('web.home') }}">
                        <img src="/web/Sans titre-2.png" width="100px" alt="" title="">
                        {{-- Mohamed BenMoussa --}}
                    </a></div>
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
                                <a href="{{ route('lead_form') }}">Prendre Rendez-Vous</a>
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
        <div class="auto-container clearfix d-flex align-items-center justify-content-between">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="{{ route('web.home') }}" title=""><img src="/web/Sans titre-2.png" alt=""
                        width="100px" title=""></a>
            </div>
            <!--Right Col-->
            <div class="pull-right d-flex justify-content-end w-100">

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
            <div class="nav-logo"><a href="{{ route('web.home') }}"><img src="/web/Sans titre-2.png" width="100px"
                        alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
        </nav>
    </div><!-- End Mobile Menu -->

</header>
