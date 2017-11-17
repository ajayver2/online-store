<?php
session_start();
if(isset($_POST['Logout']))
{
	session_destroy();
	session_unset();
	header("Refresh:0; url='index.php'");
}
$servername = "localhost";
$username = "root";
$password = "";
$database="lms1";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}