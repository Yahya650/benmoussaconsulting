<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="/assets/leads_form/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/leads_form/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/leads_form/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="/assets/leads_form/css/iofrm-theme27.css">
    <script src="/web/js/jquery.js"></script>
    @yield('style')
</head>

<body>

    @include('v1.leads_form.layouts.template.header')

    @yield('content')

    @include('v1.leads_form.layouts.template.footer')

    <script src="/assets/leads_form/js/jquery.min.js"></script>
    <script src="/assets/leads_form/js/popper.min.js"></script>
    <script src="/assets/leads_form/js/bootstrap.min.js"></script>
    <script src="/assets/leads_form/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
