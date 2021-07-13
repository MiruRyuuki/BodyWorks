<!DOCTYPE html>
<html>
<head>
<title>BodyWork | Register</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="content" class="content">
<h1>Register</h1> <br>
<?php
if(isset($_GET['err'])){
	?>
	<div class="warning"><?php echo $_GET['err']?></div>
	<?php
}
?>
<?php
if(isset($_GET['msg'])){
	?>
	<div class="message"><?php echo $_GET['msg']?></div>
	<?php
}
?>

<form action="doRegister.php" method="post" id="form_register" onsubmit="return validate();">
	<table class="table">
        <tr>
			<th align="left">First Name</td>
			<td><input type="text" name="fname" value=""></td>
		</tr>
		<tr>
			<th align="left">Last Name</td>
			<td><input type="text" name="lname" value=""></td>
		</tr>
		<tr>
			<th align="left">Email</td>
			<td><input type="text" name="email" value=""></td>
		</tr>
		<tr>
			<th align="left">Password</td>
			<td><input type="password" name="password" value=""></td>
		</tr>
		<tr>
			<th align="left">Username</td>
			<td><input type="text" name="username" value=""></td>
		</tr>
        <tr>
			<th align="left">Gender</td>
			<td><label><input type="radio" name="gender" value="Male" /> Male</label>
            <label><input type="radio" name="gender" value="Female" /> Female</label></td>
		</tr>
        <tr>
			<th align="left">Height</td>
			<td><input type="text" name="height" value=""></td>
		</tr>
		<tr>
			<th align="left">Weight</td>
			<td><input type="text" name="weight" value=""></td>
		</tr>
		<tr>
			<th colspan="2" align="left"><button type="submit" class="btn-form">Submit</button></td>
		</tr>
	</table>
	
</form>	
</div>
</body>
<script type="text/javascript">
	function validate(){
        var fname = form_register.fname.value;	
		var lname = form_register.lname.value;	
		var email = form_register.email.value;		
		var password = form_register.password.value;	
		var username = form_register.username.value;	
        var gender = form_register.gender.value;
        var height = form_register.height.value;	
        var weight = form_register.weight.value;
		if(Fname=="" || lname=="" || email=="" || password=="" || username=="" || gender==""|| height=="" || weight==""){
			alert("Please fill all required fields!");
			return false;
		}	
		return true;
	}
</script>
</html> 