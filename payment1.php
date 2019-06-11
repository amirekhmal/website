<?php
  session_start();
  include'confirg.php';


  $sql = "SELECT * FROM booking";
    $query = mysqli_query($mysqli, $sql);
    $link = mysqli_fetch_array($query);
    $id = $link['id'];
    $fullname = $link['fullname'];
    $phone = $link['phone'];
    $day = $link['day'];
    $start_time = $link['start_time'];
    $end_time = $link['end_time'];
    $price=$link['price'];
    $item=$link['item'];
    $nric=$link['nric'];
  
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="./style/layout.css" rel="stylesheet" type="text/css" media="all">
  <link type="text/css" rel="stylesheet" href="media/layout.css" />
  <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
  <script src="js/daypilot/daypilot-all.min.js" type="text/javascript"></script>
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
  <a href="home.php">Home</a>
  <a href="booking.php">Booking</a>
  <a href="court.php">Court</a>
  <a href="contact.php">Contact</a>
  <div class="topnav-right">
    <a href="signin.php">Sign out</a>
  </div>
</div>
<h2 align="center"> Receipt</h2>
<form method="post" action="payment1.php">   
          <table border="0" width="800" align="center">
             
                  <td>Name</td>
                    <td><input type="text" size="60" name="name" value="<?php echo $fullname; ?>" style='border:none' readonly></td>
                </tr>
                <tr>
                  <td>Phone Number: </td>
                    <td><input type="text" size="60" name="phone" value="<?php echo $phone; ?>" style='border:none' readonly></td>
                </tr>
                <tr>
                  <td>NRIC: </td>
                    <td><input type="text" size="60" name="nric" value="<?php echo $nric; ?>" style='border:none' readonly> </td>
                </tr>
                <tr>
                  <td> Day: </td>
                    <td><input type="text" size="60" name="day" value="<?php echo $day; ?>" style='border:none' readonly></td>
                </tr>
                <tr>
                  <td>Start time</td>
                    <td><input type="text" size="60" name="start_time" value="<?php echo $start_time; ?>" style='border:none' readonly></td>
                </tr>
                <td>End time :</td>
                    <td><input type="text" size="60" name="end_time" value="<?php echo $end_time; ?>" style='border:none' readonly></td>
                </tr>
                <td>Price :</td>
                    <td><input type="text" size="60" name="price" value="<?php echo $price; ?>" style='border:none' readonly></td>
                </tr><td>Court :</td>
                    <td><input type="text" size="60" name="item" value="<?php echo $item; ?>" style='border:none' readonly></td>
                </tr>
                <tr>
                  <td colspan="2">
                  <center><input type="button" name="print" value="Print" onClick="window.print();"> &nbsp; <input type="button" name="back" value="Back" onClick="location.href='bookingg.php';"></center>
                    </td>
                </tr>
              </table>

        </form>
        
</body>

</html>