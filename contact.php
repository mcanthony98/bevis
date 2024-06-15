<!doctype html>
<html lang="en">

<head>
	<title>Contact Us | Bevis Africa</title>

	<!-- Head Content -->
	<?php include 'includes/head-content.php'; ?>


</head>

<body>
	<div class="preloader">
		<img src="assets/images/preloader.svg" alt="Pre-loader">
	</div>

	<!-- Header -->
	<?php include 'includes/navbar.php'; ?>


	<!-- =======================
Banner innerpage -->
	<div class="text-center bg-overlay-dark-4" style="background:url(assets/images/bg/05.jpg) no-repeat; background-size: cover; background-position: center center;">
		<div class="container">
			<div class="row all-text-white">
				<div class="col-md-12 align-self-center">
					<h1 class="display-6 fw-bold mt-9 mb-0">&nbsp;</h1>
					<h1 class="fw-bold display-1 mb-2 mb-md-n4">Contact Us</h1>
					<br>
					<br>
				</div>
			</div>
		</div>
	</div>
	<!-- =======================
Banner innerpage -->


	<!-- =======================
contact -->
	<section class="contact-page">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-8 mx-auto">
					<div class="title text-center">
						<h2>How can we help you?</h2>
						<p>Our team at Bevis Africa is dedicated to assisting you with any questions or concerns you may have about our services, projects, or the voluntary carbon market.</p>
					</div>
				</div>
			</div>
			<div class="row g-6">
				<div class="col-md-6">
					<div class="contact-box d-flex flex-column h-100 bg-overlay-dark-7 px-3 py-4" style="background:url(assets/images/bg/04.jpg) no-repeat; background-size: cover; background-position: center center;">
						<!-- Address -->
						<div class="all-text-white mb-4">
							<div class="fs-4"><i class="ti-map-alt"></i></div>
							<h5 class="mb-2">Address</h5>
							<p>Pwani House, Lamu, Kenya<br>TERRY HOUSE, 4th Floor, Mfangano Street, Nairobi, Kenya</p>
						</div>
						<!-- Email -->
						<div class="all-text-white mb-4">
							<div class="fs-4"><i class="ti-email"></i></div>
							<h5 class="mb-2">E-mail</h5>
							<p>info@bevisafrica.com</p>
						</div>
						<!-- Phone -->
						<div class="all-text-white mb-4">
							<div class="fs-4"><i class="ti-panel"></i></div>
							<h5 class="mb-2">Phone</h5>
							<p class="mb-0">0703145010<br>0726314189</p>
						</div>
					</div>
				</div>
				<!-- google map -->
				<div class="col-md-6">
					<div class="h-100">
						<iframe class="w-100 h-100 grayscale rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d255282.3237508814!2d41.06250454693217!3d-2.2692246928326373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182780e6e8b7cc03%3A0xae34049c6caf6d53!2sLamu%20Island!5e0!3m2!1sen!2ske!4v1623667252195!5m2!1sen!2ske" style="border:0;" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</div>

			</div>
			<br>

			<div class="row g-6">
				<!-- contact form -->
				<div class="col-md-12">
					<div class="h-100">
						<br>
						<br>
						<h3>Interested in our services? Let's connect!</h3>
						<p>Get in touch with us to learn more about how we can help you access the voluntary carbon market and contribute to the fight against climate change.</p>
						<form class="contact-form needs-validation" id="contact-form" name="contactform" method="POST" action="https://wizixo.webestica.com/assets/include/contact-action.php" novalidate>
							<!-- Main form -->
							<div class="row">
								<div class="col-md-6">
									<!-- name -->
									<div class="mb-3 position-relative">
										<input required id="con-name" name="name" type="text" class="form-control" placeholder="Name">
									</div>
								</div>
								<div class="col-md-6">
									<!-- email -->
									<div class="mb-3 position-relative">
										<input required id="con-email" name="email" type="email" class="form-control" placeholder="E-mail">
									</div>
								</div>
								<div class="col-md-12">
									<!-- Subject -->
									<div class="mb-3 position-relative">
										<input required id="con-subject" name="subject" type="text" class="form-control" placeholder="Subject">
									</div>
								</div>
								<div class="col-md-12">
									<!-- Message -->
									<div class="mb-3 position-relative">
										<textarea required id="con-message" name="message" cols="40" rows="6" class="form-control" placeholder="Message"></textarea>
									</div>
								</div>
								<!-- submit button -->
								<div class="col-md-12 d-grid">
									<div class="col-md-12 d-grid">
										<div class="col-md-12 d-grid">
											<div class="col-md-12 d-grid">
												<button class="btn btn-dark m-0 mx-auto" type="submit" style="width: 200px;">
													<a href="thank-you-contact.php" style="color: white; text-decoration: none;">Send Message</a>
												</button>
											</div>
										</div>
									</div>


								</div>
	</section>
	<!-- =======================
contact -->

	<!-- =======================
more-info -->
	<section class="pt-0">
		<div class="container ">
			<div class="row justify-content-md-center">
				<div class="col-md-4 text-center">
					<h5 class="mb-1">Follow us on social media</h5>
					<p>Stay up to date with our latest projects and initiatives by following us on <a href="#">Facebook</a>, <a href="#">Twitter</a>, and <a href="#">Instagram</a>.</p>
				</div>
				<div class="col-md-4 text-center">
					<h5 class="mb-1">General inquiries</h5>
					<p>For general questions or partnership opportunities, please email <a href="#">info@bevisafrica.com</a>.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- =======================
more-info -->



	<!-- Footer, CTA -->
	<?php include 'includes/footer.php'; ?>


	<!-- Scripts -->
	<?php include 'includes/scripts.php'; ?>


</body>

</html>