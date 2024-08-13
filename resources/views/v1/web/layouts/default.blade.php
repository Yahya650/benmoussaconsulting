<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>MohamedBenMoussa - @yield('title')</title>
    <!-- Stylesheets -->
    <link href="/web/css/bootstrap.css" rel="stylesheet">
    <link href="/web/css/style.css" rel="stylesheet">
    <link href="/web/css/responsive.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

    <link rel="shortcut icon" href="/web/images/favicon1.png" type="image/x-icon">
    <link rel="icon" href="/web/images/favicon1.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9533486053157001"
        crossorigin="anonymous"></script>
</head>




<body class="hidden-bar-wrapper">

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>
        <!-- End Preloader -->

        <!-- Header Style One -->
        @include('v1.web.layouts.template.header')
        <!-- End Main Header -->

        <!-- Sidebar Cart Item -->
        @include('v1.web.layouts.template.sidebar')
        <!-- END sidebar widget item -->

        @yield('content')

        <!-- Main Footer -->
        @include('v1.web.layouts.template.footer')

    </div>
    <!-- End PageWrapper -->

    <!-- Search Popup -->
    <div class="search-popup">
        <button class="close-search style-two"><span class="flaticon-cancel-1"></span></button>
        <button class="close-search"><span class="flaticon-up-arrow"></span></button>
        <form method="post" action="blog.html">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search Here" required="">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>
    <!-- End Header Search -->

    <!-- Scroll To Top -->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

    <script src="/web/js/jquery.js"></script>
    <script src="/web/js/popper.min.js"></script>
    <script src="/web/js/bootstrap.min.js"></script>

    <!-- Revolution Slider -->
    <script src="/web/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="/web/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="/web/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="/web/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="/web/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="/web/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="/web/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="/web/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="/web/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="/web/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="/web/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="/web/plugins/revolution/js/main-slider-script.js"></script>
    <!-- For Js Library -->

    <script src="/web/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/web/js/jquery.fancybox.js"></script>
    <script src="/web/js/appear.js"></script>
    <script src="/web/js/parallax.min.js"></script>
    <script src="/web/js/tilt.jquery.min.js"></script>
    <script src="/web/js/jquery.paroller.min.js"></script>
    <script src="/web/js/owl.js"></script>
    <script src="/web/js/wow.js"></script>
    <script src="/web/js/validate.js"></script>
    <script src="/web/js/nav-tool.js"></script>
    <script src="/web/js/jquery-ui.js"></script>
    <script src="/web/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</body>

</html>
