<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>@yield('titulo')</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
		<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
		<meta name="author" content="FreeHTML5.co" />

		<!-- Facebook and Twitter integration -->
		<meta property="og:title" content=""/>
		<meta property="og:image" content=""/>
		<meta property="og:url" content=""/>
		<meta property="og:site_name" content=""/>
		<meta property="og:description" content=""/>
		<meta name="twitter:title" content="" />
		<meta name="twitter:image" content="" />
		<meta name="twitter:url" content="" />
		<meta name="twitter:card" content="" />
		
		<!-- Animate.css -->
		<link rel="stylesheet" href="{{asset('css/animate.css')}}">
		<link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
		<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
		<link rel="stylesheet" href="{{asset('css/style.css')}}">
		<script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
	</head>
	
	<body>
		
	<div class="fh5co-loader"></div>
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="fh5co-top-logo">
				<div id="fh5co-logo"><a href="index.html">Metal Recycler</a></div>
			</div>
			<div class="fh5co-top-menu menu-1 text-center">
				<ul>
					<li><a href="work.html">Login</a></li>
					<li><a href="work.html">Registro</a></li>
					<li><a href="work.html">Sellos</a></li>
					<li><a href="about.html">Pais</a></li>
					<li class="has-dropdown">
						<a href="#">Generos</a>
						<ul class="dropdown">
							<li><a href="#">Heavy Metal</a></li>
							<li><a href="#">Thrash Metal</a></li>
							<li><a href="#">Black Metal</a></li>
							<li><a href="#">Death Metal</a></li>
						</ul>
					</li>
					<li><a href="contact.html">Contactenos</a></li>
				</ul>
			</div>
			<div class="fh5co-top-social menu-1 text-right">
				<ul class="fh5co-social">
					<li><a href="#"><i class="icon-twitter"></i></a></li>
					<li><a href="#"><i class="icon-dribbble"></i></a></li>
					<li><a href="#"><i class="icon-github"></i></a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	<div id="fh5co-work">
		@yield('trabajo')
	</div>

		<div id="fh5co-started">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>Registrate</h2>
						<p>Publicamos metal de colección en todos los formatos</p>
						<p><a href="#" class="btn btn-primary">Registro</a></p>
					</div>
				</div>
			</div>
		</div>
		<footer id="fh5co-footer" role="contentinfo">
			<div class="container">
				<div class="row copyright">
					<div class="col-md-12 text-center">
						<p>
							<small class="block">&copy; 2016 Metal Recycler. All Rights Reserved.</small> 
							<small class="block">Designed by gaga software s.a.s</small>
						</p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
	
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<script src="{{asset('js/jquery.min.js')}}"></script>
	<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>
	</body>
</html>