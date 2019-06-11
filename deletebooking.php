<?php

include 'confirg.php';
$id= $_GET['id'];

$result = mysqli_query($mysqli,"DELETE FROM booking WHERE id = $id" );
header("Location:viewbooking.php")
?>