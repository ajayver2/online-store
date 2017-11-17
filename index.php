<html>

<head>
	<!-- Material Design Lite -->
	<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
	<!-- Material Design icon font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<!-- Latest compiled and minified CSS -->
	<link rel="icon" href="upload/icon.png">
	<title>Online PhoneBook</title>
</head>
<style>
	
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
				<!-- Title --><span class="mdl-layout-title"><img src="upload/icon.png" style="width:70px; height:70px;"> <b>Phonebook Pvt. Ltd.</b> </span> </div>
			<!-- Tabs -->
			<div class="mdl-layout__tab-bar mdl-js-ripple-effect">
				<a href="index.php" class="mdl-layout__tab  is-active">HOME</a>
				<a href="" class="mdl-layout__tab">About Us</a>
				<a href="signin.php" class="mdl-layout__tab">SIGN IN</a> </div>
		</header>
		<div class="mdl-layout__drawer"> <span class="mdl-layout-title"><b>PhoneBook</b></span>
			<nav class="mdl-navigation"> <a class="mdl-navigation__link" href="index.php">HOME</a>
				<a class="mdl-navigation__link" href="signin.php">SEARCH</a>
				<a class="mdl-navigation__link" href="signin.php">SIGN IN</a> </nav>
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
										<h1>Phonebook</h1>
										<h3>Your trust is our strength</h3> </hgroup>
									<button href="contact" class="btn btn-hero btn-lg" role="button">Contact Us</button>
								</div>
							</div>
						</div>
						

						<footer class="mdl-mega-footer" style="background-color:black;">
							<div class="mdl-mega-footer__middle-section">

								<div class="mdl-mega-footer__drop-down-section">
									<input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
									<h1 class="mdl-mega-footer__heading">Menu</h1>
									<ul class="mdl-mega-footer__link-list">
										<li><a href="#">Home</a></li>
										<li><a href="#">Academic</a></li>
										<li><a href="#">Gallery</a></li>
										<li><a href="#">FAculty</a></li>
										<li><a href="#">Contact</a></li>
										<li><a href="#">Login</a></li>
									</ul>
								</div>

								<div class="mdl-mega-footer__drop-down-section">
									<input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
									<h1 class="mdl-mega-footer__heading">Social</h1>
									<ul class="mdl-mega-footer__link-list">
										<i><img src="files/if_gmail_1220340.png" style="height:50px; width:auto;"></i>
										<br>
										<i><img src="files/if_Social_Media_Socialmedia_network_share_socialnetwork_network-09_227044.png" style="height:50px; width:auto;"></i>
										<br>
										<i><img src="files/if_Youtube-2_174256.png" style="height:50px; width:auto;"></i>
									</ul>
								</div>

								<div class="mdl-mega-footer__drop-down-section">
									<input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
									<h1 class="mdl-mega-footer__heading">Academic</h1>
									<ul class="mdl-mega-footer__link-list">
										<li><a href="#">Results</a></li>
										<li><a href="#">Documents</a></li>
										<li><a href="#">Magazin</a></li>
										<li><a href="#">Dress Code</a></li>
										<li><a href="#">Study Material</a></li>
									</ul>
								</div>

								<div class="mdl-mega-footer__drop-down-section">
									<input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
									<h1 class="mdl-mega-footer__heading">ADMIN</h1>
									<ul class="mdl-mega-footer__link-list">
										<li><a href="156_694_hyg_yrf_hppp.php">Login</a></li>
										<li><a href="#">Answers</a></li>
										<li><a href="#">Contact us</a></li>
									</ul>
								</div>

							</div>

							<div class="mdl-mega-footer__bottom-section">
								<div class="mdl-logo">LPU:</div>
								<ul class="mdl-mega-footer__link-list">
									<li><a href="#">Ajay Verma</a></li>
									<li><a href="#">ajayverma@gmail.com</a></li>
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