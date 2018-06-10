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
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="./styles/index.css">
	<script src="js/sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="styles/sweetalert.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		$(document).ready(function () {
			getArticles();
		});

		function getArticles(){
			$.get("back-end/functions.php/?f=getAllArticles", function (data, status) {
				var obj = JSON.parse(data);
				$(".articles").empty();

				for (var i = 0; i < obj.length; i++) {
					$(".articles").append(`<div class="article_details">
												<span class="article_title">`+ obj[i].title +`</a></span>
												<span class="article_user">by: `+ obj[i].username +`</span>
												<span class="article_date">`+ obj[i].created_at +`</span>
												<img class="article_img" style="height:50px;width:50px;" src="img/`+ obj[i].img +`">
												<span class="article_body">`+ obj[i].body +`</span>
												<button id="article_delete" onclick="deleteArticle(`+ obj[i].id +`)">Delete icon</button>
												<button id="article_edit" onclick="editArticle(`+ obj[i].id +`)">Edit icon</button>
											</div>`);
				}
			});
		}
		function deleteArticle(id){
			$.ajax({
		    	url: "../back-end/functions.php?f=deleteArticle",
		        type: "post",
		        data: "id="+id ,
		        success: function (response) {
		       		swal(
					  'Article deleted',
					  '',
					  'success'
					)
			    }
			});
			getArticles();
		}

		function editArticle(id){
			swal("Id:" + id + "  tash bonja formen me u qel si pop-up.");
		}
	</script>
</head>
<body>
	<?php
		include 'header.php';
	?>
	<h1>Admin Panel</h1>
	<div class="articles">		
	</div>
	<?php 
		include 'footer_copyRight.php';
	?>
</body>
</html>