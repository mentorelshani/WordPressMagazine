<?php 
	session_start();
	if (isset($_SESSION['user'])) {
		if ($_SESSION['user']['role'] != "Admin") {
			echo "Only for admins";
			return;
		}
	}
	else{
			echo "Only for admins";
			return;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Messages</title>
	<link rel="stylesheet" type="text/css" href="./styles/index.css">
</head>
<body>
<?php 
	include 'header.php';
	include 'back-end/db.php';

	$query = "SELECT * FROM messages ORDER BY created_at LIMIT 30;";
	$result = mysqli_query($conn, $query);

	echo "<h1>Messages</h1>";
	while($r = mysqli_fetch_assoc($result)) {
	    $rows[] = $r;
	    echo "<div class='messages'>
				<div class='message'>
					<span class='msg_name'>". $r['name']."</span> <span class='msg_email'>".$r['email']."</span>
					<br><span class='msg_body'>".$r['message']."</span>
					<span class='msg_date'>".$r['created_at']."</span>
				</div>
			</div>";
	}

	include 'footer_copyRight.php';
?>
</div>
</body>
</html>