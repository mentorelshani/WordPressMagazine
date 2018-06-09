<script src="js/footer.js"></script>
<div class="footer">
	<div class="link footer__section">
		<div class="misc">
			<ul class="misc__list">
				<li class="misc__list--item">
					<img src="./img/StarIcon.png" alt="" class="misc__list--icon">
					<span class="misc__list--title">Misc.</span></li>
				<li class="misc__list--item"><a href="login.php">Log in</a></li>
				<li class="misc__list--item"><a href="about.php">Privacy of Policy</a></li>
				<li class="misc__list--item"><a href="about.php">Get in touch</a></li>
			</ul>
		</div>

		<div class="links">
			<ul class="links__list">
				<li class="links__list--item">
					<img src="./img/coffeeicon.png" alt="" class="links__list--icon">
					<span class="links__list--title">Links:</span>
				</li>
				<a href="/gallery.php?category=design"><li class="links__list--item">Design</li></a>
				<a href="/gallery.php?category=freebies"><li class="links__list--item">Freebies</li></a>
				<a href="/gallery.php?category=inspiration"><li class="links__list--item">Inspiration</li></a>
				<a href="/gallery.php?category=showcase"><li class="links__list--item">Showcase</li></a>
				<a href="/gallery.php?category=tutorials"><li class="links__list--item">Tutorials</li></a>
				<a href="/gallery.php?category=graphics"><li class="links__list--item">Graphics</li></a>
				<a href="/gallery.php?category=wordpress"><li class="links__list--item">Wordpress</li></a>
			</ul>
		</div>
	</div>
	<div class="items footer__section">
		<div class="item__title">
			<img class="item__title--icon" src="./img/Baloonicon.png" alt="blog message">
			<span class="item__title--name">From the Blog:</span>
		</div>
		<div class="item__body">
			<span class="item__content">Css new version</span>
			<span class="item__postedBy">by Tomas</span>
			<span class="item__comments--number"> 30 Comments</span>
		</div>
		<div class="item__body">
			<span class="item__content">Css new version</span>
			<span class="item__postedBy">by Tomas</span>
			<span class="item__comments--number"> 30 Comments</span>
		</div>
		<div class="item__body">
			<span class="item__content">Css new version</span>
			<span class="item__postedBy">by Tomas</span>
			<span class="item__comments--number"> 30 Comments</span>
		</div>
		<div class="item__body">
			<span class="item__content">Css new version</span>
			<span class="item__postedBy">by Tomas</span>
			<span class="item__comments--number"> 30 Comments</span>
		</div>
		<div class="item__body">
			<span class="item__content">Css new version</span>
			<span class="item__postedBy">by Tomas</span>
			<span class="item__comments--number"> 30 Comments</span>
		</div>
	</div>
	<div class="messages footer__section">
		<div class="messages__title">
			<img class="messages__title--icon" src="./img/Icon.png" alt=" message">
			<span class="messages__title--name">Get in touch with us:</span>
		</div>
		<form method="POST" action="back-end/functions.php?f=addMessage">
			<div class="element">
				<span class="name">Name:</span>
				<input type="text" name="name" class="value">
			</div>
			<div class="element">
				<span class="name">Email:</span>
				<input type="text" name="email" class="value">
			</div>
			<div class="element">
				<span class="name">Message:</span>
				<textarea name="message" class="value__textarea"></textarea>
			</div>
			<input type="submit" value="Submit" class="btn__submit">
		</form>
	</div>
</div>