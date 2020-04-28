<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<!-- Required Metadata -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Title -->
	<title>It's Pawsibal - @yield('title')</title>
	
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Teko:wght@600&display=swap" rel="stylesheet">

	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/flipcards.css') }}">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	<!-- Font Awesome Icons -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	@section('navbar')
	@include('layouts.navbar')
	@show

	<!-- Main Content Section -->
	<div>
		@yield('content')
	</div>

	<!-- Scripts -->
	<script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
	            <!-- <script type="text/javascript" src="{{ asset('js./maps.js') }}"></script> -->
	<!-- <script type="text/javascript" src="{{ asset('js/try.js') }}"></script>
            <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6NqKaeopGxcPNpfE8jEIF04J8Aa1nVT8&callback=initMap">
          </script> -->

    <!-- Scripts for AOS.js -->
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

	<script type="text/javascript">
		AOS.init({
			once: true
		});
	</script>
</body>
</html>