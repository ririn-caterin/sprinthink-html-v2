<?php include('./component-page/header.php')?>

<div class="page-content">
	<!-- ./START - SECTION PILE -->
	<div class="section section-pile bg-gray">
		<div class="container">
			<div class="pile-wrapper d-flex align-items-center">
				<div class="pile-img">
					<img class="img-full" src="./assets/images/pile-3.jpg" alt="Image">
				</div>
				<div class="pile-box box-shadow">
					<h1 class="section-title">Innovation Management</h1>
					<div class="section-desc">Nunc cursus magna vel elit auctor, id imperdiet turpis tristique. Morbi porta nisl a odio consequat luctus. Vestibulum nec sollicitudin nunc, et</div>
					<a href="#" class="btn">Choose a program</a>
				</div>
			</div>
		</div>
	</div>
	<!-- ./END - SECTION PILE -->

	<!-- ./START - SECTION MANAGE SERVICE -->
	<div class="container">
		<div class="section manage-service">
			<h2 class="section-title">Lorem ipsum dolor</h2>
			<div class="section-subtitle">Nunc cursus magna vel elit auctor, id imperdiet turpis tristique. Morbi porta nisl a odio consequat</div>
			<div class="section-btn text-center">
				<a href="#" class="btn">Consult with us</a>
			</div>

			<div class="row justify-content-center">
				<div class="col-md-6">
					<div class="post">
						<a href="./ms-innovation-awards.php" class="post-img">
							<img class="img-full" src="./assets/images/manageservice-1.jpg" alt="Image">
						</a>
						<div class="post-content">
							<h3 class="post-title"><a href="./ms-innovation-awards.php">Managed Service: Innovation Awards</a></h3>
							<div class="post-text">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut mollis urna, ac posuere ante. Maecenas sed aliquam
							</div>
							<a href="./ms-innovation-awards.php" class="btn btn-small">More Info</a>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="post">
						<a href="./ms-incubation.php" class="post-img">
							<img class="img-full" src="./assets/images/manageservice-2.jpg" alt="Image">
						</a>
						<div class="post-content">
							<h3 class="post-title"><a href="./ms-incubation.php">Managed Service: Incubation</a></h3>
							<div class="post-text">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut mollis urna, ac posuere ante. Maecenas sed aliquam
							</div>
							<a href="./ms-incubation.php" class="btn btn-small">More Info</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ./END - SECTION MANAGE SERVICE -->

	<div class="section bg-gray slider-logoimage">
		<div class="container">
			<!-- ./START - CLIENT LOGO -->
			<div class="client-logo__list">
				<?php for($i=1; $i<13; $i++) { ?>
					<div class="client-logo">
						<a href="#"><img src="./assets/images/client-<?php echo $i ?>.png" alt="Client Logo"></a>
					</div>
				<?php } ?>
			</div>
			<!-- ./END - CLIENT LOGO -->

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
		<!-- ./START - GET IN TOUCH -->
		<div class="section">
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