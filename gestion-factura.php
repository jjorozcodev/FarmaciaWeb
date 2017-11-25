<!--HACER HASTA TENER EL PRIMERO LISTO-->
<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Landing - Forty by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="recursos/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="recursos/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="recursos/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="recursos/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<!-- Note: The "styleN" class below should match that of the banner element. -->
					<header id="header" class="alt style2">
						<a href="index.html" class="logo"><strong>Farmacia Web</strong> <span>by JAB</span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="index.html">Inicio</a></li>
							<!--<li><a href="landing.html">Landing</a></li>-->
							<li><a href="sugerencias.html">Sugerencias</a></li>
							<!--<li><a href="elements.html">Elements</a></li>-->
						</ul>
						<ul class="actions vertical">
							<li><a href="#" class="button special fit">Get Started</a></li>
							<li><a href="#" class="button fit">Log In</a></li>
						</ul>
					</nav>

				<!-- Banner -->
				<!-- Note: The "styleN" class below should match that of the header element. -->
					<section id="banner" class="style2">
						<div class="inner">
							<span class="image">
								<img src="images/pic07.jpg" alt="" />
							</span>
							<header class="major">
								<h1>facruea</h1>
							</header>
							<div class="content">
								<p>Getion de factura</p>
							</div>
						</div>
					</section>

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one">
								<div class="inner">
								<?php include('factura-tabla.php') ?>
								</div>
							</section>
                    </div>
                    
				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="icons">
								<li><a href="https://www.twitter.com/farmaciaweb" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="https://www.facebook.com/farmaciaweb" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="https://www.instagram.com/farmaciaweb" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="https://www.github.com/farmaciaweb" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
								<li><a href="https://www.github.com/farmaciaweb" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
							</ul>
							<ul class="copyright">
								<li>&copy; UCA</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="recursos/js/jquery.min.js"></script>
			<script src="recursos/js/jquery.scrolly.min.js"></script>
			<script src="recursos/js/jquery.scrollex.min.js"></script>
			<script src="recursos/js/skel.min.js"></script>
			<script src="recursos/js/util.js"></script>
			<!--[if lte IE 8]><script src="recursos/js/ie/respond.min.js"></script><![endif]-->
			<script src="recursos/js/main.js"></script>

	</body>
</html>