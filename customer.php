<?php

include 'confirg.php' ; 
$result = mysqli_query($mysqli,"SELECT * FROM user ORDER BY id");

?>

<!DOCTYPE html>
<html>
<head>
	<title>registered customer</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #00ced1;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav-right {
  float: right;
}
img {
    display: block;
    margin-left: auto;
    margin-right: auto;
}
.container {
    position: relative;
    text-align: center;
    color: black;
     max-width: 1500px;
  margin: 0 auto;
  }
  .hero-text {
  text-align: left;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: black;
}
.bg-text {
  /*background-color: rgb(0,0,0); Fallback color */
 /* background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: black;
  font-weight: bold;
 
  position: absolute;
  top: 79.5%;
  left: 36.5%;

  transform: translate(-50%, -50%);
  z-index: 2;
  width: 40%;
  padding: 10px;
 }
 table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;    
}
</style>
</head>
<body>
<img src="3.jpg" alt="Avatar" align ="middle">
<div class="topnav">
  <a href="adminpage.php"><i class="fa fa-fw fa-home"></i>Admin</a>
  <a href="customer.php">customer</a>
  	 <a href="viewbooking.php">booking</a>
  	<a href="facility.php">facility</a>
  <div class="topnav-right">
    <a href="signout.php" onclick="document.getElementById('id01').style.display='block'"><i class="fa fa-fw fa-user"></i>Sign out</a>
  </div>
</div>
<br>
<br>
<div class="container">
<table width="80%" border="0" align="middle">
<tr bgcolor="#CCCCCC">	
	<td>fullname</td>
	<td>username</td>
	<td>phone</td>
	<td>email</td>
	<td>gender</td>
</tr>
<?php
while ($res = mysqli_fetch_array($result)) {
	echo"<tr>";
	echo"<td>".$res['fullname']."</td>";
	echo"<td>".$res['username']."</td>";
	echo"<td>".$res['phone']."</td>";
	echo"<td>".$res['email']."</td>";
	echo"<td>".$res['gender']."</td>";
	echo"<td><a href=\"editcustomer.php?id=$res[id]\">Edit</a> | <a href=\"deletecustomer.php?id=$res[id]\" onClick=\"return confirm('Are you sure?')\">Delete</a></td>";
	}
?>
</table>
</div>
</body>
</html>
