<?php
session_start();
include 'confirg.php';
$mysqli = mysqli_connect("127.0.0.1", "root", "","ict600") or die (mysql_error());// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['update'])) {
	
	$id = mysqli_real_escape_string($mysqli,$_POST['id']);
	$fullname = mysqli_real_escape_string($mysqli,$_POST['fullname']);
	$username = mysqli_real_escape_string($mysqli,$_POST['username']);
	$phone = mysqli_real_escape_string($mysqli,$_POST['phone']);	

	if (empty($fullname) || empty($username) || empty($phone)) {
			if (empty($fullname)) {
				echo "<font color='red'> Fullname field is empty</font><br/>";
			}if (empty($username)) {
				echo "<font color='red'> Username field is empty</font><br/>";
			}if (empty($email)) {
				echo "<font color='red'> Email field is empty</font><br/>";
			}
		}else{

			$result = mysqli_query($mysqli,"UPDATE user SET fullname=$fullname, username=$username, phone=$phone, email=$email WHERE id=$id ");
			header("Location : customer.php");
		}	
}
?>