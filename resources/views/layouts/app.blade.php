<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dental Clinic</title>
    <link rel="stylesheet" href="{{ asset('css/vendors_css.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/skin_color.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/remixicon.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/dark-mode.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}"/>
    @livewireStyles ()
</head>
<body>

<x-header/>

@yield('content')

<x-footer/>

@livewireScripts ()
<script src="{{ asset('js/vendors.min.js') }}"></script>
<script src="{{ asset('js/pages/chat-popup.js') }}"></script>
<script src="{{ asset('icons/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('vendor_components/datatable/datatables.min.js') }}"></script>
<script src="{{ asset('js/template.js') }}"></script>
<script src="{{ asset('js/pages/patients.js') }}"></script>

</body>
</html>
