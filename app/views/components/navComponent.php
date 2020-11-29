<nav class="navbar navbar-expand-lg navbar-light bg-light bg-white">
   <div class="container">
      <a href="<?= site_url(); ?>">
         <img src='<?= base_url(); ?>public/assets/img/logo-navbar.png' style="height: 70px;"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler393" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarToggler393">
         <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item<?= ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'welcome') ? ' active' : ''; ?>">
               <a class=" nav-link" href="<?= site_url(); ?>">Beranda<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item<?= ($this->uri->segment(1) == 'dataset') ? ' active' : ''; ?>">
               <a class="nav-link" href="<?= site_url(); ?>dataset">Data</a>
            </li>
            <li class="nav-item<?= ($this->uri->segment(1) == 'about') ? ' active' : ''; ?>">
               <a class="nav-link" href="<?= site_url(); ?>about">Tentang</a>
            </li>
            <li class="nav-item <?= ($this->uri->segment(1) == 'account') ? ' active' : ''; ?>">
               <a class="nav-link" href="<?= site_url(); ?>account">Login</a>
            </li>
         </ul>
      </div>
   </div>
</nav>