<?php 

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];

if(empty($fname)){
	header("location:register.php?err=First Name is required!");
}
else if(empty($lname)){
	header("location:register.php?err=lname is required!");
}
else if(empty($email)){
	header("location:register.php?err=Email is required!");
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	header("location:register.php?err=Invalid email format!");
}
else if(empty($password)){
	header("location:register.php?err=Password is required!");
}
else if(empty($username)){
	header("location:register.php?err=username is required!");
}
else if(empty($gender)){
	header("location:register.php?err=gender is required!");
}
else if(empty($height)){
	header("location:register.php?err=height is required!");
}
else if(empty($weight)){
	header("location:register.php?err=weight is required!");
}
else{

	$sql = "INSERT INTO students (fname,lname,email,password,username,gender,height,weight)
	VALUES ('$fname','$lname','$email','".md5($password)."','$username', '$gender','$height', '$weight')";

	if (mysqli_query($con, $sql)) {
		header("location:register.php?msg=Register successfull!");
	} 
	else{
		die("Failed to save comment : ".mysqli_error($con));
	}

}