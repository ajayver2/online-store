<?php
include('dbcon.php');

if(isset($_POST['regbtn']))
{
	//echo '<script type="text/javascript">alert("Clicked")</script>';
	$bname=$_POST['bname'];
	$bid=$_POST['id'];
	$author=$_POST['author'];
	$pub=$_POST['pub'];
	$edi=$_POST['edition'];
	$status=$_POST['status'];
	$qty=$_POST['quantity'];
	$image = $_FILES['simg']['name'];
	$tempimage = $_FILES['simg']['tmp_name'];
	move_uploaded_file($tempimage,"uploads/$image");
	"INSERT INTO `books`(`Name`, `Author`, `Publisher`, `Edition`, `Status`, `Quntity`, `BookID`, `Image`) VALUES ('$bname','$author','$pub','$edi','$status','$qty','$bid','$image')";
	$query_run = mysqli_query($conn,$query);
}
?>
	<html>
	<title>Registration</title>

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
		<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<style>

		</style>
	</head>



	<!-- Your content goes here -->

	<div class="mdl-grid mdl-grid--no-spacing">
		<div class="mdl-cell mdl-cell--10-col mdl-cell--1-offset-desktop mdl-cell--1-offset-tablet mdl-cell--6-col-tablet mdl-cell--4-col-phone">
			<div class="about">
				<br>
				<fieldset>
					<legend>
						<center>
							<h2>Upload Book Details</h2></center>
					</legend>
					<form class="form-horizontal" role="form" action="abc.php" method="post" enctype="multipart/form-data">


						<input type="text" name="bname" id="firstName" placeholder="Book Name" class="form-control" required>
						<input name="id" type="number" id="firstName" placeholder="Book ID" class="form-control" required>

						<input name="author" type="text" placeholder="Author Name" class="form-control" required>
						<input name="pub" type="text" id="password" placeholder="Publisher Name" class="form-control" required>
						<input name="edition" type="number" id="password" placeholder="Edition" class="form-control" required>

						<input name="quantity" type="text" id="password" placeholder="Quantity" class="form-control" required>
						<center>
							Status
							<br> Avaliable

							<input type="radio" name="status" value="Avaliable" required> Not Avaliable
							<input type="radio" name="status" value="Not Avaliable" required>

							<input type="file" name="simg" required>


							<button name="regbtn" type="submit">Register</button>
						</center>
					</form>
				</fieldset>
				<!-- /form -->
			</div>
			<!-- ./container -->

		</div>
	</div>

	</div>
	</main>
	</div>

	</body>

	</html>