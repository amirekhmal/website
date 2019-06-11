<?php
session_start();

	/*if(empty($errors)){
	include 'confirg.php';
		$conn = mysqli_connect($servername, $username, $password,  $dbname);
		
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}*/
		if (empty($errors)){ 

			include 'confirg.php';
			$mysqli = mysqli_connect ($servername,$username,$password,$dbname);
			if(!$mysqli){
				die ("Error".mysqli_connect_error());
			}

		
		$day = intval(strtotime(htmlspecialchars($_POST["day"])));
		$start_time = (60*60*intval(htmlspecialchars($_POST["start_time"]))) + (60*intval(htmlspecialchars($_POST["start_minute"])));
		$end_time = (60*60*intval(htmlspecialchars($_POST["end_time"]))) + (60*intval(htmlspecialchars($_POST["end_minute"])));
		$name = htmlspecialchars($_POST["name"]);
		$phone = htmlspecialchars($_POST["phone"]);
		$item = htmlspecialchars($_POST["item"]);
		$nric = htmlspecialchars($_POST["nric"]);
		$price = htmlspecialchars($_POST["price"]);
		
		$start_epoch = $day + $start_time;
		$end_epoch = $day + $end_time;
		
		// prevent double booking
		$sql = "SELECT * FROM booking WHERE item='$item' AND (start_time>=$start_time OR end_time>=$start_time) AND canceled=0";
		$result = mysqli_query($mysqli, $sql);
		if (mysqli_num_rows($result) > 0) {
			// handle every row
			while($row = mysqli_fetch_assoc($result)) {
				// check overlapping at 10 minutes interval
				for ($i = $start_epoch; $i <= $end_epoch; $i=$i+600) {
					if ($i>($row["day"]+$row["start_time"]) && $i<($row["day"]+$row["end_time"])) {
						echo '<h3><font color="red">Unfortunately ' . $item . ' has already been booked for the time requested.</font></h3>';
						goto end;
					}
				}
			}				
		}
				
		$sql = "INSERT INTO booking (fullname, nric, phone, day, start_time, end_time, price
		,item)
			VALUES ('$name','$nric','$phone', $day, $start_time, $end_time,'$price','$item')";
		if (mysqli_query($mysqli, $sql)) {
		    echo "<h3>Booking succeed.</h3>";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
		}
		
		end:
		mysqli_close($mysqli);
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>booking</title>
</head>

<body>
<a href="index.php"><p>Back to the booking calendar</p></a>

</body>

</html>