<?php include('./component-page/header.php')?>

<div class="page-content faq-page">
	<div class="container">
		<div class="section">
			<h1 class="section-title">How can we help you?</h1>

			<!-- ./START - SEARCH -->
			<div class="search-form text-center">
				<form action="" class="search-inside d-flex text-center">
					<input type="text" placeholder="Describe your issue">
					<button><img src="./assets/icons/icon-search.png" alt="Icon"></button>
				</form>
			</div>
			<!-- ./END - SEARCH -->

			<div class="faq-wrapper">
				<div class="faq-box">
					<div class="faq-row open">
						<h3 class="faq-question">
							<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit?</span>
							<img src="./assets/icons/angle-down.svg" alt="Icon">
						</h3>
						<div class="faq-answer" style="display: block;">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut mollis urna, ac posuere ante. Maecenas sed aliquam lorem. Quisque consectetur et ipsum sit amet molestie. Nunc efficitur velit at quam venenatis pulvinar.</p>
							<p>Proin venenatis vulputate ipsum. Phasellus sit amet finibus nulla. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis at massa arcu. Donec lacinia posuere mauris</p>
						</div>
					</div>

					<?php for($i=1; $i<8; $i++) { ?>
						<div class="faq-row">
							<h3 class="faq-question">
								<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit?</span>
								<img src="./assets/icons/angle-down.svg" alt="Icon">
							</h3>
							<div class="faq-answer">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut mollis urna, ac posuere ante. Maecenas sed aliquam lorem. Quisque consectetur et ipsum sit amet molestie. Nunc efficitur velit at quam venenatis pulvinar.</p>
								<p>Proin venenatis vulputate ipsum. Phasellus sit amet finibus nulla. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis at massa arcu. Donec lacinia posuere mauris</p>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include('./component-page/footer.php')?>