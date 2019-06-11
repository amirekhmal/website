<?php

include 'confirg.php';

if (isset($_POST['update'])) {
	
	$id = mysqli_real_escape_string($mysqli,$_POST['id']);
	$currentdate = mysqli_real_escape_string($mysqli,$_POST['currentdate']);
	$ball = mysqli_real_escape_string($mysqli,$_POST['ball']);
	$net = mysqli_real_escape_string($mysqli,$_POST['net']);
	$status1 = mysqli_real_escape_string($mysqli,$_POST['status1']);
	$status2 = mysqli_real_escape_string($mysqli,$_POST['status2']);
	$status3 = mysqli_real_escape_string($mysqli,$_POST['status3']);
	$status4 = mysqli_real_escape_string($mysqli,$_POST['status4']);
	$status5 = mysqli_real_escape_string($mysqli,$_POST['status5']);
	$status6 = mysqli_real_escape_string($mysqli,$_POST['status6']);


	if (empty($currentdate) || empty($ball) || empty($net) || empty($goal)) {
			if (empty($currentdate)) {
				echo "<font color='red'> currentdate field is empty</font><br/>";
			}if (empty($ball)) {
				echo "<font color='red'> ball field is empty</font><br/>";
			}if (empty($net)) {
				echo "<font color='red'> net field is empty</font><br/>";
			}if (empty($goal)) {
				echo "<font color='red'> goal field is empty</font><br/>";
			}
		}else{

			$result = mysqli_query($mysqli,"UPDATE facility SET currentdate=$currentdate, ball=$ball, net=$net , goal=$goal status1=$status1 status2=$status2 status3=$status3 status4=$status4 status5=$status5 status6=$status6 WHERE id=$id ");
			header("Location : facility.php");
		}	
}
?>