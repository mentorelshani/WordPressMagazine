<?php
	session_start();
	if(isset($_SESSION['user'])){
		print_r($_SESSION['user']);

		// header('Location: ' . "http://" . $_SERVER['HTTP_HOST'], true, 301);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Magazine</title>
	<link rel="stylesheet" type="text/css" href="./styles/index.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
	<script src="js/login.js"></script>
</head>
<body>
	<?php include 'header.php';?>
	<div class="login">
		<form class="login__body" id="form">
			<div class="element" id="user_div">
				<span class="name">Username:</span>
				<input data-validation="required" id="user_input" type="text" name="username" class="value" required>
			</div>
			<div class="element" id="pass_div">
				<span class="name">Password:</span>
				<input data-validation="required" id="pass_input" type="password" name="password" class="value" required>
			</div>
			<input type="button" value="Login" class="btn__submit" id="button1">
		</form>
	</div>
<?php
	include 'footer.php';
	include 'footer_copyRight.php';
?>
</body>
</html>