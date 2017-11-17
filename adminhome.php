<?php
include('dbcon.php');
if(isset($_POST['submit']))
{
	$bname=$_POST['bname'];
	$bid=$_POST['id'];
	$author=$_POST['author'];
	$pub=$_POST['pub'];
	$edi=$_POST['edition'];
	$status=$_POST['status'];
	$qty=$_POST['quantity'];
	$image = $_FILES['uimg']['name'];
	$tempimage = $_FILES['uimg']['tmp_name'];
	move_uploaded_file($tempimage,"upload/$image");
	$query="INSERT INTO `books`(`Name`, `Author`, `Publisher`, `Edition`, `Status`, `Quntity`, `BookID`, `Image`) VALUES ('$bname','$author','$pub','$edi','$status','$qty','$bid','$image')";
	$query_run=mysqli_query($conn,$query);
	if($query_run)
	{
		echo '<script type="text/javascript">alert("Successfully Data Inserted......")</script>';
	}
	else
	{
		echo '<script type="text/javascript">alert("Something went wrong....")</script>';
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
			width: 35%;
			height: 50%;
			background-color: white;
			margin-left: 30%;
			margin-top: 12%;
			box-shadow: 3px 3px 5px black;
		}
		
		p {
			color: darkblue;
		}
	</style>

	<body>
		<div class="log">
			<form method="post" action="adminhome.php" enctype="multipart/form-data">
				<center>
					<legend>
						<p>Upload Book Details</p>
					</legend>


					<table col="1" border="1">
						<tr>
							<th>Mobile Name</th>
							<th>
								<input type="text" name="bname" required>
							</th>
						</tr>
						<tr>
							<th>Raiting</th>
							<th>
								<input type="number" name="id" required>
							</th>
						</tr>
						<tr>
							<th>Price</th>
							<th>
								<input type=text name="author" required>
							</th>
						</tr>
						<tr>
							<th>Model:</th>
							<th>
								<input type="text" name="pub" required>
							</th>
						</tr>
						<tr>
							<th>Year:</th>
							<th>
								<input type="number" name="edition" required>
							</th>
						</tr>
						<tr>
							<th>Status</th>
							<th>
								<input type="radio" name="status" value="Not Avaliable"> No
								<input type="radio" name="status" value="Avaliable">Yes
							</th>
						</tr>
						<tr>
							<th>Quantity</th>
							<th>
								<input type="number" name="quantity" required>
							</th>
						</tr>
						<tr>
							<th>Upload Image</th>
							<th>
								<input type="file" name="uimg" required>
							</th>
						</tr>
					</table>
					<br>
					<button type="submit" name="submit">Submit</button>

				</center>
			</form>
		</div>
	</body>

	</html>