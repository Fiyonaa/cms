<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Blog Details</title>
	<meta name="description" content="">
	<meta name="keywords" content="">

	<!-- Favicons -->
	<link href="<?= base_url('assets/front/')?>assets/img/mixue-logo.png" rel="icon">
	<link href="<?= base_url('assets/front/')?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com" rel="preconnect">
	<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
		rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?= base_url('assets/front/')?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/front/')?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="<?= base_url('assets/front/')?>assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="<?= base_url('assets/front/')?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/front/')?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<!-- Main CSS File -->
	<link href="<?= base_url('assets/front/')?>assets/css/main.css" rel="stylesheet">

	<!-- =======================================================
  * Template Name: Moderna
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
	<style>
		.justify-text {
			text-align: justify;
			/* Mengatur teks agar terjustifikasi */
		}

	</style>
</head>


<body class="blog-details-page">

	<header id="header" class="header d-flex align-items-center fixed-top">
		<div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

			<a href="<?= base_url('auth')?>" class="logo d-flex align-items-center">
				<!-- Uncomment the line below if you also wish to use an image logo -->
				<img src="<?= base_url('assets/front/')?>assets/img/mixue-logo.png" alt="" class="logo">
				<h1 class="sitename"><?= $konfig->judul_website; ?></h1>
			</a>

			<nav id="navmenu" class="navmenu">
				<ul>
					<li><a href="<?= base_url() ?>">Home</a></li>
					<li><a href="<?= base_url('home/galeri') ?>">Portofolio</a></li>
					<li class="dropdown">
						<a href="#" class="dropbtn">Kategori</a>
						<ul class="dropdown-content">
							<?php foreach($kategori as $kk){ ?>
							<li><a
									href="<?= base_url('home/kategori/'.$kk['id_kategori']) ?>"><?= $kk['nama_kategori'] ?></a>
							</li>
							<?php } ?>
						</ul>
					</li>
					<li><a href="<?= base_url('auth')?>">Login</a></li>
				</ul>
				<i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
			</nav>

		</div>
	</header>

	<main class="main">

		<!-- Page Title -->
		<div class="page-title dark-background">
			<div class="container position-relative">
				<p>Blog Details</p>
				<h1><?= $konten->judul; ?></h1>
				<nav class="breadcrumbs">
					<ol>
						<li><a href="<?= base_url(); ?>">Home</a></li>
						<li class="current">Blog Details</li>
					</ol>
				</nav>
			</div>
		</div><!-- End Page Title -->

		<div class="container">
			<div class="row">

				<div class="col-lg-8">

					<!-- Blog Details Section -->
					<section id="blog-details" class="blog-details section">
						<div class="container">

							<article class="article">

								<div class="post-img">
									<img class="img-fluid w-100 rounded mb-5"
										src="<?=  base_url('assets/upload/konten/'.$konten->foto)?>">
								</div>

								<h2 class="title searchable"><?= $konten->judul; ?></h2>

								<div class="meta-top">
									<ul>
										<li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
												href="blog-details.html"><?= $konten->username ?></a>
										</li>
										<li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
												href="blog-details.html"><time
													datetime="2020-01-01"><?= $konten->tanggal; ?></time></a></li>
										<li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
												href="<?= base_url('home/kategori/'.$kk['id_kategori'])?>"><?= $kk['nama_kategori']?></a>
										</li>
									</ul>
								</div><!-- End meta top -->
								<br>


								<div class="description">
									<?php
									// Misalkan ini adalah konten yang ingin ditampilkan
									// $konten = new stdClass();
									$konten->keterangan ; 
									// "Ini adalah paragraf pertama.\nIni adalah paragraf kedua.\nIni adalah paragraf ketiga.";

									// Memecah konten berdasarkan newline
									$paragraphs = explode("\n", $konten->keterangan);
									foreach ($paragraphs as $paragraph) {
										echo '<p>' . htmlspecialchars(trim($paragraph)) . '</p>';
									}
									?>
								</div>

								<!-- End post content -->

							</article>

						</div>
					</section><!-- /Blog Details Section -->

				</div>

				<div class="col-lg-4 sidebar">
					<div class="widgets-container">
						<!-- Search Widget -->
						<!-- <div class="search-widget widget-item">
							<h3 class="widget-title">Search</h3>
							<form action="<?= site_url('search') ?>" method="get">
								<input id="searchInput" type="text" name="keyword" placeholder="Cari konten..."
									required>
								<button type="submit" title="Search"><i class="bi bi-search"></i></button>
							</form>
						</div> -->
						<!--/Search Widget -->
						<!-- Blog Author Widget -->
						<div class="blog-author-widget widget-item">
							<div class="d-flex flex-column align-items-center">
								<img src="assets/img/blog/blog-author.jpg" class="rounded-circle flex-shrink-0" alt="">
								<h4><?= $konten->username; ?></h4>
								<p><?= $konfig->alamat; ?></p><br>
								<div class="social-links d-flex">
									<a href="<?= $konfig->facebook; ?>"><i class="bi bi-facebook"></i></a>
									<a href="<?= $konfig->instagram; ?>"><i class="bi bi-instagram"></i></a>
									<a href="<?= $konfig->no_wa; ?>"><i class="bi bi-whatsapp"></i></a>
								</div><br>
								<p><?= $konfig->profil_website; ?></p>
							</div>
						</div>
						<!--/Blog Author Widget -->

						
						<br>
						<!-- Categories Widget -->
						<div class="categories-widget widget-item">

							<h3 class="widget-title">Categories</h3>
							<ul class="mt-3">
								<li><?php foreach ($kategori as $kk){?>
								<li> <i class="bi bi-chevron-right"></i> <a
										href="<?= base_url('home/kategori/'.$kk['id_kategori'])?>">
										<?= $kk['nama_kategori']?></a>
								</li>
								<?php } ?></li>
							</ul>
						</div>
						<!--/Categories Widget -->
					</div>
				</div>
			</div>
		</div>
	</main>

	<footer id="footer" class="footer dark-background">
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

				<div class="col-lg-2 col-md-12">
					<h4>Follow Us</h4>
					<p><a href="<?= $konfig->alamat ?>"></a></p>
					<div class="social-links d-flex">
						<a href="<?= $konfig->facebook ?>"><i class="bi bi-facebook"></i></a>
						<a href="<?= $konfig->instagram ?>"><i class="bi bi-instagram"></i></a>
						<a href="<?= $konfig->no_wa ?>"><i class="bi bi-whatsapp"></i></a>
					</div>
				</div>
				<div class="col-4">
					<form action="<?= site_url('admin/saran/simpan') ?>" method="post">
						<!-- Ganti 'add' menjadi 'simpan' -->
						<h4>Post Saran</h4>
						<p>Alamat email Anda tidak akan dipublikasikan</p>
						<div class="row">
							<div class="col-md-6 form-group">
								<input name="name" type="text" class="form-control" placeholder="nama" required>
							</div>
							<div class="col-md-6 form-group">
								<input name="email" type="email" class="form-control" placeholder="Email" required>
							</div>
						</div> <br>
						<div class="row">
							<div class="col form-group">
								<textarea name="comment" class="form-control" placeholder="Saran" required></textarea>
							</div>
						</div><br>
						<div class="text-center">
							<button type="submit" class="btn btn-primary">Post Saran</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="container copyright text-center mt-4">
			<p>© <span>Copyright</span> <strong class="px-1 sitename">Piyonaa</strong> <span>All Rights Reserved</span>
			</p>
			<div class="credits">
				<!-- All the links in the footer should remain intact. -->
				<!-- You can delete the links only if you've purchased the pro version. -->
				<!-- Licensing information: https://bootstrapmade.com/license/ -->
				<!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
				Designed by <a href="https://bootstrapmade.com/">Piyonaa</a>
			</div>
		</div>

	</footer>

	<!-- Scroll Top -->
	<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
			class="bi bi-arrow-up-short"></i></a>

	<!-- Preloader -->
	<div id="preloader"></div>

	<!-- Vendor JS Files -->
	<script src="<?= base_url('assets/front/')?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('assets/front/')?>assets/vendor/php-email-form/validate.js"></script>
	<script src="<?= base_url('assets/front/')?>assets/vendor/aos/aos.js"></script>
	<script src="<?= base_url('assets/front/')?>assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="<?= base_url('assets/front/')?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
	<script src="<?= base_url('assets/front/')?>assets/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="<?= base_url('assets/front/')?>assets/vendor/waypoints/noframework.waypoints.js"></script>
	<script src="<?= base_url('assets/front/')?>assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
	<script src="<?= base_url('assets/front/')?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

	<!-- Main JS File -->
	<script src="<?= base_url('assets/front/')?>assets/js/main.js"></script>
	<script>
		// Tambahkan elemen overlay ke body
		$("body").append('<div class="fullscreen-overlay"><img src="" alt="Fullscreen Image"></div>');

		$(".zoomable").click(function () {
			const imgSrc = $(this).attr("src"); // Ambil sumber gambar
			$(".fullscreen-overlay img").attr("src", imgSrc); // Masukkan gambar ke overlay
			$(".fullscreen-overlay").fadeIn(); // Tampilkan overlay
		});

		// Tutup overlay saat diklik
		$(".fullscreen-overlay").click(function () {
		$(this).fadeOut();
		});
		});

		$(document).on('click', '[data-toggle="lightbox"]', function (event) {
			event.preventDefault();
			$(this).ekkoLightbox({
				maxWidth: 800, // Ukuran maksimal gambar dalam modal
				maxHeight: 600
			});
		});

	</script>
</body>

</html>
