<?php
   if(isset($_POST['submit'])){
    $fullname = $_POST['fullname'];
    $nric = $_POST['nric'];
    $phone= $_POST['phone'];
    $day = $_POST['day'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    $item = $_POST['item'];
    $price = $_POST['price'];
    
    $mysqli = mysqli_connect("127.0.0.1", "root", "","project") or die (mysql_error());

    $sql = "INSERT INTO booking(fullname, nric, phone, day, start_time ,end_time, item, price) VALUES ( '$fullname', '$nric', '$phone','$day','$start_time','$end_time','$item','$price')";
   $result = mysqli_query($conn, $sql) or die ("Query failed");
    mysqli_close($mysqli);
    }
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="./style/layout.css" rel="stylesheet" type="text/css" media="all">
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
 }
html *
{
   font-family: Arial !important;
}
table.calendar {
  border-left: 1px solid #999;
}
tr.calendar-row {
}
td.calendar-day {
  min-height: 80px;
  font-size: 11px;
  position: relative;
  vertical-align: top;
}
* html div.calendar-day {
  height: 80px;
}
td.calendar-day:hover {
  background: #eceff5;
}
td.calendar-day-np {
  background: #eee;
  min-height: 80px;
}
* html div.calendar-day-np {
  height: 80px;
}
td.calendar-day-head {
  background: #ccc;
  font-weight: bold;
  text-align: center;
  width: 120px;
  padding: 5px;
  border-bottom: 1px solid #999;
  border-top: 1px solid #999;
  border-right: 1px solid #999;
}
div.day-number {
  background: #999;
  padding: 5px;
  color: #fff;
  font-weight: bold;
  float: right;
  margin: -5px -5px 0 0;
  width: 20px;
  text-align: center;
}
td.calendar-day, td.calendar-day-np {
  width: 120px;
  padding: 5px;
  border-bottom: 1px solid #999;
  border-right: 1px solid #999;
}
</style>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link href="jquery-ui.css" rel="stylesheet">
<script src="jquery-1.10.2.js"></script>
<script src="jquery-ui.js"></script>
<!--<script src="lang/datepicker-fi.js"></script>-->
<script>
    $(function() {
  <!--$.datepicker.setDefaults($.datepicker.regional['fi']);-->
    $( "#from" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 3,
      onClose: function( selectedDate ) {
        $( "#to" ).datepicker( "option", "minDate", selectedDate );
      }
    });
    $( "#to" ).datepicker({
      defaultDate: "+1w",
    regional: "fi",
      changeMonth: true,
      numberOfMonths: 3,
      onClose: function( selectedDate ) {
        $( "#from" ).datepicker( "option", "maxDate", selectedDate );
      }
    });
  });  </script>
</head>
<body>
<img src="3.jpg" alt="Avatar" align ="middle">
<div class="topnav">
  <a href="home.php">Home</a>
  <a href="booking.php">Booking</a>
  <a href="court.php">Court</a>
  <a href="contact.php">Contact</a>
  <div class="topnav-right">
    <a href="signin.php">Sign out</a>
  </div>
</div>
<br>
<br>
<container>
      <h2 align="center">Please Login First</h2>

     <button onclick="window.location='signin.php'" align="middle">Log In</button>
     
</container>
</body>
</html>