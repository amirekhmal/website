<?php  
	session_start();
	include 'confirg.php';
$id = $_GET['id'];

$result= mysqli_query($mysqli,"SELECT * FROM facility WHERE id=$id");
while ($res = mysqli_fetch_array($result)) {
	$currentdate= $res['currentdate'];
	$ball=$res['ball'];
	$net=$res['net'];
	$goal=$res['goal'];
	$status1=$res['status1'];
	$status2=$res['status3'];
	$status3=$res['status3'];
	$status4=$res['status4'];
	$status5=$res['status5'];
	$status6=$res['status6'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
</head>
<body>
	<form name="edit" method="post" action="editprocess1.php">
		<table>
			<tr>
				<td>Current Date</td>
				<td><input type="text" name="currentdate" value="<?php echo $currentdate?>"></td>
			</tr>
			<tr>
				<td>Ball</td>
				<td><input type="text" name="ball" value="<?php echo $ball?>"></td>
			</tr>
			<tr>
				<td>Net</td>
				<td><input type="text" name="net" value="<?php echo $net?>"></td>
			</tr>
			<tr>
				<td>Goal</td>
				<td><input type="text" name="goal" value="<?php echo $goal?>"></td>
			</tr>
			<tr>
				<td>status1</td>
				<td><input type="text" name="goal" value="<?php echo $status1?>"></td>
			</tr>
			<tr>
				<td>status2</td>
				<td><input type="text" name="goal" value="<?php echo $status2?>"></td>
			</tr>
			<tr>
				<td>status3</td>
				<td><input type="text" name="goal" value="<?php echo $status3?>"></td>
			</tr>
			<tr>
				<td>status4</td>
				<td><input type="text" name="goal" value="<?php echo $status4?>"></td>
			</tr>
			<tr>
				<td>status5</td>
				<td><input type="text" name="goal" value="<?php echo $status5?>"></td>
			</tr>
			<tr>
				<td>status6</td>
				<td><input type="text" name="goal" value="<?php echo $status6?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value="<?php echo $_GET['id']?>"></td>
				<td><input type="submit" name="update" value="update"></td>
			</tr>
		</table>
		
	</form>
</body>
</html>