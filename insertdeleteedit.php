<?php
include("db.php");
if(isset($_POST['submitinserdetails'])) {
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$state = $_POST['state'];
if(!empty($firstname) && !empty($lastname) && !empty($email) ) {
	$sql = "INSERT INTO `insertdeleteedittable`( `firstname`, `lastname`, `email`, `phoneNumber`, `state`)
	VALUES ('$firstname','$lastname','$email', '$phonenumber', '$state')";
$qry = mysqli_query($connect, $sql);
if($qry) {
	echo "<br />inserted successfully";
}
} else {
	echo "<br />all fields must be filled";
}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<style type="text/css">
			
			body{
				padding: 40px;
				background-color:#46704c;
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
		<div><img src="user.png" width="300px" height="300px"></div>
		<form action="" method="POST">
			
			<input type="text" name="firstname" placeholder="Enter First Name"><br ><br >
			<input type="text" name="lastname" placeholder="Enter Last Name"><br ><br >
			<input type="text" name="email" placeholder="Enter Email"><br ><br >
			<input type="text" name="phonenumber" placeholder="Enter Phone Number"><br ><br >
			<input type="text" name="state" placeholder="Enter State"><br ><br >
			<input type="submit" name="submitinserdetails" value="insert">
		</form>
		<br><br>
		<a href="display.php">Display all Data</a>
	</body>
</html>