<!DOCTYPE html>
<html lang="en">
<head>
	<title>BodyWorks | Contact Us Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="#">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
<!--===============================================================================================-->
</head>
<body>

	<nav class="navbar navbar-expand d-flex flex-column align-item-start" id="sidebar">
		<a href="#" class="navbar-brand">
			<div>
			<img height="200" src="images/BodyWorks_Logo.png" alt="BodyWorks Logo">
			</div>
		</a>
		<ul class="navbar-nav d-flex flex-column mt-5 w-100">
			<li class="nav-item w-100">
				<a href="#" class="nav-link text-light pl-4">Home</a>
			</li>
			<li class="nav-item w-100">
				<a href="aboutUs.php" class="nav-link text-light pl-4">About Us</a>
			</li>
			<li class="nav-item w-100">
				<a href="#" class="nav-link text-light pl-4">Blog</a>
			</li>
			<li class="nav-item dropdown w-100">
				<a href="#" class="nav-link dropdown-toggle text-light pl-4" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">Service</a>
				<ul class="dropdown-menu w-100" aria-labelledby="navbarDropdown">
					<li><a href="#" class="dropdown-item text-light pl-4 p-2">Service 01</a></li>
					<li><a href="#" class="dropdown-item text-light pl-4 p-2">Service 02</a></li>
					<li><a href="#" class="dropdown-item text-light pl-4 p-2">Service 03</a></li>
				</ul>
			</li>
			<li class="nav-item w-100">
				<a href="contactUs.php" class="nav-link text-light pl-4 active">Contact Us</a>
			</li>
			<hr>
			<li class="nav-item w-100">
				<a href="#" class="nav-link text-light pl-4">Profile</a>
			</li>
		</ul>
    </nav>

	<div class="bg-contact100" style="background-image: url('images/workout.jpg');">
		<div class="container-contact100">
			<div class="wrap-contact100">
				<div class="contact100-pic js-tilt" data-tilt>
					<img src="images/img-1.jpg" alt="IMG">
				</div>

				<form class="contact100-form validate-form">
					<h1>Contact Us </h1>
					<span class="contact100-form-title">
						Get in touch
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Name is required">
						<input class="input100" type="text" name="name" placeholder="Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Message is required">
						<textarea class="input100" name="message" placeholder="Message"></textarea>
						<span class="focus-input100"></span>
					</div>

					<div class="container-contact100-form-btn">
						<button class="contact100-form-btn" name="submit">
							Submit
						</button>
					
						<?php
						if(isset($_POST["submit"])){
							if($_POST["name"] == "" || $_POST["email"] == "" || $_POST["Message"] == ""){
								echo "Please fill all the form!";
							}
							else{
								echo "<br>Information Valid!<br>";
								$handler = fopen("feedback.txt","a");

								$string = "Name: " .$_POST["name"]."\n";
								fwrite($handler, $string);

								$string = "Email: " .$_POST["email"]."\n";
								fwrite($handler, $string);

								$string = "Message: " .$_POST["Message"]."\n";
								fwrite($handler, $string);

								$string = "Date and time: " .$_POST["date_and_time"]."\n\n";
								fwrite($handler, $string);

								fclose($handler);

								echo "Your message has been sent.";
							}
						}
						?>
					</div>
				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
