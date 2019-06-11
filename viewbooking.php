<?php

include 'confirg.php';
$result = mysqli_query($mysqli,"SELECT * FROM booking ORDER BY id");

?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Booking</title>
  <!-- demo stylesheet -->
      <link type="text/css" rel="stylesheet" href="media/layout.css" />

  <!-- helper libraries -->
  <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>

  <!-- daypilot libraries -->
        <script src="js/daypilot/daypilot-all.min.js" type="text/javascript"></script>

</head>
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
  <td>Nric</td>
  <td>phone</td>
  <td>day</td>
  <td>start_time</td>
  <td>end_time</td>
  <td>price</td>
  <td>item</td>
</tr>
<?php
while ($res = mysqli_fetch_array($result)) {
  echo"<tr>";
  echo"<td>".$res['fullname']."</td>";
  echo"<td>".$res['nric']."</td>";
  echo"<td>".$res['phone']."</td>";
  echo"<td>".$res['day']."</td>";
  echo"<td>".$res['start_time']."</td>";
  echo"<td>".$res['end_time']."</td>";
  echo"<td>".$res['price']."</td>";
  echo"<td>".$res['item']."</td>";
  echo"<td> <a href=\"deletebooking.php?id=$res[id]\" onClick=\"return confirm('Are you sure?')\">Delete</a></td>";
  }
?>
</table>
</div>
</body>
</html>

