<?php
include('dbcon.php');
include('boot_mdl.php');
$uid=$_SESSION['uid'];
$query="SELECT * FROM `order` WHERE Username='$uid'";
$query_run=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($query_run);
$count=0;
$query2= "SELECT* FROM `cart` WHERE Username='$uid'";
$query_run2 = mysqli_query($conn,$query2);
$row2 = mysqli_fetch_assoc($query_run2);
$count = $row2['Number of Product'];
$cart_array=array($row2['Product3'],$row2['Product2'],$row2['Product3']);

if(isset($_POST['remove1']))
{
	$query2= "UPDATE `cart` SET `Product1`='' WHERE Username='$uid'";
    $query_run2 = mysqli_query($conn,$query2);
	$cart_array[0]=$cart_array[1];
	$cart_array[1]=$cart_array[2];
	$cart_array[2]=" ";
	$count=$count-1;
	$query2= "UPDATE `cart` SET `Product1`='$cart_array[0]',`Number of Product`=$count WHERE Username='$uid'";
    $query_run2 = mysqli_query($conn,$query2);
	$query2= "UPDATE `cart` SET `Product2`='$cart_array[1]' WHERE Username='$uid'";
    $query_run2 = mysqli_query($conn,$query2);
	$query2= "UPDATE `cart` SET `Product3`='$cart_array[2]' WHERE Username='$uid'";
    $query_run2 = mysqli_query($conn,$query2);
}

if(isset($_POST['remove2']))
{
	$query2= "UPDATE `cart` SET `Product2`='' WHERE Username='$uid'";
    $query_run2 = mysqli_query($conn,$query2);
	$cart_array[1]=$cart_array[2];
	$cart_array[2]=" ";
	$count=$count-1;
	$query2= "UPDATE `cart` SET `Product2`='$cart_array[1]',`Number of Product`=$count WHERE Username='$uid'";
    $query_run2 = mysqli_query($conn,$query2);
	$query2= "UPDATE `cart` SET `Product3`='$cart_array[2]' WHERE Username='$uid'";
    $query_run2 = mysqli_query($conn,$query2);
	echo "<meta http-equiv='refresh' content='0'>";
}
if(isset($_POST['remove3']))
{
	$query2= "UPDATE `cart` SET `Product3`='' WHERE Username='$uid'";
    $query_run2 = mysqli_query($conn,$query2);
	$cart_array[2]=" ";
	$count=$count-1;
	$query2= "UPDATE `cart` SET `Product3`='$cart_array[2]',`Number of Product`=$count WHERE Username='$uid'";
}
if(isset($_POST['book1']))
{
	$query4= "SELECT* FROM `cart` WHERE Username='$uid'";
    $query_run4 = mysqli_query($conn,$query4);
	$row4=mysqli_fetch_assoc($query_run4);
	$query5= "SELECT* FROM `order` WHERE Username='$uid'";
	$query_run5 = mysqli_query($conn,$query5);
	$row5=mysqli_fetch_assoc($query_run5);
	$order=array($row5['Order1'],$row5['Order2'],$row5['Order3'],$row5['Order4'],$row5['Order5'],$row5['Order6'],$row5['Order7']);
	for($i=6;$i>=1;$i--)
	{
		$order[$i]=$order[$i-1];
	}
	//echo $row5['Order1'].$row5['Order2'].$row5['Order3'].$row5['Order4'];
	$query6= "UPDATE `order` SET `Order1`='$order[0]',`Order2`='$order[1]',`Order3`='$order[2]',`Order4`='$order[3]',`Order5`='$order[4]',`Order6`='$order[5]',`Order7`='$order[6]' WHERE Username='$uid'";
    $query_run6 = mysqli_query($conn,$query6);
	$booked_data=$row4['Product1'];
	$query5="UPDATE `order` SET `Order1`='$booked_data' WHERE Username='$uid'";
	$query_run5 = mysqli_query($conn,$query5);
	if($query_run5)
	{
		echo '<script type="text/javascript">alert("Your request is successfully submitted...")</script>';
		     
	}
	else
	{
		echo '<script type="text/javascript">alert("Some error occur...... ")</script>';
	}
	$query2= "UPDATE `cart` SET `Product1`='' WHERE Username='$uid'";
    $query_run2 = mysqli_query($conn,$query2);
	$cart_array[0]=$cart_array[1];
	$cart_array[1]=$cart_array[2];
	$cart_array[2]=" ";
	$count=$count-1;
	$query2= "UPDATE `cart` SET `Product1`='$cart_array[0]',`Number of Product`=$count WHERE Username='$uid'";
    $query_run2 = mysqli_query($conn,$query2);
	$query2= "UPDATE `cart` SET `Product2`='$cart_array[1]' WHERE Username='$uid'";
    $query_run2 = mysqli_query($conn,$query2);
	$query2= "UPDATE `cart` SET `Product3`='$cart_array[2]' WHERE Username='$uid'";
    $query_run2 = mysqli_query($conn,$query2);
}
if(isset($_POST['book3']))
{
	$query4= "SELECT* FROM `cart` WHERE Username='$uid'";
    $query_run4 = mysqli_query($conn,$query4);
	$row4=mysqli_fetch_assoc($query_run4);
	$query5= "SELECT* FROM `order` WHERE Username='$uid'";
	$query_run5 = mysqli_query($conn,$query5);
	$row5=mysqli_fetch_assoc($query_run5);
	$order=array($row5['Order1'],$row5['Order2'],$row5['Order3'],$row5['Order4'],$row5['Order5'],$row5['Order6'],$row5['Order7']);
	for($i=6;$i>=1;$i--)
	{
		$order[$i]=$order[$i-1];
	}
	//echo $row5['Order1'].$row5['Order2'].$row5['Order3'].$row5['Order4'];
	$query6= "UPDATE `order` SET `Order1`='$order[0]',`Order2`='$order[1]',`Order3`='$order[2]',`Order4`='$order[3]',`Order5`='$order[4]',`Order6`='$order[5]',`Order7`='$order[6]' WHERE Username='$uid'";
    $query_run6 = mysqli_query($conn,$query6);
	$booked_data=$row4['Product3'];
	$query5="UPDATE `order` SET `Order1`='$booked_data' WHERE Username='$uid'";
	$query_run5 = mysqli_query($conn,$query5);
	if($query_run5)
	{
		echo '<script type="text/javascript">alert("Your request is successfully submitted...")</script>';
		     
	}
	else
	{
		echo '<script type="text/javascript">alert("Some error occur...... ")</script>';
	}
	$query2= "UPDATE `cart` SET `Product3`='' WHERE Username='$uid'";
    $query_run2 = mysqli_query($conn,$query2);
	$cart_array[2]=" ";
	$count=$count-1;
	$query2= "UPDATE `cart` SET `Product3`='$cart_array[2]',`Number of Product`=$count WHERE Username='$uid'";
}
if(isset($_POST['book2']))
{
	$query4= "SELECT* FROM `cart` WHERE Username='$uid'";
    $query_run4 = mysqli_query($conn,$query4);
	$row4=mysqli_fetch_assoc($query_run4);
	$query5= "SELECT* FROM `order` WHERE Username='$uid'";
	$query_run5 = mysqli_query($conn,$query5);
	$row5=mysqli_fetch_assoc($query_run5);
	$order=array($row5['Order1'],$row5['Order2'],$row5['Order3'],$row5['Order4'],$row5['Order5'],$row5['Order6'],$row5['Order7']);
	for($i=6;$i>=1;$i--)
	{
		$order[$i]=$order[$i-1];
	}
	//echo $row5['Order1'].$row5['Order2'].$row5['Order3'].$row5['Order4'];
	$query6= "UPDATE `order` SET `Order1`='$order[0]',`Order2`='$order[1]',`Order3`='$order[2]',`Order4`='$order[3]',`Order5`='$order[4]',`Order6`='$order[5]',`Order7`='$order[6]' WHERE Username='$uid'";
    $query_run6 = mysqli_query($conn,$query6);
	$booked_data=$row4['Product2'];
	$query5="UPDATE `order` SET `Order1`='$booked_data' WHERE Username='$uid'";
	$query_run5 = mysqli_query($conn,$query5);
	if($query_run5)
	{
		echo '<script type="text/javascript">alert("Your request is successfully submitted...")</script>';
		     
	}
	else
	{
		echo '<script type="text/javascript">alert("Some error occur...... ")</script>';
	}
	$query2= "UPDATE `cart` SET `Product2`='' WHERE Username='$uid'";
    $query_run2 = mysqli_query($conn,$query2);
	$cart_array[1]=$cart_array[2];
	$cart_array[2]=" ";
	$count=$count-1;
	$query2= "UPDATE `cart` SET `Product2`='$cart_array[1]',`Number of Product`=$count WHERE Username='$uid'";
    $query_run2 = mysqli_query($conn,$query2);
	$query2= "UPDATE `cart` SET `Product3`='$cart_array[2]' WHERE Username='$uid'";
    $query_run2 = mysqli_query($conn,$query2);
	echo "<meta http-equiv='refresh' content='0'>";
}

?>
	<html>

	<head>
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<body>
		<!-- Simple header with scrollable tabs. -->
		<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
			<header class="mdl-layout__header">
				<div class="mdl-layout__header-row">
					<!-- Title --><span class="mdl-layout-title"><img src="upload/icon.png"> <b>PhoneBook Pvt. Ltd.</b> </span> </div>
				<!-- Tabs -->
				<div class="mdl-layout__tab-bar mdl-js-ripple-effect"> <a href="userhome.php" class="mdl-layout__tab"><i class="material-icons">home</i>HOME</a>
					<a href="searchresult.php" class="mdl-layout__tab"><i class="material-icons">search</i>SEARCH</a>
					<a href="order.php" class="mdl-layout__tab"><i class="material-icons">reorder</i>ORDERS</a>
					<a href="account.php" class="mdl-layout__tab"><i class="material-icons">reorder</i>MY ACCOUNT</a>
					<a href="cart.php" class="mdl-layout__tab is-active"><i class="material-icons md-18">shopping_cart</i>CARTS <span class="mdl-chip__contact mdl-color--red mdl-color-text--white"><?php echo $count;?></span></a></div>
			</header>
			<div class="mdl-layout__drawer"> <span class="mdl-layout-title"><b>PhoneBook Pvt. Ltd.</b></span>
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
							<div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-desktop mdl-cell--6-col-tablet mdl-cell--2-offset-desktop mdl-cell--2-offset-tablet" style="margin-top:1%;">
								<center>
									<h5><b>Hello!! </b> <?php echo $_SESSION['fname']." ".$_SESSION['lname']." you have ".$count." product in your cart";?></h5></center>
								<hr>
								<marquee>
									<h6 style="color:red;">You can not add more than three item in your cart at a time.</h6></marquee>

								<?php
for($j=1;$j<=$count;$j++)
{
								?>

									<div class="panel-group">
										<div class="panel panel-primary">
											<div class="panel-heading">

												PhoneBook Pvt. Ltd.
												<?php echo $j?> Details</div>
											<div class="panel-body">
												<?php echo $row2['Product'.$j]; ?>
											</div>
											<div class="panel-body">
												<form action="cart.php" method="post">
													<center>
														<button name="<?php echo 'book'.$j; ?>" type="submit" class=" form-control btn-success" style="width:15%;">Book</button>
													</center>
													<button name="<?php echo 'remove'.$j; ?>" class="btn-danger" type="submit">Remove</button>
													</center>
											</div>
											</form>
										</div>
									</div>
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