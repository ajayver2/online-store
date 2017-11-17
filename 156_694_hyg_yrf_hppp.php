<?php
include('dbcon.php');
if(isset($_POST['submit']))
{
	$uid=$_POST['uid'];
	$pass=$_POST['pass'];
	$query="SELECT * FROM `Admin` WHERE Username = '$uid' AND Password = '$pass'";
	$query_run=mysqli_query($conn,$query);
	$num=mysqli_num_rows($query_run);
	if($num>0)
	{
		header('location:adminhome.php');
	}
}
?>
	<html>

	<head>
		<title>Admin Server</title>
	</head>
	<style>
		body {
			background-color: darkgrey;
		}
		
		.log {
			width: 20%;
			height: auto;
			background-color: white;
			margin-left: 38%;
			margin-top: 18%;
			box-shadow: 3px 3px 5px black;
		}
		
		p {
			color: darkblue;
		}
	</style>

	<body>
		<div class="log">
			<form method="post" action="156_694_hyg_yrf_hppp.php">
				<center>
					<legend>
						<p>Admin Login</p>
					</legend>
					Username:
					<input type="text" name="uid">
					<br>
					<br> Password:
					<input type="password" name="pass">
					<br>
					<br>
					<button type="submit" name="submit">Login</button>
					<br>
					<br>
				</center>
			</form>
		</div>
	</body>

	</html>