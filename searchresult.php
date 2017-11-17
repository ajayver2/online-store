<?php
include('dbcon.php');
include('boot_mdl.php');
$query1= "select * from books";
$query_run1 = mysqli_query($conn,$query1);
$row1 = mysqli_fetch_assoc($query_run1);
$num = mysqli_num_rows($query_run1);
$inputbook="";
$uid=$_SESSION['uid'];
$count=0;
$query2= "SELECT `Number of Product` FROM `cart` WHERE Username='$uid'";
$query_run2 = mysqli_query($conn,$query2);
$row2 = mysqli_fetch_assoc($query_run2);
$count = $row2['Number of Product'];
if(isset($_POST['submit']))
{
	$inputbook=$_POST['inputtext'];
    $firstthree = substr($inputbook, 0, 3);
    $query1= "select * from books WHERE Name LIKE '%$firstthree%'";
    $query_run1 = mysqli_query($conn,$query1);
	$num = mysqli_num_rows($query_run1);
	if(mysqli_num_rows($query_run1)<=0)
	{
		echo '<script type="text/javascript">alert("No record found try something else..!!")</script>';
    }
}
if(isset($_POST['increase']))
{
	$uid=$_SESSION['uid'];
	$query2= "SELECT `Number of Product` FROM `cart` WHERE Username='$uid'";
	$query_run2 = mysqli_query($conn,$query2);
	$row2 = mysqli_fetch_assoc($query_run2);
	$count = $row2['Number of Product'];
	if($count<3)
	{
	$count=$count+1;
	$query3= "UPDATE `cart` SET `Number of Product`=$count WHERE Username='$uid'";
	$query_run3 = mysqli_query($conn,$query3);
	$bookid = idlist($_POST['increase']);
	$query3= "SELECT * FROM `books` WHERE BookID='$bookid'";
	$query_run3 = mysqli_query($conn,$query3);
	$row3 = mysqli_fetch_assoc($query_run3);
	$data="Raiting ".$row3['BookID']."\n   Company: ".$row3['Name']."\n   Price: ".$row3['Author']."\n   Model: ".$row3['Publisher']."\n   Year: ".$row3['Edition'];
	$s=$count;
	$col="Product".$s;
	$query5= "UPDATE `cart` SET `$col`= '$data' WHERE Username='$uid'";
	$query_run5 = mysqli_query($conn,$query5);
	}
	else
	{
		echo '<script type="text/javascript">alert("You are not Allowed to issue more than 3 books..!!")</script>';
	}
} 
if(isset($_POST['booking']))
{
	$uid=$_SESSION['uid'];
	$query2= "SELECT `Number of Product` FROM `cart` WHERE Username='$uid'";
	$query_run2 = mysqli_query($conn,$query2);
	$row2 = mysqli_fetch_assoc($query_run2);
	$count = $row2['Number of Product'];
	if($count<3)
	{
	$count=$count+1;
	$query3= "UPDATE `cart` SET `Number of Product`=$count WHERE Username='$uid'";
	$query_run3 = mysqli_query($conn,$query3);
	$bookid = idlist($_POST['booking']);
	$query3= "SELECT * FROM `books` WHERE BookID='$bookid'";
	$query_run3 = mysqli_query($conn,$query3);
	$row3 = mysqli_fetch_assoc($query_run3);
	$data="Raiting ".$row3['BookID']."\n   Company: ".$row3['Name']."\n   Price: ".$row3['Author']."\n   Model: ".$row3['Publisher']."\n   Year: ".$row3['Edition'];
	$s=$count;
	$col="Product".$s;
	$query5= "UPDATE `cart` SET `$col`= '$data' WHERE Username='$uid'";
	$query_run5 = mysqli_query($conn,$query5);
	header('location:cart.php');
	}
	else
	{
		echo '<script type="text/javascript">alert("You are not Allowed to issue more than 3 books..!!")</script>';
	}
} 
function idlist($val)
{
	return $val;
}
?>
	<html>

	<head>
		<title>Library</title>
	</head>
	<script>
		function show($uid) {
			echo $uid;
		}
	</script>
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
		
		.overlay {
			position: absolute;
			width: 100%;
			height: 100%;
			z-index: 2;
			background-color: #080d15;
			opacity: .7;
		}
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
		
		.fade-carousel .slides .slide-1 {
			height: 100vh;
			background-size: cover;
			background-position: center center;
			background-repeat: no-repeat;
		}
		
		.fade-carousel .slides .slide-1 {
			background-image: url(http://ss-ekonomsko-birotehnicka-sb.skole.hr/upload/ss-ekonomsko-birotehnicka-sb/images/static3/1807/Image/library.jpg);
		}
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
		<div id="result"></div>
		<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header" style="color:yellow;">
			<header class="mdl-layout__header">
				<div class="mdl-layout__header-row">
					<!-- Title --><span class="mdl-layout-title"><img src="upload/icon.png" style="width:70px; height:70px;"> <b>PhoneBook Pvt. Ltd.</b> </span> </div>
				<!-- Tabs -->
				<div class="mdl-layout__tab-bar mdl-js-ripple-effect"> <a href="userhome.php" class="mdl-layout__tab"><i class="material-icons">home</i>HOME</a>
					<a href="searchresult.php" class="mdl-layout__tab  is-active"><i class="material-icons">search</i>SEARCH</a>
					<a href="order.php" class="mdl-layout__tab"><i class="material-icons">reorder</i>ORDERS</a>
					<a href="account.php" class="mdl-layout__tab"><i class="material-icons">reorder</i>MY ACCOUNT</a>
					<a href="cart.php" class="mdl-layout__tab"><i class="material-icons md-18">shopping_cart</i>CARTS <span class="mdl-chip__contact mdl-color--red mdl-color-text--white"><?php echo $count;?></span></a></div>
			</header>
			<div class="mdl-layout__drawer"> <span class="mdl-layout-title"><b>Phone Book</b></span>
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
						<div class="mdl-grid mdl-grid--no-spacing">
							<div class="mdl-cell mdl-cell--12-col mdl-cell--6-col-desktop mdl-cell--6-col-tablet mdl-cell--3-offset-desktop mdl-cell--2-offset-tablet" style="margin-top:1%;">

								<form method="post" action="searchresult.php">
									<div class="row">
										<div class="col-lg-12">
											<div class="input-group">
												<input name="inputtext" type="text" class="form-control" placeholder="Search for..." value="<?php echo $inputbook;?>">
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
						<br>

						<div class="mdl-grid mdl-grid--no-spacing">
							<div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--0-offset-desktop mdl-cell--0-offset-tablet" style="margin-top:1%; ">
								<div class="row">
									<?php
$k=1;
while($row = mysqli_fetch_array($query_run1)){
	?>

										<div class="col-sm-12 col-md-3" style="margin-left:0%;">
											<div class="thumbnail">
												<img src="<?php echo 'upload/'.$row['Image'];?>" style="width:100px; height:200px;">
												<div class="caption">
													<h4><?php echo $row['Name']; ?></h4>
													<p><b>Price:</b>
														<?php echo $row['Author'].','; ?>
															<b>Model:</b>
															<?php echo $row['Publisher'];?>
																<b>Year:</b>
																<?php echo $row['Edition'];?>
																	<b>Status:</b>
																	<?php echo $row['Status'];
                                                                         echo '('.$row['Quntity'].')';?>
																		<b>Raiting:</b>
																		<?php echo $row['BookID'];?>

													</p>
													<form method="post" action="searchresult.php">
														<p>
															<button class="btn btn-primary" role="button" name="booking" value="<?php echo $row['BookID'];?>">Book Now</button>
															<button class="btn btn-default" role="button" name="increase" value="<?php echo $row['BookID'];?>">Add to Cart(+1):
															</button>
													</form>
													</p>
												</div>
											</div>
										</div>
										<?php
$k++;
}
									?>
								</div>

							</div>
						</div>
					</div>
				</section>
			</main>

		</div>
	</body>
	</html>