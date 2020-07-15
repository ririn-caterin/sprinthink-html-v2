<?php include('./component-page/header.php')?>

<div class="page-content">
	<!-- ./START - HERO -->
	<div class="hero" style="background-image: url('./assets/images/hero-bg.jpg');">
		<div class="container hero-container">
			<div class="hero-content">
				<h1 class="hero-title">Lorem ipsum dolor sit amet, consectetur </h1>
				<div class="hero-subtitle">Nunc cursus magna vel elit auctor, id imperdiet turpis tristique. Morbi porta nisl a odio consequat luctus. Vestibulum nec sollicitudin nunc, et suscipit sapien.</div>
				<a href="#" class="btn">Get Started</a>
			</div>
		</div>
	</div>
	<!-- ./END - HERO -->

	<!-- ./START - TRUSTED BY -->
	<div class="section section-client">
		<div class="container">
			<h2 class="section-title">Trusted by</h2>
			<!-- ./START - CLIENT LOGO -->
			<div class="client-logo__list">
				<?php for($i=1; $i<13; $i++) { ?>
					<div class="client-logo">
						<a href="#"><img src="./assets/images/client-<?php echo $i ?>.png" alt="Client Logo"></a>
					</div>
				<?php } ?>
			</div>
			<!-- ./END - CLIENT LOGO -->

			<!-- ./START - TESTI -->
			<div class="client-testi__list custom-slider">
				<div class="client-testi">
					<div class="client-testi__content">
						<p>"Saya menemukan dunia saya di dunia product development. Karena disini kami diajarkan untuk membuka wawasan, membuka batas pikiran melalui cara berpikir kreatif yang lebih luas dan dalam".</p>
					</div>
					<div class="client-testi__info d-flex align-items-center justify-content-center">
						<div class="client-testi__img">
							<img class="img-full" src="./assets/images/ava-1.jpg" alt="Images">
						</div>
						<div class="client-testi__detail">
							<div class="client-testi__name">Clint</div>
							<div class="client-testi__position">Product Development at Bank Mandiri</div>
						</div>
					</div>
				</div>
				<div class="client-testi">
					<div class="client-testi__content">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore accusamus, porro sequi ipsum optio maxime atque in neque dolor sed quidem consectetur odio possimus! Quaerat voluptatem, dolorem quas tenetur dolore.</p>
					</div>
					<div class="client-testi__info d-flex align-items-center justify-content-center">
						<div class="client-testi__img">
							<img class="img-full" src="./assets/images/ava-2.jpg" alt="Images">
						</div>
						<div class="client-testi__detail">
							<div class="client-testi__name">Testimonial 2</div>
							<div class="client-testi__position">Lorem Ipsum</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ./END - TESTI -->
		</div>
	</div>
	<!-- ./END - TRUSTED BY -->

	<!-- ./START - WHY CHOOSE US -->
	<div class="section section-service bg-gray">
		<div class="container">
			<h2 class="section-title">Why choose us?</h2>
			<div class="row">
				<?php for($i=1; $i<7; $i++) { ?>
					<div class="col-md-4">
						<div class="service-item text-center">
							<img src="./assets/icons/icon-service.png" alt="Icon">
							<div class="service-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
						</div>
					</div>
				<?php } ?>
			</div>

			<!-- ./START - VIDEO -->
			<div class="video">
				<div class="video-wrapper text-center">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/FVKMQsOuFb8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<!-- ./END - VIDEO -->
		</div>
	</div>
	<!-- ./END - WHY CHOOSE US -->

	<div class="container">
		<div class="section">
			<!-- ./START - GET IN TOUCH -->
			<div class="section-contact">
				<div class="row">
					<div class="col-md-6">
						<div class="contact-touch text-center">
							<img class="contact-touch__img" src="./assets/images/contact-img.png" alt="Image">
							<div class="contact-touch__info">
								<h2 class="section-title">Get in Touch!</h2>
								<div class="section-subtitle">
									Ingin konsultasi seputar pengembangan inovasi di perusahaan Anda? Jangan ragu hubungi kami, konsultasi gratis.
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="contact-form box-shadow bg-white">
							<form action="" class="form">
								<div class="form-control">
									<label for="">Nama Lengkap</label>
									<input type="text" class="form-input">
								</div>
								<div class="form-control">
									<label for="">Email <sup>*</sup></label>
									<input type="email" class="form-input">
								</div>
								<div class="form-control">
									<label for="">Pilih departemen Anda <sup>*</sup></label>
									<div class="form-select">
										<select name="" id="" class="form-input">
											<option value=""></option>
										</select>
									</div>
								</div>
								<div class="form-control">
									<label for="">Posisi/Jabatan</label>
									<input type="text" class="form-input">
								</div>
								<div class="form-control">
									<label for="">Info lainnya <sup>*</sup></label>
									<textarea name="" id="" cols="30" rows="5" class="form-input" placeholder="Harap berikan kami beberapa konteks pada tantangan saat ini atau alasan Anda menghubungi kami."></textarea>
								</div>
								<div class="form-info">
									<sup>*</sup>Mohon dilengkapi.
								</div>
								<button type="submit" class="btn btn-block">Let's schedule a quick call</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- ./END - GET IN TOUCH -->

			<!-- ./START - LATEST POST -->
			<div class="section-latestpost">
				<h2 class="section-title">Lorem ipsum dolor sit amet, consectetur </h2>
				<div class="section-subtitle">Nunc cursus magna vel elit auctor, id imperdiet turpis tristique. Morbi porta nisl a odio consequat</div>
				<h3 class="section-heading">OUR LATEST STORIES</h3>

				<div class="latest-post d-flex justify-content-center flex-wrap">
					<?php for($i=1; $i<4; $i++) { ?>
						<div class="post">
							<a href="./stories-detail.php" class="post-img">
								<img class="img-full" src="./assets/images/post-1.jpg" alt="Image">
							</a>
							<div class="post-content">
								<h3 class="post-title"><a href="./stories-detail.php">Lorem ipsum dolor sit amet, consectetur</a></h3>
								<a href="./stories-detail.php" class="btn btn-small">Read More</a>
							</div>
						</div>
					<?php } ?>
				</div>

				<div class="text-center">
					<a href="./blog.php" class="btn btn-small">Go to our blog page</a>
				</div>
			</div>
			<!-- ./END - LATEST POST -->

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
	</div>
</div>

<?php include('./component-page/footer.php')?>