<?php include('./component-page/header.php')?>

<div class="page-content">
	<!-- ./START - SECTION PILE -->
	<div class="section section-pile bg-gray">
		<div class="container">
			<div class="pile-wrapper d-flex align-items-center">
				<div class="pile-img">
					<img class="img-full" src="./assets/images/pile-2.jpg" alt="Image">
				</div>
				<div class="pile-box box-shadow">
					<h1 class="section-title">Design Sprint & Offline Training</h1>
					<div class="section-desc">Nunc cursus magna vel elit auctor, id imperdiet turpis tristique. Morbi porta nisl a odio consequat luctus. Vestibulum nec sollicitudin nunc, et</div>
					<a href="#section-contact" class="btn btn-scroll">Get in Touch</a>
				</div>
			</div>
		</div>
	</div>
	<!-- ./END - SECTION PILE -->

	<!-- ./START - SECTION ABOUT -->
	<div class="section">
		<div class="container">
			<h3 class="section-heading section-heading--big">About</h3>
			<h2 class="section-title section-title--full">Lorem ipsum dolor sit amet</h2>
			<div class="section-paragraph">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut mollis urna, ac posuere ante. Maecenas sed aliquam lorem. Quisque consectetur et ipsum sit amet molestie. Nunc efficitur velit at quam venenatis pulvinar.</p>
				<p>Proin venenatis vulputate ipsum. Phasellus sit amet finibus nulla. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis at massa arcu. Donec lacinia posuere mauris nec blandit. Ut in tortor sed purus tempus vehicula.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut mollis urna, ac posuere ante. Maecenas sed aliquam lorem. Quisque consectetur et ipsum sit amet molestie. Nunc efficitur velit at quam venenatis pulvinar.</p>
				<p>Proin venenatis vulputate ipsum. Phasellus sit amet finibus nulla. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis at massa arcu. Donec lacinia posuere mauris nec blandit. Ut in tortor sed purus tempus vehicula.</p>
			</div>
		</div>
	</div>
	<!-- ./END - SECTION ABOUT -->

	<div class="section bg-gray">
		<div class="container">
			<!-- ./START - SECTION JOURNEY -->
			<div class="section-journey--v2">
				<h2 class="section-heading section-heading--big">Journey</h2>
				<div class="text-center">
					<img src="./assets/images/journey.png" alt="Image">
				</div>
			</div>
			<!-- ./END - SECTION JOURNEY -->

			<!-- ./START - SECTION SLIDER -->
			<div class="custom-slider">
				<div class="img-slider">
					<div class="img-slider__item">
						<img class="img-full" src="./assets/images/slider-1.jpg" alt="">
					</div>
					<div class="img-slider__item">
						<img class="img-full" src="./assets/images/slider-2.jpg" alt="">
					</div>
					<div class="img-slider__item">
						<img class="img-full" src="./assets/images/slider-1.jpg" alt="">
					</div>
				</div>
			</div>
			<!-- ./END - SECTION SLIDER -->
		</div>
	</div>
	
	<div class="container">
		<!-- ./START - CLIENT CASE -->
		<div class="section client-case client-case--box">
			<h2 class="section-heading section-heading--big">Client Cases</h2>
			<div class="row justify-content-center">
				<?php for($i=1; $i<4; $i++) { ?>
					<div class="col-lg-4">
						<div class="service-item text-center box-shadow">
							<h3 class="service-heading">Lorem ipsum dolor sit amet, consectetur</h3>
							<div class="service-desc">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							</div>
							<div class="text-center">
								<a href="#" class="btn btn-small">Read More</a>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
			<div class="text-center client-case__more">
				<a href="#" class="link-more">
					<span>Baca studi kasus lainnya</span>
					<img src="./assets/icons/angle-right.png" alt="Icon">
				</a>
			</div>
		</div>
		<!-- ./END - CLIENT CASE -->

		<!-- ./START - GET IN TOUCH -->
		<div class="section" id="section-contact">
			<div class="row">
				<div class="col-lg-6">
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

				<div class="col-lg-6">
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
	</div>
</div>

<?php include('./component-page/footer.php')?>