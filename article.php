<?php
	$css ='<link href="styles/index.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
	<script src="js/sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="styles/sweetalert.css">
	<script src="js/article.js"></script>';
	echo $css;
?>

<?php 
	session_start();

	require 'back-end/db.php';
	require 'header.php';

	$id = $_GET['id'];
	$query = "SELECT * from articles WHERE id = $id";

	$result = mysqli_query($conn, $query);

	while($r = mysqli_fetch_assoc($result)) {
	    $rows[] = $r;

	    echo "
	    	<div class='article__details'>
	    		<div class='article__details-photo'>
	    			<img src='img/".$r['img']."' class='article__details-photo__style'>
	    		</div>
	    		<div class='article__details-info'>
	    			<span class='article__details-info__title'>".$r['title']."</span>
	    			<span class='article__details-info__body'>".$r['body']."</span>
	    			<span class='article__details-info__created_at'>".$r['created_at']."</span>
	    		</div>
	    ";
	}
	$query1 = "SELECT * FROM comments WHERE article_id = $id;";
	$result1 = mysqli_query($conn, $query1);
	if (mysqli_num_rows($result1)) {
		echo "<h3 class='description__title-comment'> Comments</h3>";
	}
	else {
		echo "<h3 class='description__title-comment'>There are no comments :(</h3>";
	}
	if (isset($_SESSION['user'])) {
		echo "	<div class='comment__details-new' id='form3'>
			    	<textarea data-validation='required' id='comment_input' class='comment__details-new_comment' placeholder='Write a comment' required></textarea>
			    	<input type='button' id='button3' class='comment__details-submit' value='Send'/>		
			    </div>
		    ";
	}
	
	$query1 = "SELECT c.*, u.username FROM comments c INNER JOIN users u on u.id = c.user_id WHERE article_id = $id;";
	$result1 = mysqli_query($conn, $query1);

	while($r1 = mysqli_fetch_assoc($result1)) {
	    $rows1[] = $r1;
	    echo "
			    <div class='comment__details'>
			    	<span class='comment__details-comment_by'>".$r1['username']."</span>
			    	<span class='comment__details-comment'>".$r1['comment']."</span>
			    	<span class='comment__details-created_at'>".$r1['created_at']."</span>
			    </div>
	    	";  
	}
	echo "</div>";
	require 'footer_copyRight.php';
?>