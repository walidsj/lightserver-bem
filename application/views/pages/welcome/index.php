<!DOCTYPE html>
<html lang="en">

<?= $this->load->view('layouts/header', null, true); ?>

<body>

	<?= $this->load->view('components/navigation', null, true); ?>

	<section id="hero" class="d-flex align-items-center my-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
					<h1>Portal Satu Data Staner</h1>
					<h2><i>Open Source Database</i> Kemahasiswaan KM PKN STAN yang dikelola oleh BEM PKN STAN</h2>
					<div class="d-flex">
						<a href="#about" class="btn-get-started scrollto">Yuk Pelajari</a>
						<a href="<?= site_url(); ?>registrasi" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Dapatkan Akses <i class="bx bx-lock-open-alt"></i></a>
					</div>
				</div>
				<div class="col-lg-6 order-1 order-lg-2 hero-img text-center">
					<img src="<?= base_url(); ?>assets/img/hero-img.png" class="img-fluid animated" alt="" width="450">
				</div>
			</div>
		</div>

	</section>

	<main id="main" class="mt-5">

		<section id="about" class="about">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<img src="<?= base_url(); ?>assets/img/about.png" class="img-fluid" alt="">
					</div>
					<div class="col-lg-6 pt-4 pt-lg-0 content">
						<h3>Temukan Data Kemahasiswaan dengan Mudah!</h3>
						<p>
							Portal Satu Data Staner (SDS) adalah inisiatif BEM PKN STAN untuk mendorong pergerakan dan pengambilan kebijakan Keluarga Mahasiswa yang tepat sasaran didukung dengan data kemahasiswaan.
						</p>
						<ul>
							<li><i class="icofont-check-circled"></i> Satu standar data dan satu portal data</li>
							<li><i class="icofont-check-circled"></i> Pemenuhan kebutuhan data publik bagi mahasiswa</li>
							<li><i class="icofont-check-circled"></i> Akses data mudah, akurat, dan aktual</li>
						</ul>
					</div>
				</div>
			</div>
		</section>

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
		</section>

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
		</section>

	</main>

	<?= $this->load->view('components/footer', null, true); ?>

	<?= $this->load->view('components/gotoup', null, true); ?>

	<script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url(); ?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
	<script src="<?= base_url(); ?>assets/vendor/php-email-form/validate.js"></script>
	<script src="<?= base_url(); ?>assets/vendor/waypoints/jquery.waypoints.min.js"></script>
	<script src="<?= base_url(); ?>assets/vendor/counterup/counterup.min.js"></script>
	<script src="<?= base_url(); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="<?= base_url(); ?>assets/vendor/venobox/venobox.min.js"></script>
	<script src="<?= base_url(); ?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>

	<script src="<?= base_url(); ?>assets/js/main.js"></script>

</body>

</html>