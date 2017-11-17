<?php
include('dbcon.php');
include('boot_mdl.php');
$uid=$_SESSION['uid'];
$query="SELECT * FROM `order` WHERE Username='$uid'";
$query_run=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($query_run);
$count=0;
$query2= "SELECT `Number of Product` FROM `cart` WHERE Username='$uid'";
$query_run2 = mysqli_query($conn,$query2);
$row2 = mysqli_fetch_assoc($query_run2);
$count = $row2['Number of Product'];
?>
	<html>

	<head>
		<title>Library</title>
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
					<!-- Title --><span class="mdl-layout-title"><img src="upload/icon.png"> <b>PhoneBook Pvt. Ltd.</b> </span> </div>
				<!-- Tabs -->
				<div class="mdl-layout__tab-bar mdl-js-ripple-effect"> <a href="userhome.php" class="mdl-layout__tab"><i class="material-icons">home</i>HOME</a>
					<a href="searchresult.php" class="mdl-layout__tab"><i class="material-icons">search</i>SEARCH</a>
					<a href="order.php" class="mdl-layout__tab  is-active"><i class="material-icons">reorder</i>ORDERS</a>
					<a href="account.php" class="mdl-layout__tab"><i class="material-icons">reorder</i>MY ACCOUNT</a>
					<a href="cart.php" class="mdl-layout__tab"><i class="material-icons md-18">shopping_cart</i>CARTS <span class="mdl-chip__contact mdl-color--red mdl-color-text--white"><?php echo $count; ?></span></a></div>
			</header>
			<div class="mdl-layout__drawer"> <span class="mdl-layout-title"><b>JAmboo Library</b></span>
				<nav class="mdl-navigation"> <a class="mdl-navigation__link" href="userhome.php">HOME</a>
					<a class="mdl-navigation__link" href="searchresult.php">SEARCH</a>
					<a class="mdl-navigation__link" href="order.php">ORDERS</a>
					<a class="mdl-navigation__link" href="account.php">ACCOUNT</a>
					<a class="mdl-navigation__link" href="cart.php">CARTS</a> </nav>
				</nav>
			</div>
			<main class="mdl-layout__content">
				<section class="mdl-layout__tab-panel is-active" id="scroll-tab-1">
					<div class="page-content">
						<!-- Your content goes here -->
						<div class="mdl-grid mdl-grid--no-spacing">
							<div class="mdl-cell mdl-cell--12-col mdl-cell--6-col-desktop mdl-cell--6-col-tablet mdl-cell--3-offset-desktop mdl-cell--2-offset-tablet" style="margin-top:1%;">
								<h5><b>Account Holder:</b> <?php echo $_SESSION['fname']." ".$_SESSION['lname'];?></h5>
								<center>
									<h5>Order History</h5></center>
								<hr>
								<!-- Three Line List with secondary info and action -->
								<style>
									.demo-list-three {
										width: 650px;
									}
								</style>
								<?php 
for($i=1;$i<8;$i++)
{
								?>
									<ul class="demo-list-three mdl-list">
										<li class="mdl-list__item mdl-list__item--three-line">
											<span class="mdl-list__item-primary-content">
      <i class="material-icons mdl-list__item-avatar">list</i>
										<span class="mdl-list__item-text-body">
											<b>Details: <?php echo $i ;?></b><br>
											<?php echo $row['Order'.$i];?>
      </span>
											</span>
											<span class="mdl-list__item-secondary-content">
      <a class="mdl-list__item-secondary-action" href="#"><i class="material-icons">star</i></a>
    </span>
										</li>
									</ul>
									<?php } ?>
							</div>


						</div>
						<br>


					</div>

				</section>
			</main>
		</div>

	</body>

	</html>