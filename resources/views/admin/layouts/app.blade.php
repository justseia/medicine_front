<!doctype html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Dental Clinic</title>
	<link rel="stylesheet" href="{{ asset('css/vendors_css.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/skin_color.css') }}" />
</head>
<body>

@yield('content')

<script src="{{ asset('js/vendors.min.js') }}"></script>
<script src="{{ asset('js/pages/chat-popup.js') }}"></script>
<script src="{{ asset('icons/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('vendor_components/datatable/datatables.min.js') }}"></script>
<script src="{{ asset('js/template.js') }}"></script>
<script src="{{ asset('js/pages/patients.js') }}"></script>


</body>
</html>
