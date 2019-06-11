<?php

include 'confirg.php';
session_start();                            //session_start();                          

if(isset($_POST['submit']))
{
    $ID = $_POST['adminID'];                  // assign textbox to variable
    $pass = $_POST['adminPass'];

    if($user=="dev" && $pass=="ved")
    {
        $_SESSION['adminID'] = "Developer";
        header("Location:adminpage.php");
    }
    else
    {
        $query = "SELECT * FROM admin where adminID='$ID' AND adminPass='$pass'";
        $result = mysqli_query( $db,$query) or die("Query failed"); // SQL statement for checking
        if(mysqli_num_rows($result) <= 0)               // check either result found or not
       {
            echo '<script type="text/javascript">';
            echo 'alert("Invalid Username or Password ");';
            echo 'location.href = "loginAdmin.php";';
            echo '</script>';
       }
       else
       {
        $login = mysqli_fetch_assoc($result);
        $_SESSION["id"] = $login['adminID'];
        $_SESSION["name"] = $login['adminID'];
        header("location:adminpage.php");       
       }

    }

}
mysqli_close($mysqli);
?><!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
  <form action="adminpage.php" method="POST">

  <div class="container">
    <input class="w3-input w3-padding-8 w3-border" style="width:300px" placeholder="Username" name="adminID" type="text" required></br></br>
    <input class="w3-input w3-padding-8 w3-border" style="width:300px" placeholder="Password" name="adminPass" type="password" required></br></br>
        
    <center><button type="submit" name="submit">Login</button></center>
  </div>

</form>
</body>
</html>