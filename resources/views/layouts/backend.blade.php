<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8" />
	<title>Restaurant Management System</title>

	<!-- Site favicon -->
	<!-- <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/')}}backend/vendors/images/apple-touch-icon.png" /> -->
	<link rel="shortcut icon" href="{{asset('/')}}images/favicon.png" type="image/x-icon">
	<link rel="icon" href="{{asset('/')}}images/favicon.png" type="image/x-icon">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('/')}}backend/vendors/styles/core.css" />
	<link rel="stylesheet" type="text/css" href="{{asset('/')}}backend/vendors/styles/icon-font.min.css" />
	<link rel="stylesheet" type="text/css" href="{{asset('/')}}backend/src/plugins/datatables/css/dataTables.bootstrap4.min.css" />
	<link rel="stylesheet" type="text/css" href="{{asset('/')}}backend/src/plugins/datatables/css/responsive.bootstrap4.min.css" />

	@yield('stylesheet')
	<link rel="stylesheet" type="text/css" href="{{asset('/')}}backend/vendors/styles/style.css" />

</head>

<body>
	<!--<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo">
				<img src="{{asset('/')}}/images/logo.jpg" alt="" />
			</div>
			<div class="loader-progress" id="progress_div">
				<div class="bar" id="bar1"></div>
			</div>
			<div class="percent" id="percent1">0%</div>
			<div class="loading-text">Loading...</div>
		</div>
	</div> -->

	@include('layouts.admin.header')

	@include('layouts.admin.sidebar')



	<div class="main-container">
		@yield('content')
	</div>

	<!-- js -->
	<script src="{{asset('/')}}backend/vendors/scripts/core.js"></script>
	<script src="{{asset('/')}}backend/vendors/scripts/script.min.js"></script>
	<script src="{{asset('/')}}backend/vendors/scripts/process.js"></script>
	<script src="{{asset('/')}}backend/vendors/scripts/layout-settings.js"></script>
	<script src="{{asset('/')}}backend/src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="{{asset('/')}}backend/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="{{asset('/')}}backend/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="{{asset('/')}}backend/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="{{asset('/')}}backend/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<script src="{{asset('/')}}backend/vendors/scripts/dashboard3.js"></script>
	<!-- Google Tag Manager (noscript) -->

	@yield('script')

</body>

</html>