<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!--<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">-->	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/assets/css/main.css">
	@yield('styles')
	<title>
		@yield('title', 'Magatzem d\'Ars')
	</title>
</head>

<body>
	<div class="wrap">

		<header>

			@include('layouts.partials.navbar')

		</header>

		@include('layouts.flash')

		<div class="main">

			@yield('content')

		</div>

		<footer class="container">

			<div class="copyright">

				@yield('footer')

			</div>

			@include('layouts.partials.copyright')

		</footer>


	</div>

	<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="/assets/js/utils.js"></script>
	@yield('scripts')
	
</body>
</html>