<?php
  if(isset($_POST['Register'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $fullname = $_POST['fullname'];
    $phone= $_POST['phone'];
    $gender = $_POST['gender'];
    $conn = mysqli_connect("127.0.0.1", "root", "","ict600") or die (mysql_error());
    $sql = "INSERT INTO user(username, password, email, fullname, phone, gender) VALUES ('$username', PASSWORD('$password'), '$email', '$fullname', '$phone', '$gender')";
    if (mysqli_query($conn, $sql)){
      echo "Error : " . $sql . "<br>" . mysqli_error($conn);
    } else {
      echo"Error: " . $sql . "<br>" . mysqli_error($conn);
    }
       if($_POST['username']==$username && $_POST['password']==$password)  
    {
    $_SESSION['username']=$username;
    header('location:login1.php');
    }
    mysqli_close($conn);
  }
?><!DOCTYPE html>
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
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="text" placeholder="Enter Password" name="password" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="fullname"><b>Fullname</b></label>
    <input type="text" placeholder="Enter Fullname" name="fullname" required>

    <label for="phone"><b>Phone</b></label>
    <input type="text" placeholder="Enter Phone" name="phone" required>

     <label for="gender"><b>Gender</b></label>
    <input type="radio"  name = "gender" value="male" required><font size="4">Male</font>  
    <input type="radio"  name = "gender" value="female" ><font size="4">Female</font>

    <hr>
    <div class="checkbox-group" name="condition">
      <input type="checkbox" name="condition" required> I agree to submit my details  <b><span class="error"></span></b>
      </div>

    <input type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" name= "Register" value="Register">
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
        <p>You have successfully register</p>
      </div>
     <div class="modal-footer"> 
     <button type="submit"> <a href='login1.php'>Log In</a></button>  
     </div>
    </div>
  </div>
</div>
</form>
  
</body>