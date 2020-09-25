<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Portal Satu Data Staner</title>
	<meta content="" name="descriptison">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="<?= base_url(); ?>assets/img/favicon.png" rel="icon">
	<link href="<?= base_url(); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/vendor/venobox/venobox.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">

	<!-- =======================================================
  * Template Name: eNno - v2.1.0
  * Template URL: https://bootstrapmade.com/enno-free-simple-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

	<header id="header" class="fixed-top">
		<div class="container d-flex align-items-center">

			<!-- <h1 class="logo mr-auto"><a href="index.html"><i class="bx bxs-flame"></i></a></h1> -->
			<!-- Uncomment below if you prefer to use an image logo -->
			<!-- <a href="index.html" class="logo mr-auto"><img src="<?= base_url(); ?>assets/img/logo.png" alt="" class="img-fluid"></a> -->
			<a href="<?= site_url(); ?>" class="logo mr-auto">
				<h1 class="mb-0"><i class="bx bxs-flame"></i></h1>
			</a>

			<nav class="nav-menu d-none d-lg-block">
				<ul>
					<li class="active"><a href="<?= site_url(); ?>">Beranda</a></li>
					<li><a href="<?= site_url(); ?>dataset">Data</a></li>
					<li><a href="<?= site_url(); ?>alat">Alat</a></li>
					<li><a href="<?= site_url(); ?>tentang">Tentang</a></li>
				</ul>
			</nav>
			<a href="<?= site_url(); ?>/register" class="get-started-btn scrollto">Dapatkan Akses <i class="bx bx-lock-open-alt"></i></a>

		</div>
	</header>


	<section id="hero" class="d-flex align-items-center my-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
					<h1>Portal Satu Data Staner</h1>
					<h2><i>Open Source Database</i> Kemahasiswaan KM PKN STAN yang dikelola oleh BEM PKN STAN</h2>
					<div class="d-flex">
						<a href="#about" class="btn-get-started scrollto">Yuk Pelajari</a>
						<a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Dapatkan Akses <i class="bx bx-lock-open-alt"></i></a>
					</div>
				</div>
				<div class="col-lg-6 order-1 order-lg-2 hero-img text-center">
					<img src="<?= base_url(); ?>assets/img/hero-img.png" class="img-fluid animated" alt="" width="450">
				</div>
			</div>
		</div>

	</section>

	<main id="main" class="mt-5">
		<!-- ======= About Section ======= -->
		<section id="about" class="about">
			<div class="container">

				<div class="row">
					<div class="col-lg-6">
						<img src="<?= base_url(); ?>assets/img/about.png" class="img-fluid" alt="">
					</div>
					<div class="col-lg-6 pt-4 pt-lg-0 content">
						<h3>Temukan Data Kemahasiswaan dengan Mudah!</h3>
						<p class="font-italic">
							Portal Satu Data Staner (SDS) adalah inisiatif BEM PKN STAN untuk mendorong pergerakan dan pengambilan kebijakan Keluarga Mahasiswa berdasarkan data kemahasiswaan.
						</p>
						<ul>
							<li><i class="icofont-check-circled"></i> Satu standar data dan satu portal data</li>
							<li><i class="icofont-check-circled"></i> Pemenuhan kebutuhan data publik bagi mahasiswa</li>
							<li><i class="icofont-check-circled"></i> Akses data mudah, akurat, dan aktual</li>
						</ul>
					</div>
				</div>

			</div>
		</section><!-- End About Section -->

		<!-- ======= Counts Section ======= -->
		<section id="counts" class="counts">
			<div class="container">

				<div class="row counters">

					<div class="col-lg-3 col-6 text-center">
						<span data-toggle="counter-up"><?= number_format($count_dataset, 0, ',', '.'); ?></span>
						<p>Set Data</p>
					</div>

					<div class="col-lg-3 col-6 text-center">
						<span data-toggle="counter-up"><?= number_format($count_mahasiswa, 0, ',', '.'); ?></span>
						<p>Mahasiswa</p>
					</div>

					<div class="col-lg-3 col-6 text-center">
						<span data-toggle="counter-up"><?= number_format($count_elkam, 0, ',', '.'); ?></span>
						<p>Elemen Kampus</p>
					</div>

					<div class="col-lg-3 col-6 text-center">
						<span data-toggle="counter-up"><?= number_format($count_sso, 0, ',', '.'); ?></span>
						<p>Identitas SSO</p>
					</div>

				</div>

			</div>
		</section><!-- End Counts Section -->

		<!-- ======= Services Section ======= -->
		<section id="services" class="services section-bg">
			<div class="container">

				<div class="section-title">
					<span>Layanan</span>
					<h2>Layanan</h2>
					<p>Apa saja fitur yang ditawarkan dalam portal ini?</p>
				</div>

				<div class="row">
					<div class="col-lg-4 col-md-6 d-flex align-items-stretch">
						<div class="icon-box">
							<div class="icon"><i class="bx bx-check-shield"></i></div>
							<h4><a href="">Aman dan Terjaga</a></h4>
							<p>Portal Satu Data Staner (SDS) berisi data untuk publik, bukan data pribadi/sensitif yang bersifat rahasia.</p>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
						<div class="icon-box">
							<div class="icon"><i class="bx bx-data"></i></div>
							<h4><a href="">Set Data Terbaru</a></h4>
							<p>Data yang disediakan dalam Portal Satu Data Staner (SDS) ini selalu diperbarui secara berkala.</p>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
						<div class="icon-box">
							<div class="icon"><i class="bx bx-arch"></i></div>
							<h4><a href="">Lintas Lembaga</a></h4>
							<p>Portal Satu Data Staner (SDS) terdiri dari data berbagai Badan Kemahasiswaan dan Elemen Kampus KM PKN STAN.</p>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
						<div class="icon-box">
							<div class="icon"><i class="bx bxs-face"></i></div>
							<h4><a href="">Identitas Single Sign-On</a></h4>
							<p>Satu akun identitas terpadu dari Portal Satu Data Staner (SDS) dan dapat digunakan untuk mengakses seluruh aplikasi Staner.</p>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
						<div class="icon-box">
							<div class="icon"><i class="bx bx-message-square-error"></i></div>
							<h4><a href="">Pelayanan Responsif</a></h4>
							<p>Portal Satu Data Staner (SDS) memiliki pelayanan yang responsif dan dikelola oleh BEM PKN STAN.</p>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
						<div class="icon-box">
							<div class="icon"><i class="bx bx-extension"></i></div>
							<h4><a href="">Dukungan <i>Developer</i></a></h4>
							<p>Dapatkan data yang kamu butuhkan menggunakan Web API resmi dari Portal Satu Data Staner (SDS).</p>
						</div>
					</div>

				</div>

			</div>
		</section>

		<section id="cta" class="cta">
			<div class="container">

				<div class="text-center">
					<h3>Segera Daftar untuk Akses Data</h3>
					<p>Daftarkan akun personal, badan kemahasiswaan, elemen kampus, atau kepanitiaanmu agar mendapatkan akses data lebih mudah, akurat, dan aktual dari Portal Satu Data Staner (SDS).</p>
					<a class="cta-btn" href="<?= site_url(); ?>registrasi">Dapatkan Akses <i class="bx bx-lock-open-alt"></i></a>
				</div>

			</div>
		</section>

		<section id="contact" class="contact">
			<div class="container">

				<div class="section-title">
					<span>Kontak</span>
					<h2>Kontak</h2>
					<p>Hubungi tim kami untuk kritik, saran, atau pertanyaan</p>
				</div>

				<div class="row">
					<div class="col-lg-5 d-flex align-items-stretch">
						<div class="info">
							<div class="address">
								<i class="icofont-google-map"></i>
								<h4>Alamat</h4>
								<p>Kampus PKN STAN, Jl. Bintaro Utama No. 5 Sektor V Pondok Aren, Kota Tangerang Selatan, Provinsi Banten</p>
							</div>
							<div class="email">
								<i class="icofont-envelope"></i>
								<h4>Email</h4>
								<p>kominfo.bempknstan@gmail.com</p>
							</div>
							<div class="phone">
								<i class="icofont-phone"></i>
								<h4>WhatsApp</h4>
								<p>+62 838 7910 1232 (Walid)</p>
							</div>
						</div>

					</div>

					<div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
						<form action="forms/contact.php" method="post" role="form" class="php-email-form">
							<div class="form-row">
								<div class="form-group col-md-6">
									<input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" placeholder="Nama Lengkap" required />
								</div>
								<div class="form-group col-md-6">
									<input type="email" class="form-control" name="email" id="email" data-rule="email" placeholder="No. WhatsApp" required />
								</div>
							</div>
							<div class="form-group">
								<textarea class="form-control" name="message" rows="5" placeholder="Kritik, Saran, atau Pertanyaan" required></textarea>
								<div class="validate"></div>
							</div>
							<div class="text-center"><button type="submit">Kirim <i class="bx bx-paper-plane"></i></button></div>
						</form>
					</div>

				</div>

			</div>
		</section><!-- End Contact Section -->

	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<footer id="footer">
		<div class="container footer-bottom clearfix">
			<div class="copyright">
				&copy; Copyright 2020 <strong><span>Portal Pusat Data Staner (SDS)</span></strong>. Hak Cipta dilindungi Undang-Undang.
			</div>
			<div class="credits">
				Dibangun oleh Tim PTI Kementerian Kominfo <a href="https://instagram.com/bempknstan">BEM PKN STAN</a>.
			</div>
		</div>
	</footer>

	<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

	<!-- Vendor JS Files -->
	<script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url(); ?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
	<script src="<?= base_url(); ?>assets/vendor/php-email-form/validate.js"></script>
	<script src="<?= base_url(); ?>assets/vendor/waypoints/jquery.waypoints.min.js"></script>
	<script src="<?= base_url(); ?>assets/vendor/counterup/counterup.min.js"></script>
	<script src="<?= base_url(); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="<?= base_url(); ?>assets/vendor/venobox/venobox.min.js"></script>
	<script src="<?= base_url(); ?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>

	<!-- Template Main JS File -->
	<script src="<?= base_url(); ?>assets/js/main.js"></script>

</body>

</html>