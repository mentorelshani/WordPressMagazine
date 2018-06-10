<?php
	session_start();
	if(isset($_SESSION['user'])){
		$_SESSION['user'] = $row;
		header('Location: ' . "http://" . $_SERVER['HTTP_HOST'], true, 301);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Magazine</title>
	<link rel="stylesheet" type="text/css" href="./styles/index.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
	<script src="js/register.js"></script>
</head>
<body>
	<?php include 'header.php';?>
<div class="register ">
	<form class="register__body login__body" id="form2">
		<div class="element" id="user_div">
			<span class="name">Username:</span>
			<input data-validation="length alphanumeric" data-validation-length="min6" id="user" type="text" name="username" class="value">
		</div>
		<div class="element">
			<span class="name">Email:</span>
			<input data-validation="email" type="email" name="email" class="value">
		</div>
		<div class="element">
			<span class="name">Password:</span>
			<input data-validation="length" data-validation-length="min8" type="password" id="pass1" name="password" class="value">
		</div>
		<div class="element" id="confirm_div">
			<span class="name">Confirm Password:</span>
			<input name="confirm_password" type="password" class="value" id="pass2">
		</div>
		<input type="button" id="button2" value="Save" class="btn__submit">
	</form>
</div>

<?php
	include 'footer.php';
	include 'footer_copyRight.php';
?>