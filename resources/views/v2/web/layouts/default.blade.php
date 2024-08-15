<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themeht.com/template/bootsland/html/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 09:45:34 GMT -->

<head>

    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>MohamedBenMoussa - @yield('title')</title>

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="/assets/v2/images/favicon.ico" />

    <!-- inject css start -->

    <!--== bootstrap -->
    <link href="/assets/v2/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!--== animate -->
    <link href="/assets/v2/css/animate.css" rel="stylesheet" type="text/css" />

    <!--== line-awesome -->
    <link href="/assets/v2/css/line-awesome.min.css" rel="stylesheet" type="text/css" />

    <!--== themify-icons -->
    <link href="/assets/v2/css/themify-icons.css" rel="stylesheet" type="text/css" />

    <!--== magnific-popup -->
    <link href="/assets/v2/css/magnific-popup.css" rel="stylesheet" type="text/css" />

    <!--== owl.carousel -->
    <link href="/assets/v2/css/owl.carousel.css" rel="stylesheet" type="text/css" />

    <!--== lightslider -->
    <link href="/assets/v2/css/lightslider.min.css" rel="stylesheet" type="text/css" />

    <!--== spacing -->
    <link href="/assets/v2/css/spacing.css" rel="stylesheet" type="text/css" />

    <!--== theme.min -->
    <link href="/assets/v2/css/theme.min.css" rel="stylesheet" />

    <!-- inject css end -->


    @yield('seo')

</head>

<body>

    <!-- page wrapper start -->

    <div class="page-wrapper">

        <!-- preloader start -->

        <div id="ht-preloader">
            <div class="loader clear-loader">
                <span></span>
                {{-- <p>BootsLand</p> --}}
            </div>
        </div>

        <!-- preloader end -->

        <!--header start-->

        @include('v2.web.layouts.template.header')

        <!--header end-->


        @yield('content')


        <!--footer start-->

        @include('v2.web.layouts.template.footer')

        <!--footer end-->

    </div>

    <!-- page wrapper end -->


    <!--back-to-top start-->

    <div class="scroll-top"><a class="smoothscroll" href="#top"><i class="las la-angle-up"></i></a></div>

    <!--back-to-top end-->

    <!-- inject js start -->

    <script src="/assets/v2/js/theme-plugin.js"></script>
    <script src="/assets/v2/js/theme-script.js"></script>

    <!-- inject js end -->

</body>


<!-- Mirrored from themeht.com/template/bootsland/html/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 09:46:07 GMT -->

</html>
