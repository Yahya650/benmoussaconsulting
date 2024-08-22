<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" @if (app()->getLocale() == 'ar') dir="rtl" class="rtl" @endif>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="/web/images/favicon1.png" type="image/x-icon">
    <link rel="icon" href="/web/images/favicon1.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/assets/leads_form/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/assets/leads_form/font/flaticon.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/leads_form/css/style.css?v=0.0.1">
    @yield('seo')
    @yield('style')
    <style>
        /* General styles for RTL (Arabic) */
        .rtl {
            direction: rtl;
            text-align: right;
        }
    </style>
</head>

<body>

    @include('v1.leads_form.layouts.template.header')

    @yield('content')

    @include('v1.leads_form.layouts.template.footer')



    <script src="/assets/leads_form/js/jquery.min.js"></script>
    <script src="/assets/leads_form/js/bootstrap.min.js"></script>
    <script src="/assets/leads_form/js/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/leads_form/js/star-animation.js"></script>
    <script src="/assets/leads_form/js/validator.min.js"></script>
    <script src="/assets/leads_form/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
