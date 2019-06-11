<?php
  if(isset($_POST['submit'])){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone= $_POST['phone'];
    $comment = $_POST['comment'];
    $conn = mysqli_connect("127.0.0.1", "root", "","project") or die (mysql_error());
    $sql = "INSERT INTO contact (fullname, email, phone, comment) VALUES ( '$fullname', '$email', '$phone','$comment')";
   $result = mysqli_query($conn, $sql) or die ("Query failed");
    mysqli_close($conn);
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
  color: black;
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
  color:black;
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
* {
    box-sizing: border-box;
}

/* Add padding to containers */
.container {
    padding: 16px;
    background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Overwrite default styles of hr */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.registerbtn:hover {
    opacity: 1;
}

/* Add a blue text color to links */
a {
    color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
    background-color: #f1f1f1;
    text-align: center;
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
<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
  <div class="container"style="color: black">
    <h1>FEEDBACK</h1>
    <p>Please fill in this form .</p>
    <hr>

    <label for="fullname"><b>Fullname</b></label>
    <input type="text" placeholder="Enter Fullname" name="fullname" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="phone"><b>Phone</b></label>
    <input type="text" placeholder="Enter Phone" name="phone" required>

    <br>
    <label for="comment"><b>Comment</b></label>
    <input type="text" placeholder="Enter Comment" name="comment" required>

    <hr>
    <div class="checkbox-group" name="condition">
      <input type="checkbox" name="condition" required> I agree to submit my details  <b><span class="error"></span></b>
      </div>

    <input type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" name= "submit" value="submit">
  </div>
  
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Message</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
       <span aria-hidden="true">&times;</span>
      </button>
     </div>
      <div class="modal-body">
        <p>You have successfully sent</p>
      </div>
     <div class="modal-footer"> 
     <button type="submit"> <a href='lab5.php'>ok</a></button>  
     </div>
    </div>
  </div>
</div>
</form>
</body>
</html>