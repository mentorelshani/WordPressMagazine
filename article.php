<?php 
	session_start();
	
	require 'back-end/db.php';
	
	echo "details<br><br>";

	$id = $_GET['id'];
	$query = "SELECT * from articles WHERE id = $id";

	$result = mysqli_query($conn, $query);

	while($r = mysqli_fetch_assoc($result)) {
	    $rows[] = $r;
	}
	print_r(json_encode($rows));

	echo "<hr><hr><br>comments<br>";

	$query = "SELECT * FROM comments WHERE article_id = $id;";
	$result = mysqli_query($conn, $query);

	while($r = mysqli_fetch_assoc($result)) {
	    $rows[] = $r;
	}
	print_r(json_encode($rows));
?>