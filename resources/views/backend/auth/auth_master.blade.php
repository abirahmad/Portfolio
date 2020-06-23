<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title') | Log in</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	@include('backend.layouts.partials.styles')

</head>
<body class="hold-transition login-page">
	<!-- Loader -->
	@include('backend.layouts.partials.loader')
	<!-- Loader -->
	
	<!-- Main Content -->
	@yield('login-content')
	<!-- Main Content -->
	

	<!-- Scripts -->
	@include('backend.layouts.partials.scripts')
	<!-- Scripts -->

</body>
</html>
