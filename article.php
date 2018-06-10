<?php
	$css ='<link href="styles/index.css" rel="stylesheet">';
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
	    			<img src='".$r['img']."' class='article__details-photo__style'>
	    		</div>
	    		<div class='article__details-info'>
	    			<span class='article__details-info__title'>".$r['title']."</span>
	    			<span class='article__details-info__body'>".$r['body']."</span>
	    			<span class='article__details-info__created_at'>".$r['created_at']."</span>
	    		</div>
	    ";
	}
	echo "<h3 class='description__title-comment'> Comments</h3>";

	echo "
	    	<form class='comment__details-new'>
		    	<textarea class='comment__details-new_comment' placeholder='Write a comment'></textarea>
		    	<input type='submit' class='comment__details-submit' value='Send'/>		
		    </form>
	    ";
	
	$query1 = "SELECT * FROM comments WHERE article_id = $id;";
	$result1 = mysqli_query($conn, $query1);

	while($r1 = mysqli_fetch_assoc($result1)) {
	    $rows1[] = $r1;
	    echo "
			    <div class='comment__details'>
			    	<span class='comment__details-comment_by'>User1/rregullo</span>
			    	<span class='comment__details-comment'>".$r1['comment']."</span>
			    	<span class='comment__details-created_at'>".$r1['created_at']."</span>
			    </div>
	    	";  
	}
	echo "</div>";
	require 'footer_copyRight.php';
?>