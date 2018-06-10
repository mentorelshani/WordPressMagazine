<?php
	session_start();
	
	require 'db.php';

	$function = $_GET['f'];

	if(function_exists($function))
		$function($conn);
	else {
	 	echo "Function does not exist.";
	 	return;
	}

	function getArticles($conn){

		$query = 'SELECT * from v_articles ORDER BY created_at LIMIT 5';

		$result = mysqli_query($conn, $query);

		while($r = mysqli_fetch_assoc($result)) {
		    $rows[] = $r;
		}
		print_r(json_encode($rows));
	}

	function searchArticles($conn){

		$text = $_GET['text'];

		$query = "SELECT * FROM articles where title like '$text' or body like '$text' order by created_at;";
		while($r = mysqli_fetch_assoc($result)) {
		    $rows[] = $r;
		}
		print_r(json_encode($rows));
	}

	function getTwoArticles($conn){

		$param = $_GET['param'];

		if ($param == "latest")
			$param = "created_at";
		else 
			$param = "comments";

		$query = "SELECT * from v_articles order by $param desc limit 2";

		$result = mysqli_query($conn, $query);

		while($r = mysqli_fetch_assoc($result)) {
		    $rows[] = $r;
		}
		print_r(json_encode($rows));
	}

	function getArticle($conn){

		$id = $_GET['id'];

		$query = "SELECT * from articles WHERE id = $id";

		$result = mysqli_query($conn, $query);

		while($r = mysqli_fetch_assoc($result)) {
		    $rows[] = $r;
		}
		print_r(json_encode($rows));
	}

	function getComments($conn){

		$article_id = $_GET['article_id'];
		$query = "SELECT * from comments WHERE article_id = $article_id";

		$result = mysqli_query($conn, $query);

		while($r = mysqli_fetch_assoc($result)) {
		    $rows[] = $r;
		}
		print_r(json_encode($rows));
	}

	function getFourArticlesByCategory($conn){

		$category = $_GET['category'];
		$query = "SELECT a.*, u.username
		 from articles a 
		 inner join users u on u.id = a.user_id
		 WHERE a.id in (SELECT ac.article_id FROM categories c inner join articles_categories ac on ac.category_id = c.id WHERE c.name = '$category') LIMIT 4";

		$result = mysqli_query($conn, $query);

		while($r = mysqli_fetch_assoc($result)) {
		    $rows[] = $r;
		}
		print_r(json_encode($rows));
	}

	function login($conn){
		if (isset($_POST['username'])) {

			$username = $_POST['username'];
			$password = $_POST['password'];

			$query = mysqli_query($conn,"SELECT * FROM users WHERE username = '$username';");

			if (mysqli_num_rows($query)) {
				while ($row = mysqli_fetch_assoc($query)) {
					$a = $row['hash_password'];
					break;
				}
			}

			if(password_verify($password,$a)){
				$_SESSION['user'] = $row;
				header('Location: ' . "http://" . $_SERVER['HTTP_HOST'], true, 301);
			}
			else{
				echo "wrong password";
			}
			return;
		}
	}

	function getAuthUser($conn){

		if (isset($_SESSION['user'])) {
			print_r($_SESSION['user']);
		}
		else
			print_r("Offline");
	}

	function logout($conn){

		session_destroy(); 
	}

	function addArticle($conn){

		$user_id = $_SESSION['user']['id'];
		$title = $_POST['title'];
		$body = $_POST['body'];
		$category_ids = $_POST['category_ids'];
		$img = "img/" . bin2hex(random_bytes(10)) . ".png";
		$created_at = date("Y-m-d h:i:s");

		move_uploaded_file($_FILES["image"]["tmp_name"], $img);

		mysqli_query($conn, "INSERT INTO articles (user_id,title,body,img,created_at) VALUES ($user_id, '$title', '$body', '$img', '$created_at');");

		$query = mysqli_query($conn,"SELECT * FROM articles WHERE img = '$img';");

		while ($row = mysqli_fetch_assoc($query)) {
				$article_id  = $row['id'];
		}

		foreach ($category_ids as $category_id) {
			mysqli_query($conn, "INSERT INTO articles_categories (article_id,category_id) VALUES ($article_id, $category_id);");
		}
	}

	function addMessage($conn){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$created_at = date("Y-m-d h:i:s");

		$query = "INSERT INTO messages (name,email,message,created_at) VALUES ('$name','$email','$message','$created_at');";

		mysqli_query($conn, $query);

		echo $query;

		// header('Location: ' . "http://" . $_SERVER['HTTP_HOST'], true, 301);
	}

	function updateArticle($conn){

		$title = $_POST['title'];
		$body = $_POST['body'];
		$id = $_POST['id'];

		mysqli_query($conn, "UPDATE articles SET title = '$title', body = '$body' WHERE id = $id);");
	}

	function deleteArticle($conn){

		$id = $_POST['id'];
		mysqli_query($conn, "DELETE FROM articles WHERE id = $id;");
	}

	function getMessages($conn){

		$query = "SELECT * FROM messages;";
		$result = mysqli_query($conn, $query);

		while($r = mysqli_fetch_assoc($result)) {
		    $rows[] = $r;
		}
		print_r(json_encode($rows));
	}

	function addComment($conn){

		$user_id = $_SESSION['user']['id'];
		$article_id = $_POST['article_id'];
		$comment = $_POST['comment'];
		$created_at = date("Y-m-d h:i:s");

		mysqli_query($conn, "INSERT INTO comments (user_id,article_id,comment,created_at) VALUES ($user_id,$article_id,'$comment','$created_at');");
	}

	function register($conn){

		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$role = "User";
		$hash_password = password_hash($password,2);
		$created_at = date("Y-m-d h:i:s");

		mysqli_query($conn, "INSERT INTO users (username,email,hash_password,created_at,role) VALUES ('$username','$email','$hash_password','$created_at','$role');");

		login($conn);
	}

?>
