<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<!-- Place favicon.ico in the root directory -->
	<link rel="apple-touch-icon" href="apple-touch-icon.html">
	<link rel="icon" href="favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,700,900" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
	<title>Dashcore - Premium Software & Startup HTML</title>
	<link rel="stylesheet" href="{!! asset('admin/css/vendor.min.css') !!}">
	<link rel="stylesheet" href="{!! asset('admin/css/dashcore.min.css') !!}">
	@yield('style')
</head>
<body>
	@yield('content')
	<script src="{!! asset('admin/js/lib.min.js') !!}"></script>
	<script src="{!! asset('admin/js/dashcore.min.js') !!}"></script>
	@yield('script')
<!-- endinject -->
</body>
</html>