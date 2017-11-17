<?php
include('dbcon.php');
if(isset($_POST['submit']))
{
	$uid=$_POST['uid'];
	$pass=$_POST['pass'];
	$query="select* from login where Username='$uid'";
	$query_run=mysqli_query($conn,$query);
	$row=mysqli_fetch_assoc($query_run);
	if(mysqli_num_rows($query_run)>0)
	{
		if($uid==$row['Username'] && $pass==$row['Password'])
			{
			$_SESSION['fname']=$row['FirstName'];
		    $_SESSION['lname']=$row['LastName'];
	 	    $_SESSION['contact']=$row['ContactNo'];
		    $_SESSION['address']=$row['Address'];
	     	$_SESSION['oldpass']=$row['OldPassword'];
		    $_SESSION['uid']=$row['Username'];
		    header('location:searchresult.php');
		    }
		else
			{
			     echo '<script type="text/javascript">alert("You entered wrong Username or Password.")</script>';	
      		}
      }
	else
	{
		echo '<script type="text/javascript">alert("User does not exist......")</script>';
	}
}
if(isset($_POST['register']))
{
	header('location:register.php');
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
				background: url("upload/apple.jpg");
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
			}
			
			.form {
				background-color: #FFF8DC;
				height: auto;
				box-shadow: 4px 4px 5px black;
				margin-top: 25%;
				opacity: 0.9;
			}
		</style>
	</head>

	<body>
		<!-- Simple header with scrollable tabs. -->
		<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
			<header class="mdl-layout__header">
				<div class="mdl-layout__header-row">
					<!-- Title -->
					<span class="mdl-layout-title"><img src="upload/icon.png" style="width:70px; height:70px;"> <b>Phonebook Pvt. Ltd.</b> </span>
				</div>
				<!-- Tabs -->
				<div class="mdl-layout__tab-bar mdl-js-ripple-effect">
					<a href="index.php" class="mdl-layout__tab">HOME</a>
					<a href="" class="mdl-layout__tab">ABOUT US</a>
					<a href="signin.php" class="mdl-layout__tab is-active">SIGN IN</a>
				</div>
			</header>
			<div class="mdl-layout__drawer">
				<span class="mdl-layout-title"><b>Phonebook</b></span>
				<nav class="mdl-navigation">
					<a class="mdl-navigation__link" href="index.php">HOME</a>
					<a class="mdl-navigation__link" href="">ABOUT US</a>
					<a class="mdl-navigation__link" href="signin.php">SIGN IN</a>
				</nav>
			</div>
			<main class="mdl-layout__content">
				<section class="mdl-layout__tab-panel is-active">
					<div class="page-content">
						<div class="mdl-cell mdl-cell--4-col mdl-cell--4-tablet mdl-cell--4-phone mdl-cell--4-offset-desktop mdl-cell--2-offset-tablet">
							<center>
								<div class="form">
									<form action="signin.php" method="post">
										<br>
										<img src="upload/if_profle_1055000.png">
										<br>
										<legend><b style="font-size:25px;">Login to Account</b></legend>
										<hr>
										<div class="mdl-textfield mdl-js-textfield">
											<input name="uid" class="mdl-textfield__input" type="text" id="sample1">
											<label class="mdl-textfield__label" for="sample1">Username</label>
										</div>
										<div class="mdl-textfield mdl-js-textfield">
											<input name="pass" class="mdl-textfield__input" type="password">
											<label class="mdl-textfield__label" for="sample2">Password</label>
											<span class="mdl-textfield__error">Input is not a number!</span>
										</div>
										<br>
										<button name="submit" type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" style="background-color: darkgreen;">
											<i class="material-icons">perm_identity</i>LogIn
										</button>
										<button name="register" type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" style="background-color: red;">
											Register
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