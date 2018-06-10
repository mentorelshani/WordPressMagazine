$(document).ready(function () {
	getFooterArticles();

	function getFooterArticles(){
		$.get("back-end/functions.php/?f=getArticles", function (data, status) {
			var obj = JSON.parse(data);
			console.log(obj);
			$(".items").empty();
			var title =	`<div class="item__title">
							<img class="item__title--icon" src="./img/Baloonicon.png" alt="blog message">
							<span class="item__title--name">From the Blog:</span>
						</div>`;

			$(".items").append(title);
			for (var i = 0; i < obj.length; i++) {
				$(".items").append(`<div class="item__body">
										<span class="item__content"><a style="color:white;" href="article.php?id=` + obj[i].id + `">`+ obj[i].title +`</a></span>
										<span class="item__postedBy">by: `+ obj[i].username +`</span>
										<span class="item__comments--number">`+ obj[i].comments +` Comments</span>
									</div>`);
			}
		});
	}
});