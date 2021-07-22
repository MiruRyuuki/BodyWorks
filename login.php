<!DOCTYPE HTML>
<html>
<head>
<title>BodyWork | Login</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<header>
<body background = "gym.jpg"></body> 		
<div class="clearing"></div>
</header>

<div id="content" class="content">
<!-- <h1>Login</h1> -->
<?php
if(isset($_GET['err'])){
	?>
	<div class="warning"><?php echo $_GET['err']?></div>
	<?php
}
?>
<form action="doLogin.php" method="post" id="form_login" name="form_login" onsubmit="return validate();">
	<div class="form">
		<table class="table">
			<tr>
				<th align="left">Email</th>
				<td><input type="text" name="email" value="" ></td>
			</tr>
			<tr>
				<th align="left">Password</th>
				<td><input type="password" name="password" value="" ></td>
			</tr>
			<tr>
				<th colspan="2" align="left"><button type="submit" class="btn-form">LOGIN</button></td>
			</tr>
		</table>
	</div>
</form>
</div>
</body>
<script type="text/javascript">
	function validate(){
		var email = form_login.email.value;		
		var password = form_login.password.value;	
		if(email=="" || password==""){
			alert("Please fill all required fields!");
			return false;
		}	
		return true;
	}
</script>
    </body>
</html>
