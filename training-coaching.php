<?php include('./component-page/header.php')?>

<div class="page-content">
	<!-- ./START - SECTION PILE -->
	<div class="section section-pile bg-gray">
		<div class="container">
			<div class="pile-wrapper d-flex align-items-center">
				<div class="pile-img">
					<img class="img-full" src="./assets/images/pile-7.jpg" alt="Image">
				</div>
				<div class="pile-box box-shadow">
					<h1 class="section-title">Training & Coaching</h1>
					<div class="section-desc">Nunc cursus magna vel elit auctor, id imperdiet turpis tristique. Morbi porta nisl a odio consequat luctus. Vestibulum nec sollicitudin nunc, et</div>
					<a href="#section-package" class="btn btn-scroll">Choose a program</a>
				</div>
			</div>
		</div>
	</div>
	<!-- ./END - SECTION PILE -->

	<!-- ./START - SELECT THE RIGHT APPROACH -->
	<div class="container">
		<div class="section package" id="section-package">
			<h2 class="section-title section-title--full">Select the right approach</h2>
			<div class="section-subtitle">Nunc cursus magna vel elit auctor, id imperdiet turpis tristique. Morbi porta nisl a odio consequat</div>
			<div class="text-center section-btn">
				<a href="#section-contact" class="btn btn-scroll">Consult with us</a>
			</div>

			<div class="package-list row">
				<?php 
					$title = ['Design Sprint & Offline Training', 'Training for Trainers', 'Corporate Innovation Lab'];
					$link = ['./design-sprint.php', './tot.php', './cil.php'];
					for($i=0; $i<3; $i++) { ?>
					<div class="col-lg-4">
						<div class="package-item text-center box-shadow">
							<h3 class="package-title"><?= $title[$i]; ?></h3>
							<div class="package-inside">
								<div class="package-desc">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut mollis urna, ac posuere ante. Maecenas sed aliquam lorem. Quisque consectetur et ipsum sit amet molestie. Nunc efficitur velit at quam venenatis pulvinar. 
								</div>
								<div class="package-info">
									<div class="package-row d-flex align-items-center justify-content-center">
										<img src="./assets/icons/icon-calendar.png" alt="Icon">
										<span>xx days</span>
									</div>
									<div class="package-row d-flex align-items-center justify-content-center">
										<img src="./assets/icons/icon-list.png" alt="Icon">
										<span>Nunc cursus magna vel elit</span>
									</div>
									<div class="package-row d-flex align-items-center justify-content-center">
										<img src="./assets/icons/icon-team.png" alt="Icon">
										<span>Nunc cursus magna</span>
									</div>
									<div class="package-row d-flex align-items-center justify-content-center">
										<img src="./assets/icons/icon-check.png" alt="Icon">
										<span>Nunc cursus magna</span>
									</div>
								</div>
								<a href="<?= $link[$i]; ?>" class="btn btn-small">More Info</a>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<!-- ./END - SELECT THE RIGHT APPROACH -->

	<!-- ./START - TRUSTED BY -->
	<div class="section bg-gray client-logotesti">
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

			<!-- ./START - TESTI -->
			<h2 class="section-title">Apa kata mereka?</h2>
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
	
	<div class="container">
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