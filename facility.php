<?php

include 'confirg.php';
$result = mysqli_query($mysqli,"SELECT * FROM facility ORDER BY id");

?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
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
  color: white;
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
<table width="80%" border="0">
<tr bgcolor="#CCCCCC">	
	<td>current date</td>
	<td>ball</td>
	<td>net</td>
	<td>goal post</td>
  <td>status1</td>
  <td>status2</td>
  <td>status3</td>
  <td>status4</td>
  <td>status5</td>
  <td>status6</td>
	
</tr>
<?php
while ($res = mysqli_fetch_array($result)) {
	echo"<tr>";
	echo"<td>".$res['currentdate']."</td>";
	echo"<td>".$res['ball']."</td>";
	echo"<td>".$res['net']."</td>";
	echo"<td>".$res['goal']."</td>";
  echo"<td>".$res['status1']."</td>";
  echo"<td>".$res['status2']."</td>";
  echo"<td>".$res['status3']."</td>";
  echo"<td>".$res['status4']."</td>";
  echo"<td>".$res['status5']."</td>";
  echo"<td>".$res['status6']."</td>";
	echo"<td><a href=\"editfacility.php?id=$res[id]\">Update</a></td>";
}
?>
</table>

</body>
</html>