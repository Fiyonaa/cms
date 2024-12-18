<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Portfolio - Moderna Bootstrap Template</title>
	<meta content="" name="descriptison">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="<?= base_url('assets/front/')?>assets/img/favicon.png" rel="icon">
	<link href="<?= base_url('assets/front/')?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link
		href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
		rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?= base_url('assets/front/')?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/front/')?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/front/')?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/front/')?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/front/')?>assets/vendor/venobox/venobox.css" rel="stylesheet">
	<link href="<?= base_url('assets/front/')?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/front/')?>assets/vendor/aos/aos.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="<?= base_url('assets/front/')?>assets/css/style.css" rel="stylesheet">

	<!-- =======================================================
  * Template Name: Moderna - v2.0.1
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

	<!-- ======= Header ======= -->
	<header id="header" class="header d-flex align-items-center fixed-top">
		<div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

			<a href="<?= base_url('auth')?>" class="logo d-flex align-items-center">
				<!-- Uncomment the line below if you also wish to use an image logo -->
				<!-- <img src="assets/img/logo.png" alt=""> -->
				<h1 class="sitename"><?= $konfig->judul_website; ?></h1>
			</a>

			<nav id="navmenu" class="navmenu ">
				<ul>
					<li><a href="<?= base_url(); ?>">Home</a></li>
					<li><a href="<?= site_url('galeri') ?>">Portofolio</a></li>
					<?php foreach ($kategori as $kk){?>
					<li><a href="<?= site_url('home/galeri/'.$kk['id_kategori'])?>">
							<?= $kk['nama_kategori']?></a>
					</li>
					<?php } ?>
					<!-- <li><a href="<?= base_url('auth')?>">Login</a></li> -->
				</ul>
				<i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
			</nav>

		</div>
	</header>
	<!-- End Header -->

	<main id="main">

		<!-- ======= Our Portfolio Section ======= -->
		<section class="breadcrumbs">
			<div class="container">

				<div class="d-flex justify-content-between align-items-center">
					<h2>Our Portfolio</h2>
					<ol>
						<li><a href="index.html">Home</a></li>
						<li>Our Portfolio</li>
					</ol>
				</div>

			</div>
		</section><!-- End Our Portfolio Section -->

		<!-- ======= Portfolio Section ======= -->
		<section class="portfolio">
			<div class="container">

				<div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out"
					data-aos-duration="500">

					<div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out"
						data-aos-duration="500">
						<?php $no=1; foreach ($galeri as $aa) {?>
						<div class="col-lg-4 col-md-6 filter-app">
							<div class="portfolio-item">
								<img src=<?=  base_url('assets/upload/galeri/'.$aa['foto'])?> class="img-fluid" alt="">
								<div class="portfolio-info">
									<h3><a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery"
											class="venobox" title="App 1" style=""><?= $aa['judul'] ?></a></h3>
									<a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery"
										class="venobox" title="App 1"><i class="icofont-plus"></i></a>
								</div>
							</div>
						</div>
						<?php $no++; } ?>
					</div>
				</div>
			</div>
		</section><!-- End Portfolio Section -->

	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

		<div class="footer-newsletter">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<h4>Our Newsletter</h4>
						<p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
					</div>
					<div class="col-lg-6">
						<form action="" method="post">
							<input type="email" name="email"><input type="submit" value="Subscribe">
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="container footer-top">
			<div class="row gy-4">
				<div class="col-lg-4 col-md-6 footer-about">
					<a href="index.html" class="d-flex align-items-center">
						<span class="sitename"><?= $konfig->judul_website; ?></span>
					</a>
					<div class="footer-contact pt-3">
						<p><?= $konfig->profil_website; ?></p>
					</div>
				</div>

				<div class="col-lg-2 col-md-3 footer-links">
					<h4>Useful Links</h4>
					<ul>
						<li> <i class="bi bi-chevron-right"></i> <a href="<?= base_url(); ?>">Home</a></li>
						<?php foreach ($kategori as $kk){?>
						<li> <i class="bi bi-chevron-right"></i> <a
								href="<?= base_url('home/kategori/'.$kk['id_kategori'])?>">
								<?= $kk['nama_kategori']?></a>
						</li>
						<?php } ?>
						<!-- <li> <i class="bi bi-chevron-right"></i> <a href="<?= base_url('auth')?>">Login</a></li> -->
					</ul>
				</div>

				<!-- <div class="col-lg-2 col-md-3 footer-links">
					<h4>Data</h4>
					<ul>
						<li><i class="bi bi-chevron-right"></i> <a href="<?= $konfig->facebook ?>"></a></li>
						<li><i class="bi bi-chevron-right"></i> <a href="<?= $konfig->instagram?>"></a></li>
					</ul>
				</div> -->

				<div class="col-lg-4 col-md-12">
					<h4>Follow Us</h4>
					<p><a href="<?= $konfig->alamat ?>"></a></p>
					<div class="social-links d-flex">
						<a href="<?= $konfig->facebook ?>"><i class="bi bi-facebook"></i></a>
						<a href="<?= $konfig->instagram ?>"><i class="bi bi-instagram"></i></a>
						<a href="<?= $konfig->no_wa ?>"><i class="bi bi-whatsapp"></i></a>
					</div>
				</div>

			</div>
		</div>

		<div class="container">
			<div class="copyright">
				&copy; Copyright <strong><span>Moderna</span></strong>. All Rights Reserved
			</div>
			<div class="credits">
				<!-- All the links in the footer should remain intact. -->
				<!-- You can delete the links only if you purchased the pro version. -->
				<!-- Licensing information: https://bootstrapmade.com/license/ -->
				<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
				Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
			</div>
		</div>
	</footer><!-- End Footer -->

	<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

	<!-- Vendor JS Files -->
	<script src="<?= base_url('assets/front/')?>assets/vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url('assets/front/')?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('assets/front/')?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
	<script src="<?= base_url('assets/front/')?>assets/vendor/php-email-form/validate.js"></script>
	<script src="<?= base_url('assets/front/')?>assets/vendor/venobox/venobox.min.js"></script>
	<script src="<?= base_url('assets/front/')?>assets/vendor/waypoints/jquery.waypoints.min.js"></script>
	<script src="<?= base_url('assets/front/')?>assets/vendor/counterup/counterup.min.js"></script>
	<script src="<?= base_url('assets/front/')?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>
	<script src="<?= base_url('assets/front/')?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="<?= base_url('assets/front/')?>assets/vendor/aos/aos.js"></script>

	<!-- Template Main JS File -->
	<script src="<?= base_url('assets/front/')?>assets/js/main.js"></script>

</body>

</html>
