<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('public/'); ?>frontend/libraries/bootstrap/css/bootstrap.css">

	<!-- OwlCarousel Css -->
	<link rel="stylesheet" href="<?= base_url('public/'); ?>frontend/libraries/owlcarousel/owl.carousel.css">
	<link rel="stylesheet" href="<?= base_url('public/'); ?>frontend/libraries/owlcarousel/owl.theme.default.css">
	<!-- My Style -->
	<link rel="stylesheet" href="<?= base_url('public/'); ?>frontend/styles/main.css">

	<title>Home</title>
</head>

<body>

	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top">

		<a class="navbar-brand" href="#">
			<!-- <img src="" alt="Logo"> -->
		</a>

		<button class="navbar-toggler navbar-toggler-right navbar-toggler-modify" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fas fa-bars"></i>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<ul class="navbar-nav ml-auto mr-3 navbar-nav-modify">
				<li class="nav-item mx-md-2">
					<a class="nav-link active" href="<?= base_url(); ?>">Home</a>
				</li>
				<li class="nav-item mx-md-2">
					<a class="nav-link" href="<?= base_url('booking-checkout'); ?>">Book Online</a>
				</li>

				<?php if ($this->session->userdata('id_customer')) : ?>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Hai, <?= $this->session->userdata('nama'); ?>
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item text-dark" href="<?= base_url('account'); ?>">Akun</a>
							<a class="dropdown-item text-dark" href="<?= base_url('logout'); ?>">Logout</a>
						</div>
					</li>
				<?php else : ?>
					<li class="nav-item">
						<!-- Mobile button -->
						<div class="form-inline d-sm-block d-lg-none">
							<button class="btn btn-pill btn-login my-2 my-sm-0 px-4 btn-modal-auth">Masuk</button>
						</div>

						<!-- Dekstop button -->
						<div class="form-inline my-lg-0 d-none d-lg-block">
							<button class="btn btn-login btn-navbar-right btn-modal-auth" data-toggle="modal" data-target="#modelId">Masuk</button>
						</div>
					</li>
				<?php endif ?>
			</ul>

		</div>

	</nav>

	<!-- Header -->
	<section id="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h1 class="">
						CV. BERKAH ABADI
					</h1>
					<p class="mt-3 mb-5">
						Membantu memberikan solusi dalam pemenuhan kebutuhan
						<br>
						jasa mekanik, elektrikal dan fabrikasi dalam dunia usaha
					</p>
					<a href="<?= base_url('booking-checkout'); ?>" class="btn-get-started px-4 py-2 mt-5 text-uppercase">Book Now</a>
				</div>
				<div class="col-md-6 text-center">
					<img src="<?= base_url('public/'); ?>frontend/images/banner3.png" alt="Banner Image" class="img-fluid">
				</div>
			</div>
		</div>
	</section>
