<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$mysqli = mysqli_connect("127.0.0.1", "root", "","project") or die (mysql_error());// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>