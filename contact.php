<?php include('./component-page/header.php')?>

<div class="page-content contact-page">
	<div class="container">
		<div class="section">
			<h1 class="section-title">We would love to hear from you.</h1>
			<div class="contact-page__desc text-center">Contact us to see how we can help you. We’ll be in touch within 24 hours.</div>

			<div class="row">
				<div class="col-lg-6 order-lg-2">
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
				<div class="col-lg-6">
					<div class="contact-detail">
						<div class="contact-row">
							<div class="contact-title">Social Media</div>
							<ul class="inline-menu contact-socmed">
								<li><a href="#" target="_blank">
									<?php include './assets/icons/icon-linkedin.svg'; ?>
								</a></li>
								<li><a href="#" target="_blank">
									<?php include './assets/icons/icon-youtube.svg'; ?>
								</a></li>
								<li><a href="#" target="_blank">
									<?php include './assets/icons/icon-instagram.svg'; ?>
								</a></li>
							</ul>
						</div>
						<div class="contact-row">
							<div class="contact-title">Email</div>
							<div class="contact-info">konsultasi@sprinthink.id</div>
						</div>
						<div class="contact-row">
							<div class="contact-title">Address</div>
							<div class="contact-info">
								The Collective Space <br>
								Jl. Tebet Utara Dalam No.3, RW.2, <br>
								Tebet, Kota Jakarta Selatan, <br>
								DKI Jakarta 12820 <br>
							</div>
						</div>
						<div class="contact-row">
							<div class="contact-title">Phone</div>
							<div class="contact-info">0813 1611 2310</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include('./component-page/footer.php')?>