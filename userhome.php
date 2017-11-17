<?php
include('dbcon.php');
include('boot_mdl.php');
$uid=$_SESSION['uid'];
$count=0;
$query2= "SELECT `Number of Product` FROM `cart` WHERE Username='$uid'";
$query_run2 = mysqli_query($conn,$query2);
$row2 = mysqli_fetch_assoc($query_run2);
$count = $row2['Number of Product'];
?>
	<html>

	<head>
		<!-- Material Design Lite -->
		<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
		<!-- Material Design icon font -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<!-- Latest compiled and minified CSS -->
		<link rel="icon" href="upload/icon.png">
		<title>Library</title>
	</head>
	<style>
		/*
Fade content bs-carousel with hero headers
Code snippet by maridlcrmn (Follow me on Twitter @maridlcrmn) for Bootsnipp.com
Image credits: unsplash.com
*/
		/********************************/
		/*       Fade Bs-carousel       */
		/********************************/
		
		.fade-carousel {
			position: relative;
			height: 100vh;
		}
		
		.fade-carousel .carousel-inner .item {
			height: 100vh;
		}
		
		.fade-carousel .carousel-indicators > li {
			margin: 0 2px;
			background-color: #f39c12;
			border-color: #f39c12;
			opacity: .7;
		}
		
		.fade-carousel .carousel-indicators > li.active {
			width: 10px;
			height: 10px;
			opacity: 1;
		}
		/********************************/
		/*          Hero Headers        */
		/********************************/
		
		.hero {
			position: absolute;
			top: 50%;
			left: 50%;
			z-index: 3;
			color: #fff;
			text-align: center;
			text-transform: uppercase;
			text-shadow: 1px 0px 0 rgba(0, 0, 0, 0.75);
			-webkit-transform: translate3d(-50%, -50%, 0);
			-moz-transform: translate3d(-50%, -50%, 0);
			-ms-transform: translate3d(-50%, -50%, 0);
			-o-transform: translate3d(-50%, -50%, 0);
			transform: translate3d(-50%, -50%, 0);
		}
		
		.hero h1 {
			font-size: 6em;
			font-weight: bold;
			margin: 0;
			padding: 0;
		}
		
		.fade-carousel .carousel-inner .item .hero {
			opacity: 0;
			-webkit-transition: 2s all ease-in-out .1s;
			-moz-transition: 2s all ease-in-out .1s;
			-ms-transition: 2s all ease-in-out .1s;
			-o-transition: 2s all ease-in-out .1s;
			transition: 2s all ease-in-out .1s;
		}
		
		.fade-carousel .carousel-inner .item.active .hero {
			opacity: 1;
			-webkit-transition: 2s all ease-in-out .1s;
			-moz-transition: 2s all ease-in-out .1s;
			-ms-transition: 2s all ease-in-out .1s;
			-o-transition: 2s all ease-in-out .1s;
			transition: 2s all ease-in-out .1s;
		}
		/********************************/
		/*            Overlay           */
		/********************************/
		
		.overlay {
			position: absolute;
			width: 100%;
			height: 100%;
			z-index: 2;
			background-color: #080d15;
			opacity: .7;
		}
		/********************************/
		/*          Custom Buttons      */
		/********************************/
		
		.btn.btn-lg {
			padding: 10px 40px;
		}
		
		.btn.btn-hero,
		.btn.btn-hero:hover,
		.btn.btn-hero:focus {
			color: #f5f5f5;
			background-color: #1abc9c;
			border-color: #1abc9c;
			outline: none;
			margin: 20px auto;
		}
		/********************************/
		/*       Slides backgrounds     */
		/********************************/
		
		.fade-carousel .slides .slide-1 {
			height: 100vh;
			background-size: cover;
			background-position: center center;
			background-repeat: no-repeat;
		}
		
		.fade-carousel .slides .slide-1 {
			background-image: url("upload/brr80ma8u03z.png");
		}
		/********************************/
		/*          Media Queries       */
		/********************************/
		
		@media screen and (min-width: 980px) {
			.hero {
				width: 980px;
			}
		}
		
		@media screen and (max-width: 640px) {
			.hero h1 {
				font-size: 4em;
			}
		}
		
		.mid1 mdl-cell {
			background-color: #F0FFFF;
			float: left;
		}
		
		.hh {
			color: white;
		}
	</style>

	<body>
		<!-- Simple header with scrollable tabs. -->
		<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
			<header class="mdl-layout__header">
				<div class="mdl-layout__header-row">
					<!-- Title --><span class="mdl-layout-title"><img src="upload/icon.png" style="width:70px; height:70px;"> <b>PhoneBook Pvt. Ltd.</b> </span>



				</div>
				<!-- Tabs -->
				<div class="mdl-layout__tab-bar mdl-js-ripple-effect"> <a href="userhome.php" class="mdl-layout__tab  is-active"><i class="material-icons">home</i>HOME</a>
					<a href="searchresult.php" class="mdl-layout__tab"><i class="material-icons">search</i>SEARCH</a>
					<a href="signin.php" class="mdl-layout__tab"><i class="material-icons">reorder</i>ORDERS</a>
					<a href="account.php" class="mdl-layout__tab"><i class="material-icons">reorder</i>MY ACCOUNT</a>
					<a href="cart.php" class="mdl-layout__tab"><i class="material-icons md-18">shopping_cart</i>CARTS <span class="mdl-chip__contact mdl-color--red mdl-color-text--white"><?php echo $count; ?></span></a></div>
			</header>
			<div class="mdl-layout__drawer"> <span class="mdl-layout-title"><b>JAmboo Library</b></span>
				<nav class="mdl-navigation"> <a class="mdl-navigation__link" href="userhome.php">HOME</a>
					<a class="mdl-navigation__link" href="searchresult.php">SEARCH</a>
					<a class="mdl-navigation__link" href="order.php">ORDERS</a>
					<a class="mdl-navigation__link" href="account.php">ACCOUNT</a>
					<a class="mdl-navigation__link" href="cart.php">CARTS</a> </nav>
			</div>
			<main class="mdl-layout__content">
				<section class="mdl-layout__tab-panel is-active" id="scroll-tab-1">
					<div class="page-content">
						<!-- Your content goes here -->
						<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
							<!-- Overlay -->
							<div class="overlay"></div>
							<!-- Indicators -->
							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item slides active">
									<div class="slide-1"></div>
									<div class="hero">
										<hgroup>
											<h1>JAmboo Library</h1>
											<h3>Visit once you get habit of earning knowledge</h3> </hgroup>
										<button href="contact" class="btn btn-hero btn-lg" role="button">Contact Us</button>
									</div>
								</div>
							</div>

							<footer class="mdl-mega-footer">
								<div class="mdl-mega-footer__middle-section">

									<div class="mdl-mega-footer__drop-down-section">
										<input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
										<h1 class="mdl-mega-footer__heading">Features</h1>
										<ul class="mdl-mega-footer__link-list">
											<li><a href="#">About</a></li>
											<li><a href="#">Terms</a></li>
											<li><a href="#">Partners</a></li>
											<li><a href="#">Updates</a></li>
										</ul>
									</div>

									<div class="mdl-mega-footer__drop-down-section">
										<input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
										<h1 class="mdl-mega-footer__heading">Details</h1>
										<ul class="mdl-mega-footer__link-list">
											<li><a href="#">Specs</a></li>
											<li><a href="#">Tools</a></li>
											<li><a href="#">Resources</a></li>
										</ul>
									</div>

									<div class="mdl-mega-footer__drop-down-section">
										<input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
										<h1 class="mdl-mega-footer__heading">Technology</h1>
										<ul class="mdl-mega-footer__link-list">
											<li><a href="#">How it works</a></li>
											<li><a href="#">Patterns</a></li>
											<li><a href="#">Usage</a></li>
											<li><a href="#">Products</a></li>
											<li><a href="#">Contracts</a></li>
										</ul>
									</div>

									<div class="mdl-mega-footer__drop-down-section">
										<input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
										<h1 class="mdl-mega-footer__heading">FAQ</h1>
										<ul class="mdl-mega-footer__link-list">
											<li><a href="#">Questions</a></li>
											<li><a href="#">Answers</a></li>
											<li><a href="#">Contact us</a></li>
										</ul>
									</div>

								</div>

								<div class="mdl-mega-footer__bottom-section">
									<div class="mdl-logo">Title</div>
									<ul class="mdl-mega-footer__link-list">
										<li><a href="#">Help</a></li>
										<li><a href="#">Privacy & Terms</a></li>
									</ul>
								</div>

							</footer>
						</div>
					</div>

		</div>
		</section>
		</main>
		</div>

	</body>

	</html>