<?php
include("db.php");
$getid = $_GET['edit'];
$seledittwo = "SELECT * FROM `insertdeleteedittable` WHERE `id` = '$getid'";
$qry = mysqli_query($connect, $seledittwo);
$selassoc = mysqli_fetch_assoc($qry);
$id = $selassoc['id'];
$firstname = $selassoc['firstname'];
$lastname = $selassoc['lastname'];
$email = $selassoc['email'];
					$phonenumber = $selassoc['phoneNumber'];
					
$state = $selassoc['state'];

if(isset($_POST['updateedit'])) {
	$upid =  $_POST['upid'];
	$upfirstname =  $_POST['upfirstname'];
	$uplastname =  $_POST['uplastname'];
	$upemail =  $_POST['upemail'];
	$phonenumber = $_POST['phonenumber'];
$state = $_POST['state'];
	$seleditt = "UPDATE `insertdeleteedittable` SET `firstname`='$upfirstname',`lastname`='$uplastname',`email`='$upemail' ,`phoneNumber`='$phonenumber',`state`='$state' WHERE `id` = '$upid'";
	echo $seleditt;
	$qry = mysqli_query($connect,$seleditt);
	if($qry) {
		header("location: display.php");
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<style type="text/css">
		
		body{
		background-color:#629e9a;
		padding: 40px;
		}
		input[type=text], select, textarea {
		width: 40%;
		padding: 12px;
		border: 3px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
		margin-top: 6px;
		margin-bottom: 16px;
		resize: vertical;
		}
		
		input[type=submit] {
		background-color: #4CAF50;
		color: yellow;
		padding: 12px 30px;
		border: none;
		border-radius: 8px;
		cursor: pointer;
		}
		</style>
	</head>
	<body>
		<form method="POST" action="">
			<input type="text" name="upid" value="<?php echo $id; ?>" disabled><br><br>
			<input type="text" name="upfirstname" value="<?php echo $firstname; ?>"><br><br>
			<input type="text" name="uplastname" value="<?php echo $lastname ; ?>"><br><br>
			<input type="text" name="upemail" value="<?php echo $email; ?>"><br><br>
			<input type="text" name="phonenumber" value="<?php echo $phonenumber; ?>"><br ><br >
			<input type="text" name="state" value="<?php echo $state; ?>"><br ><br >
			<input type="submit" name="updateedit" value="Update">
		</form>
	</body>
	<br><br>
	<a href="insertdeleteedit.php">Insert Data To Mysql Database</a><br>
	<a href="display.php">Display all Data</a>
</html>