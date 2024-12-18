<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Blog</title>
	<meta name="description" content="">
	<meta name="keywords" content="">

	<!-- Favicons -->
	<link href="<?= base_url('assets/front/')?>assets/img/favicon.png" rel="icon">
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
		.post-img img {
			width: 100%;
			/* Atur lebar gambar menjadi 100% dari kontainer */
			height: auto;
			/* Tinggi otomatis untuk menjaga rasio aspek */
			max-height: 200px;
			/* Atur tinggi maksimum sesuai kebutuhan */
			object-fit: cover;
			/* Memastikan gambar terpotong dengan baik jika tidak sesuai rasio */
		}

	</style>
</head>

<body class="blog-page">

	<header id="header" class="header d-flex align-items-center fixed-top">
		<div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

			<a href="<?= base_url('auth')?>" class="logo d-flex align-items-center">
				<!-- Uncomment the line below if you also wish to use an image logo -->
				<!-- <img src="assets/img/logo.png" alt=""> -->
				<h1 class="sitename"><?= $konfig->judul_website; ?></h1>
			</a>

			<nav id="navmenu" class="navmenu">
				<ul>
					<li><a href="<?= base_url() ?>">Home</a></li>
					<li><a href="<?= base_url('home/galeri') ?>">Portofolio</a></li>
					<li class="dropdown">
						<a href="#" class="dropbtn">Kategori</a>
						<ul class="dropdown-content">
							<?php foreach($kategori as $kate){ ?>
							<li><a
									href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>"><?= $kate['nama_kategori'] ?></a>
							</li>
							<?php } ?>
						</ul>
					</li>
					<li><a href="<?= base_url('auth')?>">Login</a></li>
					<li>
						<div class="search-widget widget-item">
							<form action="<?= site_url('search') ?>" method="get">
								<input id="searchInput" type="text" name="keyword" placeholder="Cari konten..."
									required>
								<button type="submit" title="Search"><i class="bi bi-search"></i></button>
							</form>
						</div>
					</li>
				</ul>
				<i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
			</nav>

		</div>
	</header>

	<main class="main">

		<!-- <section id="hero" class="hero section dark-background"> -->
		<div id="hero-carousel" class="carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
			<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-inner">
					<?php $no=1; foreach($caraousel as $aa){ ?>
					<div class="carousel-item <?php if($no==1) { echo 'active'; }?>">
						<img src="<?=  base_url('assets/upload/caraousel/'.$aa['foto'])?>" class="d-block w-100">
					</div>
					<?php $no++; } ?>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
					data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
					data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</div>

		<!-- </section> -->
		<!-- /Hero Section -->
		<section id="about" class="about">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>About Us</h2>
				</div>

				<div class="row content">
					<div class="col-md-7 pt-5 order-2 order-md-1">
						<p>
							<b>Lembaga Persatuan Pemuda (LPP)</b> atau biasa disebut dengan Karang Taruna adalah
							organisasi
							sosial yang berperan sebagai wadah pengembangan generasi muda di wilayah desa/kelurahan dan
							terutama bergerak di bidang usaha kesejahteraan sosial.
						</p>
						<h5>Tujuan Karang Taruna</h5>
						<ul>
							<li><i class="icofont-check"></i> Secara bersama-sama dengan pemerintah dan komponen
								masyarakat lainnya untuk menanggulangi berbagai masalah kesejahteraan sosial terutama
								yang dihadapi generasi muda, baik yang bersifat preventif, rehabilitatif maupun
								pengembangan potensi generasi muda di lingkungannya.</li>
							<li><i class="icofont-check"></i> Terbentuknya jiwa dan semangat kejuangan generasi
								muda yang terampil dan berkepribadian serta berpengetahuan.</li>
							<li><i class="icofont-check"></i> Tumbuhnya potensi dan kemampuan generasi muda dalam
								rangka mengembangkan keberdayaan warga Karang Taruna.</li>
						</ul>
					</div>
					<div class="col-md-5 order-1 order-md-2">
						<img src="assets/front/assets/img/kartar.jpg" alt="" class="img-fluid">
					</div>
				</div>

			</div>
		</section>
		<!-- Featured Services Section -->


		<!-- Blog Posts Section -->
		<section id="blog-posts" class="blog-posts section">
			<div class="container">
				<div class="section-title">
					<h2>Blogs Section</h2>
				</div>

				<!-- <div>
					<form method="post" action="">
						<input type="text" name="search" value=""
							placeholder="Masukkan kata kunci" required>
						<button type="submit" name="search">Cari</button>
					</form>
				</div><br> -->
				<!-- ##### Blog Wrapper Start ##### -->
				<div class="blog-wrapper  clearfix">
					<div class="container">
						<div class="row ">
                            <?php foreach($konten as $aa){ ?>
							<!-- Single Blog Area -->
							<div class="col-12 col-lg-4">

								<div class="single-blog-area clearfix mb-100">
									<!-- Blog Content -->

									<div class="single-blog-content">
										<div class="line"></div>
										<h5><?= $aa->judul; ?> </h5>
										<p> <?= $aa->keterangan; ?> </p>
										<p class="mb-3">
									</div>

								</div>
							</div>
							<!-- Single Blog Area -->
							<div class="col-12 col-lg-4">
								<div class="single-blog-area clearfix mb-100">
									<!-- Blog Content -->
									<div class="single-blog-content">
										<p class="mb-3">
									</div>
								</div>
							</div>
							<!-- Single Blog Area -->
							<div class="col-12 col-md-6 col-lg-4">
								<div class="single-catagory-area clearfix mb-100">
									<img src="<?= Base_url('assets/upload/konten/'.$aa->foto)?>">
									<div>
										<br>
										<a href="<?= base_url('home')?>" type="button"
											class="btn btn-outline-secondary">BACK
											HOME</a>
									</div>
								</div>
							</div>
                            <?php } ?>
						</div>
					</div>
				</div>
				<!-- ##### Blog Wrapper End ##### -->
			</div>
		</section><!-- /Blog Posts Section -->

		<section id="contact" class="contact">
			<div class="container aos-init aos-animate" data-aos="fade-up">

				<div class="section-title">
					<h2>Contact</h2>
				</div>

				<div class="row">
					<div>
						<iframe
							src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7909.694062856861!2d110.97637905!3d-7.591622799999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a18a2cf2d7027%3A0xecd6d44970169aa1!2sWonorejo%2C%20Bejen%2C%20Kec.%20Karanganyar%2C%20Kabupaten%20Karanganyar%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1733122161651!5m2!1sid!2sid"
							style="border:0; width: 100%; height: 290px;" allowfullscreen="" loading="lazy"
							referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>

				</div>

			</div>
		</section>
	</main>

	<footer id="footer" class="footer dark-background">
		<div class="container footer-top">
			<div class="row gy-4">
				<div class="col-lg-4 col-md-6 footer-about">
					<a href="<?= base_url('admin/dasboard'); ?>" class="d-flex align-items-center">
						<span class="sitename"><?= $konfig->judul_website; ?></span>
					</a>
					<div class="footer-cont
					
					act pt-3">
						<p><?= $konfig->profil_website; ?></p>

					</div>
				</div>

				<div class="col-lg-2 col-md-3 footer-links">
					<h4>Useful Links</h4>
					<ul>
						<li> <i class="bi bi-chevron-right"></i> <a href="<?= base_url(); ?>">Home</a></li>
						<?php foreach ($kategori as $kk){?>
						<li> <i class="bi bi-chevron-right"></i> <a
								href="<?= base_url('home/kategori'.$kk['id_kategori'])?>">
								<?= $kk['nama_kategori']?></a>
						</li>
						<?php } ?>
						<!-- <li> <i class="bi bi-chevron-right"></i> <a href="<?= base_url('auth')?>">Login</a></li> -->
					</ul>
				</div>
				<div class="col-lg-2 col-md-12">
					<h4>Follow Us</h4>
					<p><?= $konfig->alamat; ?></p>
					<div class="social-links d-flex">
						<a href="<?= $konfig->facebook; ?>"><i class="bi bi-facebook"></i></a>
						<a href="<?= $konfig->instagram; ?>"><i class="bi bi-instagram"></i></a>
						<a href="<?= $konfig->no_wa; ?>"><i class="bi bi-whatsapp"></i></a>
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
