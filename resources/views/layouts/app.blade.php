<!doctype html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Ereke</title>
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
</head>
<body>

<x-header/>

@yield('content')

<x-footer/>

</body>
</html>
