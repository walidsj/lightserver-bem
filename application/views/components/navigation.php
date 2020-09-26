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
                <li class="<?= ($this->uri->segment(1) == "") ? "active" : null; ?>"><a href=" <?= site_url(); ?>">Beranda</a></li>
                <li class="<?= ($this->uri->segment(1) == "dataset") ? "active" : null; ?>"><a href="<?= site_url(); ?>dataset">Data</a></li>
                <li class="<?= ($this->uri->segment(1) == "alat") ? "active" : null; ?>"><a href="<?= site_url(); ?>alat">Alat</a></li>
                <li class="<?= ($this->uri->segment(1) == "tentang") ? "active" : null; ?>"><a href="<?= site_url(); ?>tentang">Tentang</a></li>
            </ul>
        </nav>
        <a href="<?= site_url(); ?>/register" class="get-started-btn scrollto">Dapatkan Akses <i class="bx bx-lock-open-alt"></i></a>

    </div>
</header>