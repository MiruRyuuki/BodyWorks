<?php 
session_start();
require("connection.php");

$email = $_POST['email'];
$password = $_POST['password'];

if(empty($email)){
	header("location:login.php?err=Email is required!");
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	header("location:login.php?err=Invalid email format!");
}
else if(empty($password)){
	header("location:login.php?err=Password is required!");
}

else{

	$sql = "SELECT * FROM users WHERE email = '$email' AND password = '".md5($password)."'";
	$result = mysqli_query($con, $sql);
	$rowcount = mysqli_num_rows($result);
	if($rowcount){
		$row = $result->fetch_assoc();
		$_SESSION['login'] = true;
		$_SESSION['users_fname'] = $row['fname'];
		$_SESSION['users_id'] = $row['id'];

		header("location:index.php");
		// die("User exist!");
	}
	else{
		header("location:login.php?err=No such user!");
		// die("No such user!");
	}

}
