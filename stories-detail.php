<?php include('./component-page/header.php')?>

<div class="page-content stories-page">
	<div class="container">
		<div class="stories-wrapper">
			<h1 class="stories-title">THE ROI OF DESIGN SPRINT</h1>
			<div class="stories-meta d-flex">
				<div class="ava"><img class="img-full" src="./assets/images/ava-1.jpg" alt="Avatar"></div>
				<div class="stories-meta__writer">
					<div class="by">By <span>Jane Doe</span></div>
					<time class="date">Dec 31, 2018</time>
				</div>
			</div>

			<div class="stories-inside d-flex">
				<div class="primary">
					<div class="stories-content">
						<img src="./assets/images/stories-1.jpg" alt="Image">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel diam id est pharetra lobortis nec sit amet odio. Nulla fermentum lacus eu hendrerit maximus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque faucibus sem elit, et egestas erat interdum eget. Sed varius sed diam id vulputate. Praesent tincidunt tempus mollis. Integer vehicula sed sem a scelerisque. Morbi sit amet aliquam purus. Nam id lacinia augue. In mollis mi vitae fringilla efficitur. Nullam ut velit pretium, consequat sem id, tempor lectus. Ut mollis auctor lorem nec venenatis. Maecenas sollicitudin, eros vitae elementum gravida, nisl diam dignissim nulla, nec tincidunt ligula diam et ex. Donec finibus imperdiet erat, efficitur suscipit lectus consectetur sit amet. Morbi non nulla quis augue fermentum interdum. Fusce id eleifend augue. Fusce vehicula condimentum lectus. Curabitur rutrum bibendum vulputate. Proin ultricies velit in pulvinar vestibulum. Interdum et malesuada fames ac ante ipsum primis in faucibus. In eu fermentum felis.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel diam id est pharetra lobortis nec sit amet odio. Nulla fermentum lacus eu hendrerit maximus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque faucibus sem elit, et egestas erat interdum eget. Sed varius sed diam id vulputate. Praesent tincidunt tempus mollis. Integer vehicula sed sem a scelerisque. Morbi sit amet aliquam purus. Nam id lacinia augue. In mollis mi vitae fringilla efficitur. Nullam ut velit pretium, consequat sem id, tempor lectus. Ut mollis auctor lorem nec venenatis. Maecenas sollicitudin, eros vitae elementum gravida, nisl diam dignissim nulla, nec tincidunt ligula diam et ex. Donec finibus imperdiet erat, efficitur suscipit lectus consectetur sit amet. Morbi non nulla quis augue fermentum interdum. Fusce id eleifend augue. Fusce vehicula condimentum lectus. Curabitur rutrum bibendum vulputate. Proin ultricies velit in pulvinar vestibulum. Interdum et malesuada fames ac ante ipsum primis in faucibus. In eu fermentum felis.</p>
					</div>

					<!-- ./START - SHARE STORIES -->
					<div class="stories-share text-center">
						<h2 class="title">Like it? Share it!</h2>
						<div class="socmed">
							<ul class="inline-menu inline-socmed">
								<li><a href="#">
									<?php include './assets/icons/icon-linkedin.svg'; ?>
								</a></li>
								<li><a href="#">
									<?php include './assets/icons/icon-facebook.svg'; ?>
								</a></li>
								<li><a href="#">
									<?php include './assets/icons/icon-whatsapp.svg'; ?>
								</a></li>
								<li><a href="#">
									<?php include './assets/icons/icon-email.svg'; ?>
								</a></li>
							</ul>
						</div>
					</div>
					<!-- ./END - SHARE STORIES -->

					<!-- ./START - SUBSCRIBE -->
					<div class="section-subscribe text-center">
						<div class="subscribe box-shadow">
							<div class="subscribe-title">Dengan berlangganan email dari kami, dapatkan artikel dan e-book seputar dunia corporate innovation secara GRATIS!</div>
							<form action="" class="d-flex justify-content-center">
								<input type="email" class="form-input" placeholder="Enter your email address">
								<button type="submit" class="btn">SUBSCRIBE</button>
							</form>
						</div>
					</div>
					<!-- ./END - SUBSCRIBE -->
				</div>
				<div class="aside">
					<div class="stories-recent bg-gray">
						<?php 
							$title = ['A NEW WAY TO COLLABORATE', 'ARE YOU READY FOR A DESIGN SPRINT?', 'THE ROI OF DESIGN SPRINT'];

							for($i=0; $i<3; $i++) { ?>
							<div class="stories-item">
								<div class="content">
									<h3 class="title"><?= $title[$i]; ?></h3>
									<p>Too often, the relationship between a client and its agency boils down to the classic setup of decision</p>
								</div>
								<div class="foot">
									<div class="by">By Sprinthink</div>
									<div class="d-flex justify-content-between align-items-center">
										<time>Dec 31, 2018</time>
										<a href="#">Baca Selengkapnya</a>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include('./component-page/footer.php')?>