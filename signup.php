<?php
  if(isset($_POST['Register'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $fullname = $_POST['fullname'];
    $phone= $_POST['phone'];
    $gender = $_POST['gender'];
    $conn = mysqli_connect("127.0.0.1", "root", "","project") or die (mysql_error());
    $sql = "INSERT INTO user(username, password, email, fullname, phone, gender) VALUES ('$username', PASSWORD('$password'), '$email', '$fullname', '$phone', '$gender')";
    if (mysqli_query($conn, $sql)){
      echo "Error : " . $sql . "<br>" . mysqli_error($conn);
    } else {
      echo"Error: " . $sql . "<br>" . mysqli_error($conn);
    }
       if($_POST['username']==$username && $_POST['password']==$password)  
    {
      $_SESSION['username']=$username;
      header('location:signin.php');
    }
    mysqli_close($conn);
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="./style/layout.css" rel="stylesheet" type="text/css" media="all">
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: black;
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

<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Pawdssword" name="password" required>

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
     <button type="submit"><a href='signin.php'>Log In</a></button>  
     </div>
    </div>
  </div>
</div>
</form>

</body>
</html>
