<?php
	session_start();
	if(isset($_SESSION['user'])){
		$_SESSION['user'] = $row;
		header('Location: ' . "http://" . $_SERVER['HTTP_HOST'], true, 301);
	}
?>
<div class="login">
	<form class="login__body" method="post">
		<div class="element">
			<span class="name">Username:</span>
			<input type="text" name="" class="value" required>
		</div>
		<div class="element">
			<span class="name">Password:</span>
			<input type="password" name="" class="value">
		</div>
		<input type="submit" value="Login" class="btn__submit" required>
	</form>
</div>
<?php 

	if (isset($_POST['username'])) {

		include 'db.php';

		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = mysqli_query($conn,"SELECT * FROM users WHERE username = '$username';");

		if (mysqli_num_rows($query)) {
			while ($row = mysqli_fetch_assoc($query)) {
				$a = $row['hash_password'];
				if(password_verify($password,$a)){
					$_SESSION['user'] = $row;
					header('Location: ' . "http://" . $_SERVER['HTTP_HOST'], true, 301);
				}
				else{
					echo "wrong password";
				}
			}
		}
		else{
			echo "wrong username";
		}
	}
?>
