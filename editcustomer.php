<?php  
	session_start();
	include 'confirg.php';
$id = $_GET['id'];

$result= mysqli_query($mysqli,"SELECT * FROM user WHERE id=$id");
while ($res = mysqli_fetch_array($result)) {
	$fullname=$res['fullname'];
	$username=$res['username'];
	$phone=$res['phone'];
	$email=$res['gender'];
	$gender=$res['email'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
</head>
<body>
	<form name="edit" method="post" action="editprocess.php">
		<table>
			<tr>
				<td>Fullname</td>
				<td><input type="text" name="fullname" value="<?php echo $fullname?>"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" value="<?php echo $username?>"></td>
			</tr>
			<tr>
				<td>Phone</td>
				<td><input type="text" name="phone" value="<?php echo $phone?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="fullname" value="<?php echo $fullname?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value="<?php echo $_GET['id']?>"></td>
				<td><input type="submit" name="update" value="update"></td>
			</tr>
		</table>
		
	</form>
</body>
</html>