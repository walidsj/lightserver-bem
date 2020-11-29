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
               <li class="breadcrumb-item active"><a href="<?= site_url(); ?>developer">Developer Page</a></li>
            </ol>
         </nav>
      </div>
      <div class="container" style="margin-top:40px; margin-bottom:70px;">
         <div class="row">
            <div class="col-md-12 col-12">
               <legend>Coming Soon!</legend>
               <p style="text-align:justify;" class="mt-3">Portal Satu Data Staners untuk akses API bagi para developer!</p>
               </p>
            </div>
         </div>
      </div>
      </div>
   </section>
   <?php $this->load->view('components/footerComponent'); ?>
   </div>
</body>

</html>