<?php
include('dbcon.php');
if(isset($_POST['submit']))
{
    $inputbook=$_POST['inputbook'];
	$_SESSION['input']=$inputbook;
	header('location:searchresult.php');
}
?>
	<html>

	<head>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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
			background-image: url(http://ss-ekonomsko-birotehnicka-sb.skole.hr/upload/ss-ekonomsko-birotehnicka-sb/images/static3/1807/Image/library.jpg);
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
		
		p1 {
			color: orangered;
		}
		
		1 {
			margin-left: 20%;
		}
		
		p3 {
			color: darkblue;
		}
	</style>

	<body>
		<!-- Simple header with scrollable tabs. -->
		<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
			<header class="mdl-layout__header">
				<div class="mdl-layout__header-row">
					<!-- Title --><span class="mdl-layout-title"><img src="upload/icon.png"> <b>JAmboo Library</b> </span> </div>
				<!-- Tabs -->
				<div class="mdl-layout__tab-bar mdl-js-ripple-effect"> <a href="index.php" class="mdl-layout__tab"><i class="material-icons">home</i>HOME</a>
					<a href="usersearch.php" class="mdl-layout__tab  is-active"><i class="material-icons">search</i>SEARCH</a>
					<a href="order.php" class="mdl-layout__tab"><i class="material-icons">reorder</i>ORDERS</a>
					<a href="account.php" class="mdl-layout__tab"><i class="material-icons">reorder</i>MY ACCOUNT</a>
					<a href="cart.php" class="mdl-layout__tab"><i class="material-icons md-18">shopping_cart</i>CARTS <span class="mdl-chip__contact mdl-color--red mdl-color-text--white">3</span></a></div>
			</header>
			<div class="mdl-layout__drawer"> <span class="mdl-layout-title"><b>JAmboo Library</b></span>
				<nav class="mdl-navigation"> <a class="mdl-navigation__link" href="userhome.php">HOME</a>
					<a class="mdl-navigation__link" href="signin.php">SEARCH</a>
					<a class="mdl-navigation__link" href="signin.php">SIGN IN</a> </nav>
			</div>
			<main class="mdl-layout__content">
				<section class="mdl-layout__tab-panel is-active" id="scroll-tab-1">
					<div class="page-content">
						<!-- Your content goes here -->
						<div class="mdl-grid mdl-grid--no-spacing">
							<div class="mdl-cell mdl-cell--12-col mdl-cell--6-col-desktop mdl-cell--6-col-tablet mdl-cell--3-offset-desktop mdl-cell--2-offset-tablet" style="margin-top:10%;">

								<center>
									<h1><p1>S</p1><p2>earch</p2><p3> B</p3><p2>ooks</p2></h1></center>
								<form action="usersearch.php" method="post">
									<div class="row">
										<div class="col-lg-12">
											<div class="input-group">
												<input name="inputbook" type="text" class="form-control" placeholder="Search for...">
												<span class="input-group-btn">
        <button name="submit" class="btn btn-default" type="submit">Search</button>
      </span>
											</div>
											<!-- /input-group -->
										</div>
										<!-- /.col-lg-6 -->
									</div>
								</form>
								<!-- /.row -->
							</div>

						</div>
					</div>
				</section>
			</main>
		</div>

	</body>

	</html>