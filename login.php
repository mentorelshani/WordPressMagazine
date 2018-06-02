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
	<title></title>
</head>
<body>
	<form method="POST" action="/login.php">
		Username: <input type="text" name="username" placeholder="username">
		<br>
		Password: <input type="password" name="password" placeholder="password">
		<input type="submit" name="">
	</form>
</body>
</html>
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