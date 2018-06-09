<?php 
	session_start();
	
	require 'back-end/db.php';

	if (isset($_GET['text']) && isset($_GET['category'])) {

		$category = $_GET['category'];
		$text = $_GET['text'];
		$query = "SELECT * FROM articles
		 where title like '%$text%' or body like '%$text%'
		 and id in (SELECT ac.article_id FROM categories c inner join articles_categories ac on ac.category_id = c.id WHERE c.name = '$category')
		order by created_at;";
	}
	else if (isset($_GET['category'])) {

		$category = $_GET['category'];
		$query = "SELECT * from articles  
		 WHERE id in (SELECT ac.article_id FROM categories c inner join articles_categories ac on ac.category_id = c.id WHERE c.name = '$category')";
	}
	else if (isset($_GET['text'])) {

		$text = $_GET['text'];
		$query = "SELECT * FROM articles
		 where title like '%$text%' or body like '%$text%'
		order by created_at;";
	}
	else
		$query = "SELECT * FROM articles;";

	$rows = [];
	
	$result = mysqli_query($conn, $query);

	while($r = mysqli_fetch_assoc($result)) {
	    $rows[] = $r;
	}

	print_r(json_encode($rows));
?>