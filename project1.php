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
    color: white;
     max-width: 1500px;
  margin: 0 auto;
  }
  .hero-text {
  text-align: left;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
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
 
</style>
</head>
<body>
<img src="3.jpg" alt="Avatar" align ="middle">
<div class="topnav">
  <a href="home.php"><i class="fa fa-fw fa-home"></i>Home</a>
  <a href="booking.php">Booking</a>
  <a href="court.php">Court</a>
  <a href="contact.php">Contact</a>
  <div class="topnav-right">
    <a href="signin.php"><i class="fa fa-fw fa-user"></i>Sign In</a>
  </div>
</div>
<br>
<br>
<div class="container">

<img src="4.png" alt="Avatar" align ="middle" style="width:70%;">
<div class="bg-text"align ="left">
    <h1><font face="Comic Sans MS" color="red">SIX FUTSAL COURT</font></h1>
    <h2><font face ="Comic Sans MS">3 PUZZLE PITCH<br>3 NORMAL PITCH<br><a href="booking.php">Click For Reservation</font></h2>
  </div>

</div>
<img src="5.png" alt="Avatar" align ="middle"style="width:70%;">
</body>
</html>
