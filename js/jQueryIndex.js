$(document).ready(function () {

	var a = $("#popular")[0];
	var b = $("#design")[0];

	changeTwoArticles(a);
	changeFourArticles(b);
	getSliderArticles();
	// getFooterArticles();

	// function getFooterArticles(){
	// 	$.get("back-end/functions.php/?f=getArticles", function (data, status) {
	// 		var obj = JSON.parse(data);
	// 		console.log(obj);
	// 		$(".items").empty();
	// 		var title =	`<div class="item__title">
	// 						<img class="item__title--icon" src="./img/Baloonicon.png" alt="blog message">
	// 						<span class="item__title--name">From the Blog:</span>
	// 					</div>`;

	// 		$(".items").append(title);
	// 		for (var i = 0; i < obj.length; i++) {
	// 			$(".items").append(`<div class="item__body">
	// 									<span class="item__content"><a style="color:white;" href="article.php?id=` + obj[i].id + `">`+ obj[i].title +`</a></span>
	// 									<span class="item__postedBy">by: `+ obj[i].username +`</span>
	// 									<span class="item__comments--number">`+ obj[i].comments +` Comments</span>
	// 								</div>`);
	// 		}
	// 	});
	// }

	function changeTwoArticles(param) {

		$.get("back-end/functions.php/?f=getTwoArticles&param=" + param.id, function (data, status) {

			var obj = JSON.parse(data);

			$(".filter__articles").empty();

			for (var i = 0; i < obj.length; i++) {
				$(".filter__articles").append(`
							<div class="filter__articles--item">
								<span class="filter__articles--item_title"><a style="color:black;text-decoration:none" href="article.php?id=` + obj[i].id + `"> ` + obj[i].title + `</a></span>
								<div class="filter__articles--item_photo">
									<img src="./img/` + obj[i].img + `" alt="">
								</div>
								<span class="filter__articles--item_message"> ` + obj[i].body.substring(0, 60) + `<a style="text-decoration:none;color:black" href="article.php?id=` + obj[i].id + `"> [...]</a></span>
							</div>`);

				if (i == 0) {
					$(".filter__articles").append(`<div class="horizontal__line"></div>`);
				}
			}
		});
	}

	function changeFourArticles(param) {

		$.get("back-end/functions.php/?f=getFourArticlesByCategory&category=" + param.id, function (data, status) {

			var obj = JSON.parse(data);

			$(".top__articles").empty();

			for (var i = 0; i < obj.length; i++) {
				var div = i % 2 == 0 ? `<div class="top__article--left">` : `<div class="top__article--right">`;
				div = div + `
							<div class="article__body">
								<a style="text-decoration:none;color:black" href="article.php?id=` + obj[i].id + `"><span class="article__title">` + obj[i].title + `</span></a>
								<div class="article__photo">
									<img src="./img/` + obj[i].img + `" alt="">
								</div>
								<span class="article__description">` + obj[i].created_at + " by: " + obj[i].username + `</span>
								<span class="article__content">` + obj[i].body.substring(0, 200) + `<a style="text-decoration:none;color:black" href="article.php?id=` + obj[i].id + `"> [...]</a>
								</span>
								<a style="text-decoration:none;color:black" href="article.php?id=` + obj[i].id + `"><span class="article__content--more">Contunue reading</span></a>
							</div>
						</div>`;
				$(".top__articles").append(div);
			}
		});
	}

	function getSliderArticles() {
		$.get("back-end/functions.php/?f=getArticles", function (data, status) {

			var obj = JSON.parse(data);

			$(".main__article").empty();

			for (var i = 0; i < obj.length; i++) {
				var content = `
		            	<div class="mySlides fade">
		            		<a style="color:white;text-decoration:none;" href="article.php?id=` + obj[i].id + `"><span class="main__article--title">` + obj[i].title + `</span></a>
							<a style="text-decoration:none;color:black" href="article.php?id=` + obj[i].id + `"><img src="./img/` + obj[i].img + `" alt="" class='main__article--photo'></a>
						</div>`;

				$(".main__article").append(content);
				// $(".main__article").append(content);
			}
			showSlides();
		});
	}

	var slideIndex = 0;

	function showSlides() {
		var i;
		var slides = document.getElementsByClassName("mySlides");
		if (slideIndex == slides.length) {
			slideIndex = 0
		}
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";
		}

		slides[slideIndex].style.display = "block";
		slideIndex++;
		setTimeout(showSlides, 2000); // Change image every 2 seconds
	}

	$(".categories__item").click(function () {

		$(".categories__item_selected").removeClass("categories__item_selected");

		$(this).addClass("categories__item_selected");

		changeFourArticles(this);
	});

	$(".filter__article--menu_item").click(function () {

		$(".filter__article--menu_item_selected").removeClass("filter__article--menu_item_selected");

		$(this).addClass("filter__article--menu_item_selected");

		changeTwoArticles(this);
	});

});