<!doctype html>
<html>

<head>
   <?php $this->load->view('components/headerComponent'); ?>
</head>

<body style="background-color: #fff !important;">
   <?php $this->load->view('components/navComponent'); ?>
   <section id="main">
      <div class="container" style="margin-top:30px;">
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="<?= site_url(); ?>"><i class="fa fa-home"></i><span> Home</span></a></li>
               <li class="breadcrumb-item active"><a href="<?= site_url(); ?>account">Account</a></li>
            </ol>
         </nav>
      </div>
      <div class="container" style="margin-top:40px; margin-bottom:70px;">
         <div class="row justify-content-center">
            <div class="col-md-4 col-12">
               <div class="card">
                  <div class="card-header">
                     <legend>Silakan Login</legend>
                  </div>
                  <div class="card-body">
                     <?= form_open(current_url()); ?>
                     <div class="form-group">
                        <label for="email_sub_elkam">Alamat Email</label>
                        <input id="email_sub_elkam" class="form-control" name="email_sub_elkam" type="email" required placeholder="Alamat Email" value="<?= set_value('email_sub_elkam'); ?><?= !empty($this->session->flashdata('email')) ? $this->session->flashdata('email') : ''; ?>">
                        <?= form_error('email_sub_elkam'); ?>
                     </div>
                     <div class="form-group">
                        <label for="password_sub_elkam">Kata Sandi</label>
                        <input id="password_sub_elkam" class="form-control" name="password_sub_elkam" type="password" required placeholder="Kata Sandi">
                        <?= form_error('password_sub_elkam'); ?>
                     </div>
                     <div class="form-group">
                        <button type="submit" class="btn btn-block btn-success">Login</button>
                     </div>
                     <div class="form-group mt-4 text-center">
                        Belum punya akun instansi? <a href="<?= site_url(); ?>account/register">Register</a>
                     </div>
                     <?= form_close(); ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
   </section>
   <?php $this->load->view('components/footerComponent'); ?>
   </div>

   <?php $this->load->view('components/scriptComponent'); ?>
</body>

</html>