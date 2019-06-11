<?php
  session_start();
  include'confirg.php';

  $sql = "SELECT * FROM booking";
    $query = mysqli_query($db, $sql);
    $link = mysqli_fetch_array($query);
    $id = $link['id'];
    $fullname = $link['fullname'];
    $phone = $link['phone'];
    $day = $link['day'];
    $start_time = $link['start_time'];
    $end_time = $link['end_time'];
    $price=$link['price'];
    $item=$link['item'];
  
?>
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
    <a href="signout.php" ><i class="fa fa-fw fa-user"></i>Sign out</a>
  </div>
</div>
<h2 align="center"> PAYMENT</h2>

<?php 

$paypal_url='https://www.sandbox.paypal.com/cgi-bin/webscr'; // Test Paypal API URL
$paypal_id='your_seller_id'; // Business email ID
?>
<h4>Welcome, Guest</h4>
 
<div class="product">            
    <div class="image">
        <img src="https://www.phpgang.com/wp-content/uploads/gang.jpg" />
    </div>
    <div class="name">
        PHPGang Payment
    </div>
    <div class="price">
        Price:$10
    </div>
    <div class="btn">
    <form action="<?php echo $paypal_url; ?>" method="post" name="frmPayPal1">
    <input type="hidden" name="business" value="<?php echo $paypal_id; ?>">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="item_name" value="PHPGang Payment">
    <input type="hidden" name="item_number" value="1">
    <input type="hidden" name="credits" value="510">
    <input type="hidden" name="userid" value="1">
    <input type="hidden" name="amount" value="10">
    <input type="hidden" name="cpp_header_image" value="https://www.phpgang.com/wp-content/uploads/gang.jpg">
    <input type="hidden" name="no_shipping" value="1">
    <input type="hidden" name="currency_code" value="USD">
    <input type="hidden" name="handling" value="0">
    <input type="hidden" name="cancel_return" value="http://demo.phpgang.com/payment_with_paypal/cancel.php">
    <input type="hidden" name="return" value="http://demo.phpgang.com/payment_with_paypal/success.php">
    <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
    <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form> 
    </div>
</div>
</body>
</html>