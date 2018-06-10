<?php
	$css ='<link href="styles/index.css" rel="stylesheet">';
	echo $css;

	session_start();
	
	require 'back-end/db.php';
	require 'header.php';

	$query_1 = "SELECT * FROM categories;";
	$result_1 = mysqli_query($conn, $query_1);
	echo '
		<div class="gallery">
			<form class="filter__article--galery" action="gallery.php" method="get">
			<spsn class="filter__article-description">Filter by:</spsn>
				<select name="category" class="filter__article-category">
					<option value="all">All</option>
	';

	while($r = mysqli_fetch_assoc($result_1)) {
		echo '<option value="'.$r["name"].'">'.$r["name"].'</option>';
	}
	echo "	
			</select>
			<input type='text' class='filter__article-search' name='text'>
			<input type='submit' class='filter__article-submit' >
		</form> ";

	if (isset($_GET['text'])) {
		$text = $_GET['text'];
		$query = "SELECT * FROM articles where title like '%$text%' or body like '%$text%' order by created_at;";
	}
	else if (isset($_GET['category'])) {
		$category = $_GET['category'];
		$query = "SELECT * from articles  
		 WHERE id in (SELECT ac.article_id FROM categories c inner join articles_categories ac on ac.category_id = c.id WHERE c.name = '$category')";
	}
	else
		$query = "SELECT * FROM articles;";

	$rows = [];
	$numri=1;
	
	$result = mysqli_query($conn, $query);
	echo '';
	while($r = mysqli_fetch_assoc($result)) {
?>
		<div class="top__article--left">
			<div class="article__body">
				<a style="text-decoration:none;color:black" href="<?php echo 'article.php?'.$r['id']; ?> "><span class="article__title"><?php echo $r['title']; ?></span></a>

				<div class="article__photo">
					<img src="<?php echo $r['img']; ?>" alt="">
				</div>
				<span class="article__description"><?php echo $r['created_at']."by:".$r['user_id'];?></span>
				<span class="article__content"><?php echo $r['body'] ?><a style="text-decoration:none;color:black" href="<?php echo 'article.php?'.$r['id']; ?> "> [...]</a>
				</span>
				<a style="text-decoration:none;color:black" href="article.php?id=25"><span class="article__content--more">Contunue reading</span></a>
			</div>
		</div>

<?php
	    $rows[] = $r;
	}
	echo '</div>';
	require 'footer_copyRight.php';
?>