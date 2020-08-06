<?php include('./component-page/header.php')?>

<div class="page-content">
	<div class="container">
		<div class="section">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<h1 class="page-title">Innovation<br>Articles.</h1>
				</div>
				<div class="col-lg-6">
					<!-- ./START - SUBSCRIBE -->
					<div class="section-subscribe text-center">
						<div class="subscribe subscribe-small box-shadow">
							<div class="subscribe-title">Keep up with our latest stories</div>
							<form action="" class="d-flex justify-content-center">
								<input type="email" class="form-input" placeholder="Enter your email address">
								<button type="submit" class="btn">Subscribe</button>
							</form>
						</div>
					</div>
					<!-- ./END - SUBSCRIBE -->
				</div>
			</div>
		</div>

		<!-- ./START - LIST POST -->
		<div class="archivepost">
			<!-- ./START - SEARCH -->
			<div class="search-form text-center">
				<form action="" class="search-inside d-flex text-center">
					<input type="text" placeholder="Search">
					<button><img src="./assets/icons/icon-search.png" alt="Icon"></button>
				</form>
			</div>
			<!-- ./END - SEARCH -->

			<div class="list-post d-flex justify-content-center flex-wrap">
				<?php for($i=1; $i<7; $i++) { ?>
					<div class="post">
						<a href="./stories-detail.php" class="post-img">
							<img class="img-full" src="./assets/images/post-1.jpg" alt="Image">
						</a>
						<div class="post-content">
							<h3 class="post-title"><a href="./stories-detail.php">Lorem ipsum dolor sit amet, consectetur</a></h3>
							<div class="post-text">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut mollis urna, ac posuere ante. Maecenas sed aliquam
							</div>
							<a href="./stories-detail.php" class="btn btn-small">Read More</a>
						</div>
					</div>
				<?php } ?>
			</div>

			<nav class="navigation pagination" role="navigation">
			    <h2 class="screen-reader-text">Posts navigation</h2>
			    <div class="nav-links"><span aria-current="page" class="page-numbers current">1</span>
			        <a class="page-numbers" href="#">2</a>
			        <a class="page-numbers" href="#">3</a>
			        <a class="page-numbers" href="#">4</a>
			        <a class="next page-numbers" href="#">Next</a>
			    </div>
			</nav>
		</div>
		<!-- ./END - LIST POST -->
	</div>
</div>

<?php include('./component-page/footer.php')?>