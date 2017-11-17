<?php
include('dbcon.php');
if(isset($_POST['submit']))
{
	$uid=$_POST['uid'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$pass=$_POST['pass'];
	$cpass=$_POST['cpass'];
	$add=$_POST['add'];
	$cont=$_POST['cont'];
	$query0="SELECT * FROM `login` WHERE Username='$uid'";
	$query_run0=mysqli_query($conn,$query0);	
	if(mysqli_num_rows($query_run0)==0)
	{
		if($cpass==$pass)
			{
		    $query="INSERT INTO `login`(`Username`, `Password`, `OldPassword`, `FirstName`, `LastName`, `ContactNo`, `Address`) VALUES ('$uid','$pass','$pass','$fname','$lname','$cont','$add')";
		    $query_run=mysqli_query($conn,$query);
		    $query1="INSERT INTO `cart`(`Username`, `Product1`, `Product2`, `Product3`, `Number of Product`) VALUES ('$uid','','','','0')";
		    $query_run1=mysqli_query($conn,$query1);
		    $query2="INSERT INTO `order`(`Username`, `Order1`, `Order2`, `Order3`, `Order4`, `Order5`, `Order6`, `Order7`) VALUES ('$uid',' ',' ',' ',' ',' ',' ',' ')";
		    $query_run2=mysqli_query($conn,$query2);
			if($query_run && $query_run1 && $query_run2)
				{
				     echo '<script type="text/javascript">alert("You Registered successfully...!!")</script>';
		        }
		    else
	        {
	 	        echo '<script type="text/javascript">alert("Password does not match......")</script>';
	        }
	        }
	    else
	    {
	 	    echo '<script type="text/javascript">alert("Password does not match......")</script>';
	    }
    }
	else
	{
		echo '<script type="text/javascript">alert("User already exist......")</script>';
	}
}
?>
	<html>

	<head>
		<!-- Material Design Lite -->
		<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
		<!-- Material Design icon font -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<!-- Latest compiled and minified CSS -->

		<style>
			body {
				background: url(upload/apple.jpg) no-repeat center center fixed;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
			}
			
			.form {
				background-color: white;
				height: auto;
				box-shadow: 4px 4px 5px black;
				margin-top: 25%;
				opacity: 0.95;
			}
			
			p3 {
				font-size: 20px;
				font-style: bold;
			}
		</style>
	</head>

	<body>
		<!-- Simple header with scrollable tabs. -->
		<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
			<header class="mdl-layout__header">
				<div class="mdl-layout__header-row">
					<!-- Title -->
					<span class="mdl-layout-title"><img src="upload/icon.png"> <b>Phone Library</b> </span>
				</div>
				<!-- Tabs -->
				<div class="mdl-layout__tab-bar mdl-js-ripple-effect">
					<a href="index.php" class="mdl-layout__tab">HOME</a>
					<a href="search.php" class="mdl-layout__tab">SEARCH</a>
					<a href="signin.php" class="mdl-layout__tab">SIGN IN</a>
				</div>
			</header>
			<div class="mdl-layout__drawer">
				<span class="mdl-layout-title"><b>JAmboo Library</b></span>
				<nav class="mdl-navigation">
					<a class="mdl-navigation__link" href="index.php">HOME</a>
					<a class="mdl-navigation__link" href="search.php">SEARCH</a>
					<a class="mdl-navigation__link" href="signin.php">SIGN IN</a>
				</nav>
			</div>
			<main class="mdl-layout__content">
				<section class="mdl-layout__tab-panel is-active">
					<div class="page-content">
						<div class="mdl-cell mdl-cell--6-col mdl-cell--4-tablet mdl-cell--4-phone mdl-cell--3-offset-desktop mdl-cell--2-offset-tablet">
							<center>
								<div class="form">
									<form action="register.php" method="post">
										<br>
										<legend><b style="font-size:25px;">Registration</b></legend>
										<hr>
										<p3>First Name: </p3>
										<div class="mdl-textfield mdl-js-textfield">
											<input name="fname" class="mdl-textfield__input" type="text" required>
											<label class="mdl-textfield__label" for="sample1">Enter your First Name</label>
										</div>
										<br>
										<p3>Last Name: </p3>
										<div class="mdl-textfield mdl-js-textfield">
											<input name="lname" class="mdl-textfield__input" type="text" required>
											<label class="mdl-textfield__label" for="sample1">Enter Your Last Name</label>
										</div>
										<br>
										<p3>Email Id: </p3>
										<div class="mdl-textfield mdl-js-textfield">
											<input name="uid" class="mdl-textfield__input" type="text" required>
											<label class="mdl-textfield__label" for="sample1">Enter Your e-mail Id</label>
										</div>
										<br>
										<p3>Contact No: </p3>
										<div class="mdl-textfield mdl-js-textfield">
											<input name="cont" class="mdl-textfield__input" type="number" required>
											<label class="mdl-textfield__label" for="sample1">Enter Your Contact Number</label>
										</div>
										<br>
										<p3>Address: </p3>
										<div class="mdl-textfield mdl-js-textfield">
											<input name="add" class="mdl-textfield__input" type="text" required>
											<label class="mdl-textfield__label" for="sample1">Enter Your Address</label>
										</div>
										<br>
										<p3>Password: </p3>
										<div class="mdl-textfield mdl-js-textfield">
											<input name="pass" class="mdl-textfield__input" type="password" required>
											<label class="mdl-textfield__label" for="sample2">Password</label>
										</div>
										<br>
										<p3>Confirm Password: </p3>
										<div class="mdl-textfield mdl-js-textfield">
											<input name="cpass" class="mdl-textfield__input" type="password" required>
											<label class="mdl-textfield__label" for="sample2">Password</label>
										</div>
										<br>
										<button name="submit" type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" style="background-color: black;">
											<i class="material-icons">perm_identity</i>Register
										</button>

									</form>
									<br>
									<br>
								</div>
							</center>
						</div>
					</div>
				</section>
			</main>
		</div>
	</body>

	</html>