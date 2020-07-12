<!DOCTYPE HTML>
<!--
	Phase Shift by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Phase Shift by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
			<link rel="stylesheet" href="/css/skel.css" />
			<link rel="stylesheet" href="/css/style.css" />
			<link rel="stylesheet" href="/css/style-wide.css" />
	</head>

	<body>

	
		
		<!-- Wrapper -->
			<div class="wrapper style1">

                <!-- Header -->

				@include('includes.header');
				

				<!-- Banner -->

				@include('includes.banner');

				@yield('showcard')

				@yield('create')

				@yield('content')

				@yield('editcard')

				
                 <!-- Main -->

			    @include('includes.main')

	        </div>
                   <!-- Footer -->

                @include('includes.footer');
	</body>
</html>